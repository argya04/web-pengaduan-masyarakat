<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <div class="alert alert-primary" role="alert">
        Selamat datang di E - LAPOR Website Pengaduan Masyarakat, <strong> <?= user()->nama; ?> .</strong>
    </div>
    <h1 class="h3 mb-3 text-gray-800">Info Laporan Pengaduan</h1>



    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
            <div class="row">

                <!-- Total Pengaduan Berdasarkan Username -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success border-bottom-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Total Pengaduan saya</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="far fa-file fa-2x text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- PENGADUAN BELUM DITANGGAPI -->
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

                <!-- PENGADUAN DITANGGAPI -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary border-bottom-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Diverifikasi</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $verifikasi; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-circle-notch fa-2x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PENGADUAN Diproses -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info border-bottom-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Di Proses</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $proses; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-circle-notch fa-2x text-info"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PENGADUAN SELESAI -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success border-bottom-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Selesai</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $selesai; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="far fa-check-circle fa-2x text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PENGADUAN DITOLAk -->
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