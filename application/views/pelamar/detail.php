<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <!-- <h4 class="page-title"><?= $position ?></h4> -->
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="<?= base_url('admin') ?>">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('karyawan') ?>">Karyawan</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="">Detail <?= $position ?></a>
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title"><?= $position ?></h4>
                    </div>
                </div>
                <div class="card-body row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="text-primary">Nama</h2 class="text-primary">
                            </div>
                            <div class="col-md-6">
                                <h2 class="text-primary"> : <?= $karyawan['nama_karyawan'] ?></h2 class="text-primary">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="text-primary">NIK</h2 class="text-primary">
                            </div>
                            <div class="col-md-6">
                                <h2 class="text-primary"> : <?= $karyawan['nik'] ?></h2 class="text-primary">
                            </div>
                        </div>
                        <div class="row" hidden="hidden">
                            <div class="col-md-4">
                                <h2 class="text-primary">Jabatan</h2 class="text-primary">
                            </div>
                            <div class="col-md-6">
                                <h2 class="text-primary"> : <?= $karyawan['jabatan'] ?></h2 class="text-primary">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="text-primary">Jenis Kelamin</h2 class="text-primary">
                            </div>
                            <div class="col-md-6">
                                <?php
                                if ($karyawan['jenis_kelamin'] == 'L') {
                                    $jk = 'Laki-laki';
                                } else {
                                    $jk = 'Perempuan';
                                }
                                ?>
                                <h2 class="text-primary"> : <?= $jk ?></h2 class="text-primary">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="text-primary">Pendidikan Terakhir</h2 class="text-primary">
                            </div>
                            <div class="col-md-6">
                                <h2 class="text-primary"> : <?= $karyawan['pendidikan_terakhir'] ?></h2 class="text-primary">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <h2 class="text-primary">Departement</h2 class="text-primary">
                            </div>
                            <div class="col-md-6">
                                <h2 class="text-primary"> : <?= $karyawan['departement'] ?></h2 class="text-primary">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-stats<?php if ($karyawan['aktif'] == "Y") { ?> card-success <?php } else {  ?> card-danger <?php } ?>card-round">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <?php
                                        if ($karyawan['aktif'] == "Y") {
                                            ?>
                                            <div class="icon-big text-center">
                                                <i class="flaticon-success"></i>
                                            </div>
                                        <?php } else { ?>
                                            <div class="icon-big text-center">
                                                <i class="flaticon-error"></i>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="col col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Status</p>
                                            <?php
                                            if ($karyawan['aktif'] == 'Y') {
                                                $status = 'Aktif';
                                            } else {
                                                $status = 'Tidak Aktif';
                                            }
                                            ?>
                                            <h4 class="card-title"><?= $status ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>