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
                        <h4 class="card-title">Tambah <?= $position ?></h4>
                    </div>
                </div>
                <form>
                    <div class="card-body col-md-8">
                        <input id="id_admin" name="id_admin" type="text" hidden="hidden" value="<?= $admin['id_admin'] ?>">

                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Nama pelamar</label>
                                <select class="form-control" id="pelamar" name="pelamar">
                                    <?php
                                    foreach ($pelamar as $p) {
                                        ?>
                                        <option value="<?= $p['id_pelamar'] ?>"><?= $p['nama_pelamar'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group form-group-default">
                                <label>Lowongan</label>
                                <select class="form-control" id="lowongan" name="lowongan">
                                    <?php
                                    foreach ($lowongan as $p) {
                                        ?>
                                        <option value="<?= $p['id_lowongan'] ?>"><?= $p['lowongan'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="C1" class="placeholder"><b><?= $kriteria['0']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C1','C1_1','1')" id="C1_1" name="C1">
                                    <span class="form-radio-sign"><?= $alternatif['3']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C1','C1_2','2')" id="C1_2" name="C1">
                                    <span class="form-radio-sign"><?= $alternatif['2']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C1','C1_3','3')" id="C1_3" name="C1">
                                    <span class="form-radio-sign"><?= $alternatif['1']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C1','C1_4','4')" id="C1_4" name="C1">
                                    <span class="form-radio-sign"><?= $alternatif['0']['nama_alternatif'] ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="C2" class="placeholder"><b><?= $kriteria['1']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C2','C2_1','1')" id="C2_1" name="C2">
                                    <span class="form-radio-sign"><?= $alternatif['3']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C2','C2_2','2')" id="C2_2" name="C2">
                                    <span class="form-radio-sign"><?= $alternatif['2']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C2','C2_3','3')" id="C2_3" name="C2">
                                    <span class="form-radio-sign"><?= $alternatif['1']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C2','C2_4','4')" id="C2_4" name="C2">
                                    <span class="form-radio-sign"><?= $alternatif['0']['nama_alternatif'] ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="C3" class="placeholder"><b><?= $kriteria['2']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C3','C3_1','1')" id="C3_1" name="C3">
                                    <span class="form-radio-sign"><?= $alternatif['3']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C3','C3_2','2')" id="C3_2" name="C3">
                                    <span class="form-radio-sign"><?= $alternatif['2']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C3','C3_3','3')" id="C3_3" name="C3">
                                    <span class="form-radio-sign"><?= $alternatif['1']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C3','C3_4','4')" id="C3_4" name="C3">
                                    <span class="form-radio-sign"><?= $alternatif['0']['nama_alternatif'] ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="C4" class="placeholder"><b><?= $kriteria['3']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C4','C4_1','1')" id="C4_1" name="C4">
                                    <span class="form-radio-sign"><?= $alternatif['3']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C4','C4_2','2')" id="C4_2" name="C4">
                                    <span class="form-radio-sign"><?= $alternatif['2']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C4','C4_3','3')" id="C4_3" name="C4">
                                    <span class="form-radio-sign"><?= $alternatif['1']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C4','C4_4','4')" id="C4_4" name="C4">
                                    <span class="form-radio-sign"><?= $alternatif['0']['nama_alternatif'] ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="C5" class="placeholder"><b><?= $kriteria['4']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C5','C5_1','1')" id="C5_1" name="C5">
                                    <span class="form-radio-sign"><?= $alternatif['3']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C5','C5_2','2')" id="C5_2" name="C5">
                                    <span class="form-radio-sign"><?= $alternatif['2']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C5','C5_3','3')" id="C5_3" name="C5">
                                    <span class="form-radio-sign"><?= $alternatif['1']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C5','C5_4','4')" id="C5_4" name="C5">
                                    <span class="form-radio-sign"><?= $alternatif['0']['nama_alternatif'] ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="C6" class="placeholder"><b><?= $kriteria['5']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C6','C6_1','1')" id="C6_1" name="C6">
                                    <span class="form-radio-sign"><?= $alternatif['3']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C6','C6_2','2')" id="C6_2" name="C6">
                                    <span class="form-radio-sign"><?= $alternatif['2']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C6','C6_3','3')" id="C6_3" name="C6">
                                    <span class="form-radio-sign"><?= $alternatif['1']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C6','C6_4','4')" id="C6_4" name="C6">
                                    <span class="form-radio-sign"><?= $alternatif['0']['nama_alternatif'] ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="C7" class="placeholder"><b><?= $kriteria['6']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C7','C7_1','1')" id="C7_1" name="C7">
                                    <span class="form-radio-sign"><?= $alternatif['3']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C7','C7_2','2')" id="C7_2" name="C7">
                                    <span class="form-radio-sign"><?= $alternatif['2']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C7','C7_3','3')" id="C7_3" name="C7">
                                    <span class="form-radio-sign"><?= $alternatif['1']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C7','C7_4','4')" id="C7_4" name="C7">
                                    <span class="form-radio-sign"><?= $alternatif['0']['nama_alternatif'] ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="C8" class="placeholder"><b><?= $kriteria['7']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C8','C8_1','1')" id="C8_1" name="C8">
                                    <span class="form-radio-sign"><?= $alternatif['3']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C8','C8_2','2')" id="C8_2" name="C8">
                                    <span class="form-radio-sign"><?= $alternatif['2']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C8','C8_3','3')" id="C8_3" name="C8">
                                    <span class="form-radio-sign"><?= $alternatif['1']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C8','C8_4','4')" id="C8_4" name="C8">
                                    <span class="form-radio-sign"><?= $alternatif['0']['nama_alternatif'] ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="C9" class="placeholder"><b><?= $kriteria['8']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C9','C9_1','1')" id="C9_1" name="C9">
                                    <span class="form-radio-sign"><?= $alternatif['3']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C9','C9_2','2')" id="C9_2" name="C9">
                                    <span class="form-radio-sign"><?= $alternatif['2']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C9','C9_3','3')" id="C9_3" name="C9">
                                    <span class="form-radio-sign"><?= $alternatif['1']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C9','C9_4','4')" id="C9_4" name="C9">
                                    <span class="form-radio-sign"><?= $alternatif['0']['nama_alternatif'] ?></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="C10" class="placeholder"><b><?= $kriteria['9']['keterangan'] ?></b></label>
                            <div class="position-relative">
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C10','C10_1','1')" id="C10_1" name="C10">
                                    <span class="form-radio-sign"><?= $alternatif['3']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C10','C10_2','2')" id="C10_2" name="C10">
                                    <span class="form-radio-sign"><?= $alternatif['2']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C10','C10_3','3')" id="C10_3" name="C10">
                                    <span class="form-radio-sign"><?= $alternatif['1']['nama_alternatif'] ?></span>
                                </label>

                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" onclick="ceknilai('C10','C10_4','4')" id="C10_4" name="C10">
                                    <span class="form-radio-sign"><?= $alternatif['0']['nama_alternatif'] ?></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" id='btn_add' name="tambah">Tambah</button>
                        <a href=" <?= base_url('nilai') ?>" class="btn btn-danger">Batal</a>
                    </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/jQuery/jquery-2.2.4.min.js"></script>

<script type="text/javascript">
    var C1 = 0;
    var C2 = 0;
    var C3 = 0;
    var C4 = 0;
    var C5 = 0;
    var C6 = 0;
    var C7 = 0;
    var C8 = 0;
    var C9 = 0;
    var C10 = 0;

    function ceknilai(P, tool, R){
        if($('#'+tool+'').is(':checked') && (R==1)){
            if(P=='C1'){
                C1=1;
            }else if(P=='C2'){
                C2=1;
            }else if(P=='C3'){
                C3=1;
            }else if(P=='C4'){
                C4=1;
            }else if(P=='C5'){
                C5=1;
            }else if(P=='C6'){
                C6=1;
            }else if(P=='C7'){
                C7=1;
            }else if(P=='C8'){
                C8=1;
            }else if(P=='C9'){
                C9=1;
            }else if(P=='C10'){
                C10=1;
            }
        }else if($('#'+tool+'').is(':checked') && (R==2)){
            if(P=='C1'){
                C1=2;
            }else if(P=='C2'){
                C2=2;
            }else if(P=='C3'){
                C3=2;
            }else if(P=='C4'){
                C4=2;
            }else if(P=='C5'){
                C5=2;
            }else if(P=='C6'){
                C6=2;
            }else if(P=='C7'){
                C7=2;
            }else if(P=='C8'){
                C8=2;
            }else if(P=='C9'){
                C9=2;
            }else if(P=='C10'){
                C10=2;
            }
        }else if($('#'+tool+'').is(':checked') && (R==3)){
           if(P=='C1'){
                C1=3;
            }else if(P=='C2'){
                C2=3;
            }else if(P=='C3'){
                C3=3;
            }else if(P=='C4'){
                C4=3;
            }else if(P=='C5'){
                C5=3;
            }else if(P=='C6'){
                C6=3;
            }else if(P=='C7'){
                C7=3;
            }else if(P=='C8'){
                C8=3;
            }else if(P=='C9'){
                C9=3;
            }else if(P=='C10'){
                C10=3;
            }
        }else if($('#'+tool+'').is(':checked') && (R==4)){
            if(P=='C1'){
                C1=4;
            }else if(P=='C2'){
                C2=4;
            }else if(P=='C3'){
                C3=4;
            }else if(P=='C4'){
                C4=4;
            }else if(P=='C5'){
                C5=4;
            }else if(P=='C6'){
                C6=4;
            }else if(P=='C7'){
                C7=4;
            }else if(P=='C8'){
                C8=4;
            }else if(P=='C9'){
                C9=4;
            }else if(P=='C10'){
                C10=4;
            }
        }
    }

    $(document).ready(function(){

        $('#btn_add').click(function() { 
            var sendData = {
                csrf_token:$('[name="csrf_token"]').val(),
                id_pelamar : $('#pelamar').val(),
                periode : $('#periode').val(),
                id_admin : $('#id_admin').val(),
                nilaiC1 : C1,
                nilaiC2 : C2,
                nilaiC3 : C3,
                nilaiC4 : C4,
                nilaiC5 : C5,
                nilaiC6 : C6,
                nilaiC7 : C7,
                nilaiC8 : C8,
                nilaiC9 : C9,
                nilaiC10 : C10,
            }

            $.ajax({
                url : "<?php echo site_url('nilai/insertnilai')?>/",
                type : "POST",
                dataType : "JSON",
                data : sendData,
                success: function(data){
                    if(data.status == true){
                        window.location.replace('<?php echo site_url("nilai/index/"); ?>');
                    }
                } 
            });
        });
    });

</script>

</div>