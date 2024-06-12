<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-2">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h2 text-gray-900 mb-4"><?=lang('Auth.loginTitle')?></h1>
                                </div>

                                <?= view('Myth\Auth\Views\_message_block') ?>


                                <div class="text-center">
                                    <h1 class="h6 text-gray-900 mb-4">Silahkan Login Untuk Melanjutkan</h1>
                                </div>
                                <form class="user" action="<?= route_to('login') ?>" method="post">
                                    <?= csrf_field() ?>



                                    <div class="form-group">
                                        <input type="text" name="login" placeholder="<?=lang('Auth.emailOrUsername')?>"
                                            class=" form-control form-control-user <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                            class="fa-thin fa-user" id="username" aria-describedby="username">
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control form-control-user <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                                            name="password" id="password" placeholder="<?=lang('Auth.password')?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>



                                    <button type="submit" name="btn_login" class="btn btn-primary btn-user btn-block"
                                        Value="Login"><?=lang('Auth.loginAction')?>
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small">Belum punya Akun ?</a>
                                    <a class="small" href="<?= route_to('register') ?>"><?=lang('Register')?></a>


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

<?= $this->endSection(); ?>