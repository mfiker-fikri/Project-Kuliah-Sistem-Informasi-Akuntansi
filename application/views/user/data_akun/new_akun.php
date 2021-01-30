<div id="content-wrapper">

			<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('user/data_akun/view_akun') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('user/data_akun/new_akun') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">No Akun</label>
								<input class="form-control <?php echo form_error('no_akun') ? 'is-invalid':'' ?>"
								 type="number" name="no_akun" placeholder="No Akun" />
								<div class="invalid-feedback">
									<?php echo form_error('no_akun') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nama Akun</label>
								<input class="form-control <?php echo form_error('nama_akun') ? 'is-invalid':'' ?>"
								 type="text" name="nama_akun" min="0" placeholder="Nama Akun" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_akun') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Keterangan Akun*</label>
								<textarea class="form-control <?php echo form_error('keterangan_akun') ? 'is-invalid':'' ?>"
								 name="keterangan_akun" placeholder="Keterangan akun..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('keterangan_akun') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>