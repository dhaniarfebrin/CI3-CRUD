<div class="content-wrapper">
	<section class="content">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark"><strong> Detail Data Mahasiswa </strong></h1>
					</div><!-- /.col -->
					<!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<table class="table">
			<tr>
				<th>NAMA LENGKAP</th>
				<td><?php echo $detail->nama;  ?></td>
			</tr>
			<tr>
				<th>NIM</th>
				<td><?php echo $detail->nim;  ?></td>
			</tr>
			<tr>
				<th>TANGGAL LAHIR</th>
				<td><?php echo $detail->tgl_lahir;  ?></td>
			</tr>
			<tr>
				<th>JURUSAN</th>
				<td><?php echo $detail->jurusan;  ?></td>
			</tr>
			<tr>
				<th>ALAMAT</th>
				<td><?php echo $detail->alamat;  ?></td>
			</tr>
			<tr>
				<th>EMAIL</th>
				<td><?php echo $detail->email;  ?></td>
			</tr>
			<tr>
				<th>NO. TELPON</th>
				<td><?php echo $detail->no_telp;  ?></td>
			</tr>
		</table>

		<a href="<?php echo base_url().'mahasiswa/index'; ?>"><button class="btn btn-primary">KEMBALI</button></a>
	</section>
</div>
