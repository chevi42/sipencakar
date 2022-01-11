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
                        <a href="<?= base_url('soal') ?>">soal</a>
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
                    <div class="card-body">
                        <div class="col-md-6">
                            <input type="text" name="id_soal" value="<?= $soal['id_soal'] ?>" hidden>
                            <div class="form-group">
                                <label for="soal" class="placeholder"><b>soal</b></label>
                                <div class="position-relative">
                                    <input id="soal" name="soal" type="text" class="form-control" value="<?= $soal['soal'] ?>">
                                    <?= form_error('soal', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <input type="text" name="bobot" value="<?= $soal['bobot'] ?>" hidden>
                            <div class="form-group">
                                <label for="bobot" class="placeholder"><b>Bobot</b></label>
                                <div class="position-relative">
                                    <input id="bobot" name="bobot" type="text" class="form-control" value="<?= $soal['bobot'] ?>">
                                    <?= form_error('bobot', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                            <input type="text" name="jawaban" value="<?= $soal['jawaban'] ?>" hidden>
                            <div class="form-group">
                                <label for="jawaban" class="placeholder"><b>Jawaban</b></label>
                                <div class="position-relative">
                                    <input id="jawaban" name="jawaban" type="text" class="form-control" value="<?= $soal['jawaban'] ?>">
                                    <?= form_error('jawaban', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <input type="text" name="option1" value="<?= $soal['option1'] ?>" hidden>
                            <div class="form-group">
                                <label for="option1" class="placeholder"><b>Option A</b></label>
                                <div class="position-relative">
                                    <input id="option1" name="option1" type="text" class="form-control" value="<?= $soal['option1'] ?>">
                                    <?= form_error('option1', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="option2" value="<?= $soal['option2'] ?>" hidden>
                            <div class="form-group">
                                <label for="option2" class="placeholder"><b>Option B</b></label>
                                <div class="position-relative">
                                    <input id="option2" name="option2" type="text" class="form-control" value="<?= $soal['option2'] ?>">
                                    <?= form_error('option2', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="option3" value="<?= $soal['option3'] ?>" hidden>
                            <div class="form-group">
                                <label for="option3" class="placeholder"><b>Option C</b></label>
                                <div class="position-relative">
                                    <input id="option3" name="option3" type="text" class="form-control" value="<?= $soal['option3'] ?>">
                                    <?= form_error('option3', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="option4" value="<?= $soal['option4'] ?>" hidden>
                            <div class="form-group">
                                <label for="option4" class="placeholder"><b>Option D</b></label>
                                <div class="position-relative">
                                    <input id="option4" name="option4" type="text" class="form-control" value="<?= $soal['option4'] ?>">
                                    <?= form_error('option4', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-action">
                        <button type="submit" class="btn btn-primary" name="ubah" onclick="return confirm('Are you sure want to edit?')">Ubah</button>
                        <a href=" <?= base_url('soal') ?>" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>