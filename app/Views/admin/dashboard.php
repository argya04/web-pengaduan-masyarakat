<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">
    <h1 class="h3 mb-3 text-gray-800">Dashboard Admin</h1>



    <!-- Card Content - Collapse -->
    <div class="collapse show" id="collapseCardExample">
        <div class="card-body">
            <div class="row">

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-2 mb-4">
                    <div class="card border-left-primary border-bottom-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total User</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $tot_users; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success border-bottom-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Total Pengaduan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $tot_pengaduan; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-file fa-2x text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- PENGADUAN SELESAI -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info border-bottom-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        Total Tanggapan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $tot_tanggapan; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-file fa-2x text-info"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PENGADUAN SELESAI -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger border-bottom-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-2">
                                        Total Ditolak</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $tot_tolak; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-file fa-2x text-danger"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PENGADUAN SELESAI -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info border-bottom-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-2">
                                        Total Kategori</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $tot_kategori; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-file fa-2x text-info"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Kategori Kriminal-->
                <div class="col-xl-3 col-md-2 mb-4">
                    <div class="card border-left-success border-bottom-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Total Kategori Kriminal</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kriminal; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-file fa-2x text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Kategori Kesehatan-->
                <div class="col-xl-3 col-md-2 mb-4">
                    <div class="card border-left-success border-bottom-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Total Kategori Medis</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kesehatan; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-book-medical fa-2x text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Total Kategori Kebakaran-->
                <div class="col-xl-3 col-md-2 mb-4">
                    <div class="card border-left-success border-bottom-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Total Kategori Kebakaran</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kebakaran; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-fire-extinguisher fa-2x text-success"></i>
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