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
                        <a href=""><?= $position ?></a>
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
                        <h4 class="card-title"><?= $position ?> <?= $pelamar['nama_pelamar'] ?></h4>
                    </div>
                </div>
                <form method="post" action="">
                    <div class="card-body col-md-6">
                        <input id="id_pelamar" name="id_pelamar" type="text" hidden="hidden" value="<?= $pelamar['id_pelamar'] ?>">                        
                        <div class="form-group ">
                            <label>Status Penerimaan</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="status">
                                <?php
                                if ($pelamar['status'] != 'DITERIMA') {
                                    ?>
                                    <option value="DITERIMA" selected>DITERIMA</option>
                                    <option value="DITOLAK">DITOLAK</option>
                                <?php
                                } else {
                                    ?>
                                    <option value="DITERIMA">DITERIMA</option>
                                    <option value="DITOLAK" selected>DITOLAK</option>
                                <?php
                                }
                                ?>
                            </select>
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