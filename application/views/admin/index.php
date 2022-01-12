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
											<div class="card-title">Selamat Datang</div> 
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					

				</div>
			</div>
		</div>