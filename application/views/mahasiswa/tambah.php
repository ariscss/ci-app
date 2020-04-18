<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa</div>
                <div class="card-body">                    
                    <form action="" method="post">
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" aria-describedby="helpNama">
                          <small id="helpNama" class="text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                          <label for="nim">nim</label>
                          <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan nim" aria-describedby="helpnim">
                          <small id="helpnim" class="text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                          <label for="email">email</label>
                          <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan email" aria-describedby="helpemail">
                          <small id="helpemail" class="text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                          <label for="jurusan">Jurusan</label>
                          <select class="form-control" name="jurusan" id="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Electro">Teknik Electro</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>

        </div>        
    </div>
</div>