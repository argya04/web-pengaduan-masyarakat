<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url(); ?>/css/styles.css" rel="stylesheet">

</head>


<body class="bg-gradient-purple">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h2 text-gray-900 mb-4"><?=lang('Auth.register')?></h1>
                                    </div>

                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                    <div class="text-center">
                                        <h1 class="h6 text-gray-900 mb-4">Silahkan Daftar Untuk Melanjutkan</h1>
                                    </div>
                                    <form class="user" action="<?= route_to('register') ?>" method="post">
                                        <?= csrf_field() ?>

                                        <div class="form-group">
                                            <input type="text" name="nik"
                                                class="form-control form-control-user <?php if(session('errors.nik')) : ?>is-invalid<?php endif ?>"
                                                id="nik" aria-describedby="nik" placeholder="Masukkan Nomor NIK"
                                                value="<?= old('nik') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.nik') ?>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="nama"
                                                class="form-control form-control-user <?php if(session('errors.nama')) : ?>is-invalid<?php endif ?>"
                                                id="nama" aria-describedby="nama" placeholder="Nama Lengkap"
                                                value="<?= old('nama') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.nama') ?>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="alamat"
                                                class="form-control form-control-user <?php if(session('errors.alamat')) : ?>is-invalid<?php endif ?>"
                                                id="alamat" aria-describedby="alamat" placeholder="Alamat"
                                                value="<?= old('alamat') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.alamat') ?>
                                            </div>

                                        </div>



                                        <div class="form-group">
                                            <label class="form-group">Tanggal Lahir :</label>
                                            <input type="date" name="tgl_lahir"
                                                class="form-control form-control-user <?php if(session('errors.tgl_lahir')) : ?>is-invalid<?php endif ?>"
                                                id="tgl_lahir" aria-describedby="tgl_lahir" placeholder="Tanggal Lahir"
                                                value="<?= old('tgl_lahir') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.tgl_lahir') ?>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="no_telepon"
                                                class="form-control form-control-user <?php if(session('errors.no_telepon')) : ?>is-invalid<?php endif ?>"
                                                id="no_telepon" aria-describedby="no_telepon"
                                                placeholder="Nomor Telepon" value="<?= old('no_telepon') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.no_telepon') ?>
                                            </div>

                                        </div>



                                        <div class="form-group">
                                            <input type="text" name="username"
                                                class="form-control form-control-user <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>"
                                                id="username" aria-describedby="username"
                                                placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.username') ?>
                                            </div>

                                        </div>


                                        <div class="form-group">
                                            <input type="password" <?=lang('Auth.password')?>
                                                class="form-control form-control-user <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                                                name="password" id="password" placeholder="<?=lang('Auth.password')?>">

                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" <?=lang('Auth.repeatPassword')?>
                                                class="form-control form-control-user <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                                name="pass_confirm" id="password"
                                                placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                                            <div class="invalid-feedback">
                                                <?= session('errors.pass_confirm') ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="email"
                                                class="form-control form-control-user <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                                id="username" aria-describedby="username"
                                                placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.email') ?>
                                            </div>
                                            <small id="emailHelp"
                                                class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                                        </div>

                                        <button type="submit" name="submit"
                                            class="btn btn-primary btn-user btn-block">Submit
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small">Sudah punya akun? </a>
                                        <a class="small" href="<?= route_to('login') ?>">Login</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Footer -->
                        <footer class="page-footer font-small blue">

                            <!-- Copyright -->
                            <div class="footer-copyright text-center py-3">
                                <a>Copyright &copy; Argya Falan Rifqi <?= date("Y")?></a>
                            </div>
                            <!-- Copyright -->

                        </footer>
                        <!-- Footer -->
                    </div>
                </div>

            </div>

        </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url(); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>