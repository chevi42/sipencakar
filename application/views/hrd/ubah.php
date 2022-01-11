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
                        <a href="<?= base_url('dosen') ?>">Karyawan</a>
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
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" class="form-control" name="nik" placeholder="Name" value="<?= $hrd['nik'] ?>">
                            <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Name" value="<?= $hrd['nama'] ?>">
                            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Name" value="<?= $hrd['alamat'] ?>">
                            <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        <div class="form-group ">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                                <?php
                                if ($hrd['jenis_kelamin'] != 'L') {
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
                            <label>No.HP</label>
                            <input type="text" class="form-control" name="no_hp" placeholder="No HP" value="<?= $hrd['no_hp'] ?>">
                            <?= form_error('no_hp', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Name" value="<?= $hrd['email'] ?>">
                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        </div>
            
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-primary" name="ubah" onclick="return confirm('Are you sure want to edit?')">Ubah</button>
                        <a href=" <?= base_url('dosen') ?>" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>