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
                        <a href="<?= base_url('pelamar') ?>">Pelamar</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="">Ubah <?= $position ?></a>
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title"><?= $position ?></h4>
                    </div>
                </div>
                <form method="post" action="">
                    <div class="card-body col-md-6">
                        <input id="id_pelamar" name="id_pelamar" type="text" hidden="hidden" value="<?= $pelamar['id_pelamar'] ?>">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama_pelamar" placeholder="Name" value="<?= $pelamar['nama_pelamar'] ?>">
                            <?= form_error('nama_pelamar', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" class="form-control" name="nik" placeholder="NIK" value="<?= $pelamar['nik'] ?>">
                            <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group ">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                                <?php
                                if ($pelamar['jenis_kelamin'] != 'L') {
                                    ?>
                                    <option value="P" selected>Perempuan</option>
                                    <option value="L">Laki-laki</option>
                                <?php
                                } else {
                                    ?>
                                    <option value="P">Perempuan</option>
                                    <option value="L" selected>Laki-laki</option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?= $pelamar['alamat'] ?>">
                        </div>
                          <div class="form-group">
                            <label>No.HP</label>
                            <input type="text" class="form-control" name="no_hp" placeholder="No.HP" value="<?= $pelamar['no_hp'] ?>">
                        </div>
                          <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $pelamar['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Nilai IPK</label>
                            <input type="text" class="form-control" name="ipk" placeholder="Nilai IPK" value="<?= $pelamar['ipk'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Nilai TOEFL</label>
                            <input type="text" class="form-control" name="toefl" placeholder="Nilai TOEFL" value="<?= $pelamar['toefl'] ?>">
                        </div>
                        <div class="form-group" hidden>
                            <label>Psikotes</label>
                            <input type="text" class="form-control" name="psikotes" placeholder="Nilai Psikotes" value="<?= $pelamar['psikotes'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Pengalaman Kerja (Bulan)</label>
                            <input type="text" class="form-control" name="pengalaman" placeholder="Pengalaman Kerja" value="<?= $pelamar['pengalaman'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Umur</label>
                            <input type="text" class="form-control" name="umur" placeholder="Umur " value="<?= $pelamar['umur'] ?>">
                        </div>
                        <div class="form-group ">
                            <label>Lowongan</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="id_lowongan">
                                <?php
                                foreach ($lowongan as $m) {
                                    if ($pelamar['id_lowongan'] != $m['id_lowongan']) {
                                        ?>
                                        <option value="<?= $m['id_lowongan'] ?>"><?= $m['lowongan'] ?></option>
                                    <?php
                                        } else {
                                            ?>
                                        <option value="<?= $m['id_lowongan'] ?>" selected><?= $m['lowongan'] ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-primary" name="ubah" onclick="return confirm('Are you sure want to edit?')">Ubah</button>
                        <a href=" <?= base_url('pelamar') ?>" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>