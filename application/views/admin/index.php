		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"><?= $position ?></h4>
					</div>
					<?php if ($this->session->flashdata('done')) { ?>
						<div class="alert alert-success alert-dismissable" id="close_alert">
							<h4><?= $this->session->flashdata('done'); ?></h4>
						</div>
					<?php } ?>

					<?php if ($admin['akses'] == "Administrator" || $admin['akses'] == "HRD") { ?>
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									
									<div class="col-sm-6 col-md-3">
										<div class="card card-stats card-round">
											<div class="card-body">
												<div class="row align-items-center">
													<div class="col-icon">
														<div class="icon-big text-center icon-primary bubble-shadow-small">
															<i class="far fa-id-card"></i>
														</div>
													</div>
													<div class="col col-stats ml-3 ml-sm-0">
														<div class="numbers">
															<p class="card-category">Jumlah Pelamar</p>
															<h4 class="card-title"><?= $aktif ?></h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="card card-stats card-round">
											<div class="card-body">
												<div class="row align-items-center">
													<div class="col-icon">
														<div class="icon-big text-center icon-secondary bubble-shadow-small">
															<i class="far fa-folder-open"></i>
														</div>
													</div>
													<div class="col col-stats ml-3 ml-sm-0">
														<div class="numbers">
															<p class="card-category">Jumlah Lowongan</p>
															<h4 class="card-title"><?= $loker ?></h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="card card-stats card-round">
											<div class="card-body">
												<div class="row align-items-center">
													<div class="col-icon">
														<div class="icon-big text-center icon-danger bubble-shadow-small">
															<i class="far fa-user-circle"></i>
														</div>
													</div>
													<div class="col col-stats ml-3 ml-sm-0">
														<div class="numbers">
															<p class="card-category">HRD</p>
															<h4 class="card-title"><?= $hrd['jumlah'] ?></h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-head-row">
											<div class="card-title">Data Pelamar</div>
											<div class="card-tools">
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="card-body">
										<div class="table">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama Pelamar</th>
                                    <th>Nilai IPK|</th>
                                    <th>Nilai TOEFL</th>
									<th>Nilai Psikotes</th>
                                    <th>Pengalaman (bulan)</th>
                                    <th>Umur</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pelamar as $g) {
                                    ?>
                                    <tr>

                                        <td><?= $no ?></td>
                                        <td><?= $g['nik'] ?></td>
                                        <td align="center"><?= $g['nama_pelamar'] ?></td>
                                        <td><?= $g['ipk'] ?></td>
                                        <td><?= $g['toefl'] ?></td>
										<td><?php if($g['nilai_akumulasi'] == 0){?> Belum Test <?php } else { echo $g['nilai_akumulasi'];} ?></td>
                                        <td><?= $g['pengalaman'] ?></td>
                                        <td><?= $g['umur'] ?></td>                                        
                                        <td>
                                            <div class="form-button-action">
                                                <?php if ($admin['akses'] == "Administrator") { ?>
                                                <a href="<?= base_url('pelamar/ubah/') . $g['id_pelamar'] ?>" class="btn btn-link btn-primary">
                                                    <i class="fas fa-edit">Ubah</i>
                                                </a>
                                               
                                                <a href="<?= base_url('pelamar/hapus/') . $g['id_pelamar'] ?>" class="btn btn-link btn-danger" onclick="return confirm('Are you sure want to delete?')">
                                                    <i class="fas fa-times">Hapus</i>
                                                </a>
                                                <?php } ?>
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
					<?php } else if($admin['akses'] == "Pelamar") { ?>
						<div class="row">
							<div class="col-md">
								<div class="card">
									<div class="card-header">
										<div class="card-head-row">
											<div class="card-title">Selamat Datang Silahkan Lengkapi Data Diri Anda</div> 
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="card">
									<div class="card-header">
										<div class="card-head-row">
											<?php if ($pelamar['status'] == "") {?>
										<a data-toggle="collapse" href="#collapseprofil" role="button" aria-expanded="false" class="btn btn-info btn-block">Ubah Data</a>
										<?php }?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<div class="collapse" id="collapseprofil">
									<div class="card">
										<form method="post" action="">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label>Nama</label>
                                                    <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Pelamar">
                                                </div>
                                                <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                                <div class="form-group form-group-default">
                                                    <label>NIK</label>
                                                    <input id="nik" name="nik" type="text" class="form-control" placeholder="NIK">
                                                </div>
                                                <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                                                <div class="form-group form-group-default">
                                                    <label>Jenis Kelamin</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin">
                                                        <option value="L">Laki-Laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Alamat</label>
                                                    <input id="alamat" name="alamat" type="text" class="form-control" placeholder="alamat">
                                                </div>
                                                 <div class="form-group form-group-default">
                                                    <label>No.HP</label>
                                                    <input id="no_hp" name="no_hp" type="text" class="form-control" placeholder="no_hp">
                                                </div>
                                                 <div class="form-group form-group-default">
                                                    <label>Email</label>
                                                    <input id="email" name="email" type="text" class="form-control" placeholder="email">
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Nilai IPK</label>
                                                    <input id="ipk" name="ipk" type="text" class="form-control" placeholder="Nilai IPK">
                                                </div>
                                                 <div class="form-group form-group-default">
                                                    <label>Nilai TOEFL</label>
                                                    <input id="toefl" name="toefl" type="text" class="form-control" placeholder="Nilai TOEFL">
                                                </div>
                                                 <div class="form-group form-group-default">
                                                    <label>Pengalaman Kerja (Bulan)</label>
                                                    <input id="pengalaman" name="pengalaman" type="text" class="form-control" placeholder="Pengalaman Kerja (Dalam Bulan)">
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Umur</label>
                                                    <input id="umur" name="umur" type="text" class="form-control" placeholder="Umur">
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

						</div>
					<?php } ?>
					

				</div>
			</div>
		</div>