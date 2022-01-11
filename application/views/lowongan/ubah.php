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
                        <a href="<?= base_url('lowongan') ?>">Lowongan</a>
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
                            <input type="text" name="idadmin" value="<?= $lowongan['id_lowongan'] ?>" hidden>
                            <div class="form-group">
                                <label for="lowongan" class="placeholder"><b>Lowongan</b></label>
                                <div class="position-relative">
                                    <input id="lowongan" name="lowongan" type="text" class="form-control" value="<?= $lowongan['lowongan'] ?>">
                                    <?= form_error('lowongan', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label  for="status" class="placeholder"><b>Status</b></label>
                                <select class="form-control" id="status" name="status">
                                    <?php
                                        foreach ($status as $a) {
                                            if ($a == $lowongan['status']) { ?>
                                                <option value="<?= $a ?>" selected> Open </option>
                                            <?php } else { ?>
                                                <option value="<?= $a ?>">Close</option>
                                    <?php
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card-action">
                        <button type="submit" class="btn btn-primary" name="ubah" onclick="return confirm('Are you sure want to edit?')">Ubah</button>
                        <a href=" <?= base_url('lowongan') ?>" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>