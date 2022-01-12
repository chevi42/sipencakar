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
            <?php } else if ($this->session->flashdata('kosong')) { ?>
                <div class="alert alert-danger alert-dismissable">
                    <h4><?= $this->session->flashdata('kosong'); ?>
                        <a href="<?= base_url('nilai') ?>">disini</a>
                    </h4>
                </div>
            <?php } ?>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title"><?= $position ?></h4>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 6%">No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Nilai Preferensi</th>
                                    <th>Status</th>
                                    <th style="width: 10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($nilai as $g) {
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $g['nik'] ?></td>
                                        <td><?= $g['nama_pelamar'] ?></td>
                                        <td><?= $g['preferensi'] ?></td>
                                        <td><?= $g['status'] ?></td>
                                        <td>
                                            <div class="form-button-action">
                                                <?php if ($admin['akses'] == "Administrator") { ?>
                                                <a href="<?= base_url('nilai/detail/') . $g['id_pelamar'] ?>" class="btn btn-link btn-warning">
                                                    <i class="fas fa-clipboard-list">Detail</i>
                                                </a>
                                                <?php } ?>

                                                <a href="<?= base_url('nilai/ubah/') . $g['id_pelamar'] ?>" class="btn btn-link btn-primary">
                                                    <i class="fas fa-edit">Ubah</i>
                                                </a>
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

<script src="<?php echo base_url() ?>assets/jQuery/jquery-2.2.4.min.js"></script>

<script type="text/javascript">
    
    $(document).ready(function(){
        $('#btn_add').click(function() {
            // window.replace('<?php echo site_url("nilai/tambah_nilai/");?>');
            window.location = '<?php echo site_url("nilai/tambah_nilai/"); ?>'
        });
    });

</script>


</div>