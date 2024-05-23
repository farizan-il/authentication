<!-- Sidebar -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="http://localhost/zan-template/assets/img/logo.png" alt="" style="width: 40px;">
            </span>
            <span class="app-brand-text demo menu-text fw-bold ms-2">Force</span>
        </a>

        <a href="javascript:void(0);"
            class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item <?php echo $this->uri->segment(1) == 'dashboard' ? 'active open' : 'dashboard'; ?></li>">
            <a href="<?php echo base_url('dashboard'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Dashboard</div>
            </a>
        </li>
        <!-- Main Pages -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Main Pages</span></li>

        <!-- news -->
        <!-- <li class="menu-item">
            <a href="kelola-berita.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="Basic">Kelola Berita</div>
            </a>
        </li> -->

        <!-- BUS -->
        <li class="menu-item <?php echo $this->uri->segment(1) == 'ManageBusController' ? 'active open' : ''; ?>">
            <a href="<?php echo base_url('ManageBusController'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bus"></i>
                <div data-i18n="Basic">Kelola Bus</div>
            </a>
        </li>

        <!-- kelas dan fasilitas -->
        <li class="menu-item <?php echo $this->uri->segment(1) == 'ClassFacillity' ? 'active open' : ''; ?>">
            <a href="<?php echo base_url('ClassFacillity'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-building"></i>
                <div data-i18n="Basic">Kelas dan Fasilitas</div>
            </a>
        </li>

        <!-- lokasi -->
        <li class="menu-item <?php echo $this->uri->segment(1) == 'LocationController' ? 'active open' : ''; ?>">
            <a href="<?php echo base_url('LocationController'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map"></i>
                <div data-i18n="Basic">Lokasi</div>
            </a>
        </li>

        <!-- Jadwal -->
        <li class="menu-item " aria-="true" >
            <a href="schedule.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Basic">Jadwal</div>
            </a>
        </li>

        <!-- Tiket -->
        <li class="menu-item " aria-="true">
            <a href="ticket.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-receipt"></i>
                <div data-i18n="Basic">Tiket</div>
            </a>
        </li>

        <!-- FAQ -->
        <li class="menu-item <?php echo $this->uri->segment(2) == 'manageFaq' ? 'active open' : ''; ?>">
            <a href="<?php echo base_url('bustix/'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-help-circle"></i>
                <div data-i18n="Basic">Kelola FAQ</div>
            </a>
        </li>

        <!-- TnC -->
        <li class="menu-item <?php echo $this->uri->segment(2) == 'termAndCondition' ? 'active open' : ''; ?>">
            <a href="<?php echo base_url('bustix/'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Basic">Term and Condition</div>
            </a>
        </li>
    
        <!-- reports -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">reports</span></li>
    
        <!-- Transaction -->
        <li class="menu-item <?php echo $this->uri->segment(2) == 'TransactionController' ? 'active open' : ''; ?>">
            <a href="<?php echo base_url('transactionController'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-money"></i>
                <div data-i18n="Tables">Transaksi</div>
            </a>
        </li>

        <!-- Refund -->
        <li class="menu-item <?php echo $this->uri->segment(2) == 'refund' ? 'active open' : ''; ?>">
            <a href="<?php echo base_url('bustix/'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-refresh"></i>
                <div data-i18n="Tables">Refund</div>
            </a>
        </li>

        <!-- Manifest -->
        <li class="menu-item " aria-="true">
            <a href="manifest.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div data-i18n="Tables">Manifest</div>
            </a>
        </li>

        <!-- Dropdown Report -->
        <li class="menu-item " aria-="true">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-bar-chart"></i>
                <div data-i18n="Form Elements">Laporan</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="laporan-pengguna.html" class="menu-link">
                        <div data-i18n="Basic Inputs">Laporan Pengguna</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="laporan-reschedule.html" class="menu-link">
                        <div data-i18n="Input groups">Laporan Reschedule</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="laporan-pengaduan.html" class="menu-link">
                        <div data-i18n="Input groups">Laporan Pengaduan</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Manage User & Admin -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Manage admin</span></li>

        <!-- Kelola Admin -->
        <li class="menu-item " aria-="true">
            <a href="kelola-admin.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Tables">Kelola Admin</div>
            </a>
        </li>

        <!-- Kelola Operator -->
        <li class="menu-item " aria-="true">
            <a href="kelola-operator.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Tables">Kelola Operator</div>
            </a>
        </li>

        <!-- Role and Permission -->
        <li class="menu-item " aria-="true">
            <a href="role-and-permission.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-key"></i>
                <div data-i18n="Tables">Role and Permission</div>
            </a>
        </li>
    </ul>
    
</aside>
<!-- / Sidebar -->