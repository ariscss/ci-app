<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Ubah Data Mahasiswa</div>
                <div class="card-body">                    
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" aria-describedby="helpNama" value="<?= $mahasiswa['nama']; ?>">
                          <small id="helpNama" class="text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                          <label for="nim">nim</label>
                          <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan nim" aria-describedby="helpnim" value="<?= $mahasiswa['nim']; ?>">
                          <small id="helpnim" class="text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                          <label for="email">email</label>
                          <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan email" aria-describedby="helpemail" value="<?= $mahasiswa['email']; ?>">
                          <small id="helpemail" class="text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                          <label for="jurusan">Jurusan</label>
                          <select class="form-control" name="jurusan" id="jurusan">
                          <?php foreach($jurusan as $jur) : ?>
                            <?php if($jur == $mahasiswa['jurusan']) : ?>
                                <option value="<?= $jur; ?>" selected><?= $jur; ?></option>
                            <?php else : ?>
                                <option value="<?= $jur; ?>"><?= $jur; ?></option>   
                            <?php endif; ?>    
                          <?php endforeach; ?>
                          </select>  
                        </div>
                        <button type="submit" class="btn btn-warning float-right"><i class="fas fa-edit"></i> Ubah Data</button>
                    </form>
                </div>
            </div>

        </div>        
    </div>
</div>