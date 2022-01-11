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
                        <a href="<?= base_url('nilai') ?>">Nilai</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="">Ubah <?= $position ?></a>
                    </li>
                </ul>
            </div>
            <?php if ($this->session->flashdata('kosong')) { ?>
                <div class="alert alert-danger alert-dismissable">
                    <h4><?= $this->session->flashdata('kosong'); ?></h4>
                </div>
            <?php } ?>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title"><?= $position ?></h4>
                    </div>
                </div>
                <form method="post" action="<?= base_url('psikotest/simpan/')?>">
                    <input type="text" id="id_pelamar" name="id_pelamar" value="<?= $pengguna[0]['id_pelamar'] ?>" hidden >
                    <input type="text" id="id_lowongan" name="id_lowongan" value="<?= $pengguna[0]['id_lowongan'] ?>" hidden>
                    <div class="card-body col-md-8">
                        <?php for ($x = 0; $x < count($soal); $x++) { ?>
                            <div class="form-group">
                                <label for="<?= $soal[$x]['id_soal'] ?>" class="placeholder"><b><?php echo $x + 1 ?>.  <?= $soal[$x]['soal'] ?></b></label>
                                <div class="position-relative">
                                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" id="<?= $soal[$x]['id_soal'] ?>" name="<?= $soal[$x]['id_soal'] ?>" type="radio" value="<?= $soal[$x]['id_option'.$i] ?>">
                                            <span class="form-radio-sign"><?= $soal[$x]['option'.$i] ?></span>
                                        </label>    
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-success" name="ubah" onclick="return confirm('Are you sure want to finish test?')">Simpan</button>
                        <a href=" <?= base_url('nilai') ?>" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>