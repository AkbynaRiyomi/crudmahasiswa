<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header justify-content-center">
					Form Tambah Data Mahasiswa
				</div>
				<div class="card-body">
				<div class="card-body">
                        <form action="<?= base_url('Mahasiswa/upload'); ?>" method="POST">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" name="nim" class="form-control" id="nim" placeholder="NIM">

                            </div>

                            <div class="form-group">
                                <label for="jenis kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis kelamin" class="form-control">
                                    <option value="">Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="form-group mb-2">
							<label for="prodi">Prodi</label>
							<select name="prodi" id="prodi" class="form-control">
								<option value="">Pilih Prodi</option>
                                    <?php foreach ($prodi as $p) : ?> 
                                        <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                                    <?php endforeach; ?>
							</select>
							</div>
						<div class="form-group mb-2">
							<label for="asal_sekolah">Asal Sekolah</label>
							<input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" placeholder="Asal Sekolah">
						</div>
						<div class="form-group mb-2">
							<label for="no_hp">Nomor Hp</label>
							<input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Nomor Hp">
						</div>
						<div class="form-group mb-2">
							<label for="alamat">Alamat</label>
							<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat">
						</div>
						<a href="<?= base_url('Mahasiswa') ?>" class="mt-2 btn btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn mt-2 btn-primary float-right">Tambah Mahasiswa</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
