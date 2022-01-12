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
                        <a href="<?= base_url('psikotest/hasil') ?>">Hasil Psikotest</a>
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
                        <h4 class="card-title"><?= $position ?></h4>
                    </div>
                </div>
                <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 6%">No</th>
                                    <th>Soal</th>
                                    <th>Kunci Jawaban</th>
                                    <th>Option A</th>
                                    <th>Option B</th>
                                    <th>Option C</th>
                                    <th>Option D</th>
                                    <th>Jawaban Peserta</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                for ($i = 0; $i < count($soal);$i++) {
                                    ?>
                                    <tr>
                                        <td><?php echo $soal[$i]['id_soal'] ?></td>
                                        <td><?php echo $soal[$i]['soal'] ?></td>
                                        <td><?php echo $soal[$i]['jawaban'] ?></td>
                                        <td><?php echo $soal[$i]['option1'] ?></td>                                        
                                        <td><?php echo $soal[$i]['option2'] ?></td>
                                        <td><?php echo $soal[$i]['option3'] ?></td>
                                        <td><?php echo $soal[$i]['option4'] ?></td>   
                                        <?php
                                //}
                                
                                //for($x = 1; $x <= count($soal); $x++){
                                ?>  
                                        <td>
                                            <?php echo $detailtest['jawab'.$i]?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>