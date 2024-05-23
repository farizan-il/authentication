<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Website | Farizan </title>
    <meta name="description" content="" />

    <!-- gambar dari shutterstock-->
    <link rel="icon" type="image/x-icon" href="https://www.shutterstock.com/image-vector/letter-f-curves-logo-vector-260nw-1021437535.jpg" />

    <!-- Fonts dari google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="http://localhost/zan-template/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="http://localhost/zan-template/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="http://localhost/zan-template/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="http://localhost/zan-template/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="http://localhost/zan-template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="http://localhost/zan-template/assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="http://localhost/zan-template/assets/vendor/js/helpers.js"></script>
    <script src="http://localhost/zan-template/assets/js/config.js"></script>
</head>

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <div class="app-brand justify-content-center">
                            <a href="" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <img src="http://localhost/zan-template/assets/img/logo.png" alt="" style="width: 60px;">
                                </span>
                            </a>
                        </div>
                        <h4 class="mb-2">Hai... Selamat Datang! 👋</h4>
                        <p class="mb-4">Silakan masuk ke akun anda</p>

                        <!-- Tampilkan pesan kesalahan -->
                        <?php if ($this->session->flashdata('error')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $this->session->flashdata('error'); ?>
                            </div>
                        <?php endif; ?>

                        <form id="formAuthentication" class="mb-3" action="<?php echo site_url('welcome/login'); ?>" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email atau Username</label>
                                <input type="text" class="form-control" id="email" name="email_username" placeholder="Enter your email or username" autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Kata Sandi</label>
                                    <a href="auth-forgot-password-basic.html">
                                        <small>Lupa Kata Sandi?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" />
                                    <label class="form-check-label" for="remember-me"> Ingatkan Saya </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>Belum Punya Akun?</span>
                            <a href="AuthRegister">
                                <span>Buat Akun</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="http://localhost/zan-template/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="http://localhost/zan-template/assets/vendor/libs/popper/popper.js"></script>
    <script src="http://localhost/zan-template/assets/vendor/js/bootstrap.js"></script>
    <script src="http://localhost/zan-template/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="http://localhost/zan-template/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="http://localhost/zan-template/assets/js/main.js"></script>
</body>

</html>