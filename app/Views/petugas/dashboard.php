<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        Selamat datang di E - LAPOR Website Pengaduan Masyarakat, <strong> <?= user()->nama; ?> .</strong>
    </div>
    <h1 class="h3 mb-3 text-gray-800">Dashboard Petugas</h1>



    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
            <div class="row">

                <!-- Pengaduan Belum Diverifikasi -->
                <div class="col-xl-3 col-md-2 mb-4">
                    <div class="card border-left-warning border-bottom-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Belum Verifikasi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $belum; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-exclamation fa-2x text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- PENGADUAN Ditolak -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger border-bottom-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Di Tolak</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $ditolak; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="far fa-times-circle fa-2x text-danger"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>


</div>
<?= $this->endSection(); ?>