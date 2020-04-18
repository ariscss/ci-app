<div class="container-fluid mt-3 ml-3">
	<?php if($this->session->flashdata('flash')) : ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	  Data Mahasiswa <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
	</div>
	
	<script>
	  $(".alert").alert();
	</script>
	<?php endif; ?>

	<a name="tambahMahasiswa" id="tambahMahasiswa" class="btn btn-primary" href="<?= base_url();?>mahasiswa/tambah" role="button">Tambah Data Mahasiswa</a>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Cari Data Mahasiswa" name="keyword">
				<div class="input-group-append">
					<button class="btn btn-primary" type="button">Cari</button>
				</div>
				</div>
			</form>
		</div>
	</div>
	<h3>Data Mahasiswa</h3>
	<div class="row">
		<div class="col-md-3">
			<?php if( empty($mahasiswa) ) : ?>
				<div class="alert alert-danger" role="alert">
					<strong>Data Tidak di temukan. Harap coba kembali</strong>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9 mt-3">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>Nama</th>
						<th>NIM</th>
						<th>e-mail</th>
						<th>Jurusan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                    <?php foreach ($mahasiswa as $mhs) : ?>
                       
					<tr>
						<td scope="row"><?= $mhs['nama']; ?></td>
						<td><?= $mhs['nim']; ?></td>
						<td><?= $mhs['email']; ?></td>
                        <td><?= $mhs['jurusan']; ?></td>
						<td>
							<a name="" id="" class="btn btn-info" href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" role="button"><i class="fas fa-glasses fa-lg"></i></a>
							<a name="" id="" class="btn btn-warning" href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" role="button"><i class="fas fa-edit fa-lg  "></i></a>
							<a name="" id="" class="btn btn-danger" href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" role="button" onclick="return confirm('Yakin untuk menghapus <?= $mhs['nama'];?> ?');"><i class="fas fa-trash fa-lg"></i></a>
						</td>
                    </tr>
                    <?php endforeach; ?>					
				</tbody>
			</table>
		</div>
	</div>
</div>
