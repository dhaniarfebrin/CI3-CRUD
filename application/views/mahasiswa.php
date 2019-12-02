<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Mahasiswa</h1>
				</div><!-- /.col -->
				<!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<section class="content">
		<button class="btn btn-secondary mb-3" data-toggle="modal" data-target="#exampleModal"><i
				class="fa fa-plus"></i>
			Tambah Data Mahasiswa</button>
		<table class="table">
			<tr>
				<th>Nomor</th>	
				<th>Nama</th>
				<th>NIM</th>
				<th>Tanggal Lahir</th>
				<th>Jurusan</th>
				<th colspan="3">Aksi</th>
			</tr>
			<?php $no = 1; foreach ($mahasiswa as $mhs) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $mhs->nama ?></td>
				<td><?php echo $mhs->nim ?></td>
				<td><?php echo $mhs->tgl_lahir ?></td>
				<td><?php echo $mhs->jurusan ?></td>
				<td><?php echo anchor('mahasiswa/detail/'.$mhs->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>')?>
				</td>
				<td onclick="javascript: return confirm('Anda yakin ingin menghapusnya?')">
					<?php echo anchor('mahasiswa/hapus/'.$mhs->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?>
				</td>
				<td><?php echo anchor('mahasiswa/edit/'.$mhs->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>

	</section>

	<!-- modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url().'mahasiswa/tambah_aksi' ?>">
						<div class="form-group">
							<label for="">Nama Mahasiswa</label>
							<input type="text" name="nama" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="">NIM</label>
							<input type="text" name="nim" class="form-control" maxlength="8" required>
						</div>
						<div class="form-group">
							<label for="">Tanggal Lahir</label>
							<input type="date" name="tgl_lahir" class="form-control" required>
						</div>
						<div class="form-group mt-3 mb-3">
							<label class="" for="">Jurusan</label>
							<select name="jurusan" class="form-control" required>
								<option value="">pilih...</option>
								<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
								<option value="Teknik Komputer Jaringan">Teknik Komputer dan Jaringan</option>
								<option value="Multimedia">Multimedia</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Alamat</label>
							<input type="text" name="alamat" class="form-control" maxlength="120" required>
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input type="text" name="email" class="form-control" maxlength="20">
						</div>
						<div class="form-group">
							<label for="">No. Telepon</label>
							<input type="text" name="no_telp" class="form-control" maxlength="20" required>
						</div>

						<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
						<button type="submit" class="btn btn-primary">Tambah</button>
					</form>
				</div>

			</div>
		</div>
	</div>

</div>