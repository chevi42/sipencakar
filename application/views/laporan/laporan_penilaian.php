<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
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
                    </div>
                </div>
                <div class="card-body">
                     <form method="post" action="">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Periode</label>
                                    <select class="form-control" id="periode" name="periode">
                                        <?php
                                        foreach ($periode as $p) {
                                            ?>
                                            <option value="<?= $p['id_periode'] ?>"><?= $p['waktu'].' '.$p['keterangan'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <center>
                        <button type="submit" id="btnprint" class=" col-md-12 btn btn-primary">Print</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/jQuery/jquery-2.2.4.min.js"></script>

<script>
    $(document).ready(function(){
        $('#btnprint').click(function() {
            periode = $('#periode').val();

            window.open('<?php echo site_url("laporan/laporan_penilaian_print/"); ?>'+periode);
        });
    });

</script>


</div>