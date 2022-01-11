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
            <?php } ?>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title"><?= $position ?></h4>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Modal -->
                    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <!-- <div class="modal-header no-bd"> -->
                                    <!-- <h5 class="modal-title"> -->
                                        <!-- <span class="fw-mediumbold"> -->
                                            <!-- Tambah <?= $position; ?> Baru -->
                                        <!-- </span> -->
                                    <!-- </h5> -->
                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                                        <!-- <span aria-hidden="true">&times;</span> -->
                                    <!-- </button> -->
                                <!-- </div> -->
                                <form method="post" action="">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label>Soal</label>
                                                    <input id="soal" name="soal" type="text" class="form-control" placeholder="Soal">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label>Bobot</label>
                                                    <input id="bobot" name="bobot" type="text" class="form-control" placeholder="Bobot">                                               
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label>jawaban</label>
                                                    <input id="jawaban" name="jawaban" type="text" class="form-control" placeholder="Jawaban">                                               
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label>Option A</label>
                                                    <input id="option1" name="option1" type="text" class="form-control" placeholder="Option A">                                               
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label>Option B</label>
                                                    <input id="option2" name="option2" type="text" class="form-control" placeholder="Option B">                                               
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label>Option C</label>
                                                    <input id="option3" name="option3" type="text" class="form-control" placeholder="Option C">                                               
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label>Option D</label>
                                                    <input id="option4" name="option4" type="text" class="form-control" placeholder="Option D">                                               
                                                </div>
                                            </div>
                                            <div class="col-sm-12" style="display:none;">
                                                <div class="form-group form-group-default">
                                                    <label>ID Option A</label>
                                                    <input id="id_option1" name="id_option1" type="text" class="form-control" value="A">                                               
                                                </div>
                                            </div>
                                            <div class="col-sm-12" style="display:none;">
                                                <div class="form-group form-group-default">
                                                    <label>ID Option B</label>
                                                    <input id="id_option2" name="id_option2" type="text" class="form-control" value="B">                                               
                                                </div>
                                            </div>
                                            <div class="col-sm-12" style="display:none;">
                                                <div class="form-group form-group-default">
                                                    <label>ID Option C</label>
                                                    <input id="id_option3" name="id_option3" type="text" class="form-control" value="C">                                               
                                                </div>
                                            </div>
                                            <div class="col-sm-12" style="display:none;">
                                                <div class="form-group form-group-default">
                                                    <label>ID Option D</label>
                                                    <input id="id_option4" name="id_option4" type="text" class="form-control" value="D">                                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer no-bd">
                                        <button type="submit" id="addRowButton" class="btn btn-primary">Tambah</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 6%">No</th>
                                    <th>NIK</th>
                                    <th>Nama Pelamar</th>
                                    <th>Nilai</th>
                                    <th>Status</th>
                                    <th style="width: 10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($hasiltest as $h) {
                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $h['nik'] ?></td>
                                        <td><?= $h['nama_pelamar'] ?></td>
                                        <td><?= $h['nilai_akumulasi'] ?></td>
                                        <td><?= $h['status'] ?></td>                                  
                                        <td>
                                            <div class="form-button-action">
                                                <a href="<?= base_url('psikotest/detail/') . $h['id_test'] ?>" class="btn btn-link btn-primary">
                                                    <i class="fas fa-edit">Detail</i>
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

</div>