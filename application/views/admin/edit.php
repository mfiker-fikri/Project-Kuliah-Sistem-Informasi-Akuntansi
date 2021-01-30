<div class="content-wrapper">
	<section class="content">
		<?php foreach($user as $usr) ?>

		<form action="<?php echo base_url().'admin/update'; ?>" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $usr->id ?>">
				<input type="text" name="username" class="form-control" value="<?php echo $usr->username ?>">

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" value="<?php echo $usr->password ?>">

			<div class="form-group">
				<label>Nama User</label>
				<input type="text" name="nama_user" class="form-control" value="<?php echo $usr->nama_user ?>">


         <div class="form-group">
          <label>Pilih Role</label>
          <select id="role" name="role" class="form-control">
            <option value="">Pilih</option>
            <option value="admin">Admin</option>
            <option value="akuntan">Akuntan</option>
            <option value="kasir">Kasir</option>
          </select>
         </div>



         <button type="reset" class="btn btn-danger">Reset</button>
         <button type="submit" class="btn btn-primary">Simpan</button>

			</div>
			
		</form>
		
	</section>
</div>