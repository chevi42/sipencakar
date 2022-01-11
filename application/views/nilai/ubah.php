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
                        <h4 class="card-title">Ubah <?= $position ?> <?= $karyawan['0']['nama_karyawan'] ?></h4>
                    </div>
                </div>
                <form method="post" action="<?= base_url('nilai/simpan/') . $karyawan['0']['id_karyawan'] ?>">
                    <div class="card-body col-md-8">
                        <input type="text" name="idadmin" value="<?= $periode['id_periode'] ?>" hidden>

                        <div class="form-group">
                            <label for="C1" class="placeholder"><b><?= $kriteria['0']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <?php
                                foreach ($nilai as $n) {
                                    if($n == 1){
                                        $head = '3' ;
                                    }else if($n == 2){
                                        $head = '2' ;
                                    }else if($n == 3){
                                        $head = '1' ;
                                    }else if ($n == 4){
                                        $head = '0';
                                    }

                                    ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C1" value="<?= $n ?>" <?php if ($karyawan['0']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $alternatif[$head]['nama_alternatif'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="C2" class="placeholder"><b><?= $kriteria['1']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <?php
                                foreach ($nilai as $n) {
                                    if($n == 1){
                                        $head = '3' ;
                                    }else if($n == 2){
                                        $head = '2' ;
                                    }else if($n == 3){
                                        $head = '1' ;
                                    }else if ($n == 4){
                                        $head = '0';
                                    }

                                    ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C2" value="<?= $n ?>" <?php if ($karyawan['1']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $alternatif[$head]['nama_alternatif'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="C3" class="placeholder"><b><?= $kriteria['2']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <?php
                                foreach ($nilai as $n) {
                                     if($n == 1){
                                        $head = '3' ;
                                    }else if($n == 2){
                                        $head = '2' ;
                                    }else if($n == 3){
                                        $head = '1' ;
                                    }else if ($n == 4){
                                        $head = '0';
                                    }
                                    ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C3" value="<?= $n ?>" <?php if ($karyawan['2']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $alternatif[$head]['nama_alternatif'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="C4" class="placeholder"><b><?= $kriteria['3']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <?php
                                foreach ($nilai as $n) {
                                     if($n == 1){
                                        $head = '3' ;
                                    }else if($n == 2){
                                        $head = '2' ;
                                    }else if($n == 3){
                                        $head = '1' ;
                                    }else if ($n == 4){
                                        $head = '0';
                                    }
                                    ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C4" value="<?= $n ?>" <?php if ($karyawan['3']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $alternatif[$head]['nama_alternatif'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="C5" class="placeholder"><b><?= $kriteria['4']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <?php
                                foreach ($nilai as $n) {
                                     if($n == 1){
                                        $head = '3' ;
                                    }else if($n == 2){
                                        $head = '2' ;
                                    }else if($n == 3){
                                        $head = '1' ;
                                    }else if ($n == 4){
                                        $head = '0';
                                    }
                                    ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C5" value="<?= $n ?>" <?php if ($karyawan['4']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $alternatif[$head]['nama_alternatif'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="C6" class="placeholder"><b><?= $kriteria['5']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <?php
                                foreach ($nilai as $n) {
                                     if($n == 1){
                                        $head = '3' ;
                                    }else if($n == 2){
                                        $head = '2' ;
                                    }else if($n == 3){
                                        $head = '1' ;
                                    }else if ($n == 4){
                                        $head = '0';
                                    }
                                    ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C6" value="<?= $n ?>" <?php if ($karyawan['5']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $alternatif[$head]['nama_alternatif'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="C7" class="placeholder"><b><?= $kriteria['6']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <?php
                                foreach ($nilai as $n) {
                                     if($n == 1){
                                        $head = '3' ;
                                    }else if($n == 2){
                                        $head = '2' ;
                                    }else if($n == 3){
                                        $head = '1' ;
                                    }else if ($n == 4){
                                        $head = '0';
                                    }
                                    ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C7" value="<?= $n ?>" <?php if ($karyawan['6']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $alternatif[$head]['nama_alternatif'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="C8" class="placeholder"><b><?= $kriteria['7']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <?php
                                foreach ($nilai as $n) {
                                     if($n == 1){
                                        $head = '3' ;
                                    }else if($n == 2){
                                        $head = '2' ;
                                    }else if($n == 3){
                                        $head = '1' ;
                                    }else if ($n == 4){
                                        $head = '0';
                                    }
                                    ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C8" value="<?= $n ?>" <?php if ($karyawan['7']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $alternatif[$head]['nama_alternatif'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="C9" class="placeholder"><b><?= $kriteria['8']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <?php
                                foreach ($nilai as $n) {
                                     if($n == 1){
                                        $head = '3' ;
                                    }else if($n == 2){
                                        $head = '2' ;
                                    }else if($n == 3){
                                        $head = '1' ;
                                    }else if ($n == 4){
                                        $head = '0';
                                    }
                                    ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C9" value="<?= $n ?>" <?php if ($karyawan['8']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $alternatif[$head]['nama_alternatif'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="C10" class="placeholder"><b><?= $kriteria['9']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <?php
                                foreach ($nilai as $n) {
                                     if($n == 1){
                                        $head = '3' ;
                                    }else if($n == 2){
                                        $head = '2' ;
                                    }else if($n == 3){
                                        $head = '1' ;
                                    }else if ($n == 4){
                                        $head = '0';
                                    }
                                    ?>
                                    <label class="form-radio-label">
                                        <input class="form-radio-input" type="radio" name="C10" value="<?= $n ?>" <?php if ($karyawan['9']['nilai_karyawan'] == $n) { ?> checked="" <?php } ?>>
                                        <span class="form-radio-sign"><?= $alternatif[$head]['nama_alternatif'] ?></span>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-primary" name="ubah" onclick="return confirm('Are you sure want to edit?')">Ubah</button>
                        <a href=" <?= base_url('nilai') ?>" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>