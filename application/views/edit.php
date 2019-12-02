<div class="content-wrapper">
	<section class="content">
		<?php foreach ($mahasiswa as $mhs) : ?>
		<form method="post" action="<?php echo base_url().'mahasiswa/update' ?>">
			<div class="form-group">
				<label for="">Nama Mahasiswa</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id  ?>">
				<input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama ?>" required>
			</div>
			<div class="form-group">
				<label for="">NIM</label>
				<input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim ?>" maxlength="8"
					required>
			</div>
			<div class="form-group">
				<label for="">Tanggal Lahir</label>
				<input type="date" name="tgl_lahir" class="form-control" value="<?php echo $mhs->tgl_lahir ?>" required>
			</div>
			<div class="form-group">
				<label for="">Jurusan</label>
				<select name="jurusan" class="form-control" value="<?php echo $mhs->jurusan ?>" required>
					<option value="">pilih...</option>
					<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
					<option value="Teknik Komputer Jaringan">Teknik Komputer dan Jaringan</option>
					<option value="Multimedia">Multimedia</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Alamat</label>
				<input type="text" name="alamat" class="form-control" maxlength="120" value="<?php echo $mhs->alamat ?>" required>
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" name="email" class="form-control" maxlength="20" value="<?php echo $mhs->email ?>">
			</div>
			<div class="form-group">
				<label for="">No. Telepon</label>
				<input type="text" name="no_telp" class="form-control" maxlength="20" value="<?php echo $mhs->no_telp ?>" required>
			</div>

			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
		<?php endforeach; ?>
	</section>

</div>