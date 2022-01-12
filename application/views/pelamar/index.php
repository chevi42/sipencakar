<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <!-- <h4 class="page-title">Data <?= $position ?></h4> -->
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
                        <a href=""><?= $position ?></a>
                    </li>
                </ul>
            </div>
            <?php if ($this->session->flashdata('done')) { ?>
                <div class="alert alert-success alert-dismissable" id="close_alert">
                    <h4><?= $this->session->flashdata('done'); ?></h4>
                </div>
            <?php } ?>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title"><?= $position ?></h4>
                        <?php if ($admin['akses'] == "Administrator") { ?>
                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                <i class="fa fa-plus"></i>
                                Tambah <?= $position ?>
                            </button>
                        <?php } ?>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Modal -->
                    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header no-bd">
                                    <h5 class="modal-title">
                                        <span class="fw-mediumbold">
                                            Tambah <?= $position; ?> Baru
                                        </span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label>Nama</label>
                                                    <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Pelamar">
                                                </div>
                                                <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                                <div class="form-group form-group-default">
                                                    <label>NIK</label>
                                                    <input id="nik" name="nik" type="text" class="form-control" placeholder="NIK">
                                                </div>
                                                <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                                                <div class="form-group form-group-default">
                                                    <label>Jenis Kelamin</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                                                        <option value="L">Laki-Laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Alamat</label>
                                                    <input id="alamat" name="alamat" type="text" class="form-control" placeholder="alamat">
                                                </div>
                                                 <div class="form-group form-group-default">
                                                    <label>No.HP</label>
                                                    <input id="no_hp" name="no_hp" type="text" class="form-control" placeholder="no_hp">
                                                </div>
                                                 <!-- <div class="form-group form-group-default"> -->
                                                    <!-- <label>Email</label> -->
                                                    <!-- <input id="email" name="email" type="text" class="form-control" placeholder="email"> -->
                                                <!-- </div> -->
                                                <div class="form-group form-group-default">
                                                    <label>Nilai IPK</label>
                                                    <input id="ipk" name="ipk" type="text" class="form-control" placeholder="Nilai IPK">
                                                </div>
                                                 <div class="form-group form-group-default">
                                                    <label>Nilai TOEFL</label>
                                                    <input id="toefl" name="toefl" type="text" class="form-control" placeholder="Nilai TOEFL">
                                                </div>
                                                 <div class="form-group form-group-default">
                                                    <label>Pengalaman Kerja (Bulan)</label>
                                                    <input id="pengalaman" name="pengalaman" type="text" class="form-control" placeholder="Pengalaman Kerja (Dalam Bulan)">
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Umur</label>
                                                    <input id="umur" name="umur" type="text" class="form-control" placeholder="Umur">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer no-bd">
                                        <button type="submit" id="addRowButton" class="btn btn-primary">Tambah</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama Pelamar</th>
                                    <th>Lowongan</th>
                                    <th>Alamat</th>
                                    <th>No.HP</th>
                                    <!-- <th>Email</th> -->
                                    <th>Nilai IPK</th>
                                    <th>Nilai TOEFL</th>
                                    <th>Nilai PSIKOTEST</th>
                                    <th>Pengalaman (bulan)</th>
                                    <th>Umur</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pelamar as $g) {
                                    ?>
                                    <tr>

                                        <td><?= $no ?></td>
                                        <td><?= $g['nik'] ?></td>
                                        <td align="center"><?= $g['nama_pelamar'] ?></td>
                                        <td align="center"><?= $g['lowongan'] ?></td>
                                        <td><?= $g['alamat'] ?></td>
                                        <td><?= $g['no_hp'] ?></td>
                                        <td><?= $g['ipk'] ?></td>
                                        <td><?= $g['toefl'] ?></td>
                                        <td><?php if($g['nilai_akumulasi'] == 0){?> Belum Test <?php } else { echo $g['nilai_akumulasi'];} ?></td>
                                        <td><?= $g['pengalaman'] ?></td>
                                        <td><?= $g['umur'] ?></td>                                        
                                        <td>
                                            <div class="form-button-action">
                                                <?php if ($admin['akses'] == "Administrator") { ?>
                                                <a href="<?= base_url('pelamar/ubah/') . $g['id_pelamar'] ?>" class="btn btn-link btn-primary">
                                                    <i class="fas fa-edit">Ubah</i>
                                                </a>
                                               
                                                <a href="<?= base_url('pelamar/hapus/') . $g['id_pelamar'] ?>" class="btn btn-link btn-danger" onclick="return confirm('Are you sure want to delete?')">
                                                    <i class="fas fa-times">Hapus</i>
                                                </a>
                                                <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    $no = $no + 1;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>