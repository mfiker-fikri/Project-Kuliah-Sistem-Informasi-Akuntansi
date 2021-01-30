<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('user/data_akun/new_akun') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No Akun</th>
										<th>Nama Akun</th>
										<th>Keterangan Akun</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data_akun as $data_kun): ?>
									<tr>
										<td width="150">
											<?php echo $data_akun->no_akun ?>
										</td>
										<td>
											<?php echo $data_akun->nama_akun ?>
										</td>
										
										<td class="small">
											<?php echo substr($data_akun->keterangan_akun, 0, 120) ?>...</td>
										<td width="250">
											<a href="<?php echo site_url('user/data_akun/edit_akun/'.$data_akun->akun_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('user/data_akun/delete/'.$data_akun->akun_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>