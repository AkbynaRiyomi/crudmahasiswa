<div class="main">
<main class="content">
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">
            <?php echo 'Halaman Tambah Prodi'; ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Ubah Prodi

                    </div>

                    <div class="card-body">
                        <form action="<?= base_url('Prodi/update'); ?>" method="POST">
						<input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                            <div class="form-group">
                                <label for="nama prodi">Nama Prodi</label>
                                <input type="text" name="nama" value="<?= $prodi['nama']; ?>" class="form-control" id="nama prodi" placeholder="Nama Prodi">
                            </div>

                            <div class="form-group">
                                <label for="ruangan">Ruangan</label>
                                <input type="text" name="ruangan" value="<?= $prodi['ruangan']; ?>" class="form-control" id="ruangan" placeholder="Ruangan">

                            </div>

                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" name="jurusan" value="<?= $prodi['jurusan']; ?>" class="form-control" id="jurusan" placeholder="Jurusan">

                            </div>

                            <div class="form-group">
                                <label for="akreditasi">Akreditasi</label>
                                <select name="akreditasi"  id="akreditasi" class="form-control">
                                    <option value="<?= $prodi['akreditasi']; ?>" ><?= $prodi['akreditasi']; ?></option>
                                    <option value="Unggul">Unggul</option>
                                    <option value-"A">A</option>
                                    <option value-"B">B</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nama kaprodi">Nama Kaprodi</label>
                                <input type="text" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>" class="form-control" id="nama kaprodi" placeholder="Nama kaprodi">
                            </div>

                            <div class=" form-group">
                                <label for="tahun berdiri">Tahun Berdiri</label>
                                <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>" class="form-control" id="tahun berdiri" placeholder="Tahun Berdiri">

                            </div>
                            
                            <div class="form-group">
                                <label for="gelar lulusan">Output Lulusan</label>
                                <input type="text" name="output_lulusan" value="<?= $prodi['output_lulusan']; ?>" class="form-control" id="gelar lulusan" placeholder="Gelar Lulusan">
                            </div>

                            


                            <a href="<?= base_url('index.php/Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="tambah" class="btn btn-primary float-right">
                                Ubah Prodi
                            </button>

                        </form>

                    </div>

                </div>
</main>