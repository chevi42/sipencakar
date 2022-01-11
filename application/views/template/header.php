<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?= $title ?></title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url(); ?>assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?= base_url(); ?>assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Open+Sans:300,400,600,700"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
                urls: ['<?= base_url(); ?>assets/css/fonts.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/azzara.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/demo.css">
</head>

<body>

    <div class="">
        <!--
			Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
        <div class="main-header" data-background-color="light-blue">
            <!-- Logo Header -->
            <div class="logo-header">

                <!-- <a href="<?= base_url('admin'); ?>" class="logo">
                    <img src="<?= base_url(); ?>assets/img/logoazzara.svg" alt="navbar brand" class="navbar-brand">
                </a> -->
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-bars"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
                <div class="navbar-minimize">
                    <button class="btn btn-minimize btn-rounded">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg">

                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="<?= base_url('assets/img/profil/') . $admin['foto']; ?>" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <li>
                                    <div class="user-box">
                                        <div class="u-text">
                                            <h4><?= $admin['nama']; ?></h4>
                                            <p class="text-muted"><?= $admin['email']; ?></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('admin/profil'); ?>">Profil Saya</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar" style="background-color: rgba(31,30,30,.12)">

            <div class="sidebar-background"></div>
            <div class="sidebar-wrapper scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="<?= base_url('assets/img/profil/') . $admin['foto']; ?>" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a href="<?= base_url('admin/profil'); ?>">
                                <span>
                                    <?= $admin['nama']; ?>
                                    <span class="user-level"><?= $admin['akses']; ?></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <ul class="nav">
                        <li class="nav-item <?php if ($position == 'Halaman Utama') { ?> active <?php } ?>">
                            <a href="<?= base_url('admin') ?>">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <?php if ($admin['akses'] == "Administrator" || $admin['akses'] == "HRD") { ?>
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#datamaster" class="collapsed" aria-expanded="false">
                                    <i class="fas fa-layer-group"></i>
                                    <p>Data Master</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="datamaster" style="">
                                    <ul class="nav nav-collapse">
                                        <li class="nav-item <?php if ($position == 'HRD') { ?> active <?php } ?>">
                                            <a href="<?= base_url('hrd') ?>">
                                                <i class="fas fa-user-tie"></i>
                                                <p>HRD</p>
                                            </a>
                                        </li>
                                        <li class="nav-item <?php if ($position == 'Lowongan') { ?> active <?php } ?>">
                                            <a href="<?= base_url('lowongan') ?>">
                                                <i class="fas fa-book"></i>
                                                <p>Lowongan</p>
                                            </a>
                                        </li>
                                        <li class="nav-item <?php if ($position == 'Soal') { ?> active <?php } ?>">
                                            <a href="<?= base_url('soal') ?>">
                                                <i class="fas fa-book"></i>
                                                <p>Soal</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item <?php if ($position == 'Kriteria') { ?> active <?php } ?>">
                                <a href="<?= base_url('kriteria') ?>">
                                    <i class="fas fa-list-ul"></i>
                                    <p>Kriteria</p>
                                </a>
                            </li>
                            <li class="nav-item <?php if ($position == 'Pelamar') { ?> active <?php } ?>">
                                <a href="<?= base_url('pelamar') ?>">
                                    <i class="fas fa-user-tie"></i>
                                    <p>Pelamar</p>
                                </a>
                            </li>

                            <li class="nav-item <?php if ($position == 'Nilai') { ?> active <?php } ?>">
                                <a href="<?= base_url('nilai') ?>">
                                    <i class="fas fa-clipboard"></i>
                                    <p>Nilai</p>
                                </a>
                            </li>
                        <?php } ?>

                        <?php if ($admin['akses'] == "Administrator") { ?>
                            <li class="nav-item <?php if ($position == 'Pengguna') { ?> active <?php } ?>">
                                <a href="<?= base_url('admin/pengguna') ?>">
                                    <i class="fas fa-user-cog"></i>
                                    <p>Pengguna</p>
                                </a>
                            </li>
                        <?php } ?>

                        <?php if ($admin['akses'] == "HRD" || $admin['akses'] == "Administrator") { ?>
                            <li class="nav-item <?php if ($position == 'Hasil Psikotest') { ?> active <?php } ?>">
                                <a href="<?= base_url('psikotest/hasil') ?>">
                                    <i class="fas fa-clipboard"></i>
                                    <p>Hasil Psikotes</p>
                                </a>
                            </li>
                        <?php } ?>

                        <?php if ($admin['akses'] == "Administrator" || $admin['akses'] == "Pelamar") { ?>
                            <?php //if ($hasil_test == 0) { ?>
                                <li class="nav-item <?php if ($position == 'psikotest') { ?> active <?php } ?>">
                                    <a href="<?= base_url('psikotest') ?>">
                                        <i class="fas fa-clipboard"></i>
                                        <p>Psikotest</p>
                                    </a>
                                </li>
                            <?php// } ?>
                        <?php } ?>

                        <li class="nav-item">
                        <?php if ($admin['akses'] == "Administrator") { ?>
                            <a data-toggle="collapse" href="#base" class="collapsed" aria-expanded="false">
                                <i class="fas fa-layer-group"></i>
                                <p>Laporan</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base" style="">
                                <ul class="nav nav-collapse">
                                        <li>
                                            <a href="<?= base_url('laporan/laporan_penilai/karyawan') ?>">
                                                <i class="fas fa-clipboard"></i>
                                                <span>Laporan Rekap Karyawan</span>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Are you sure want to logout?</div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>