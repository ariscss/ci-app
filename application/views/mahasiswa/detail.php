<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <h4 class="card-title"><?= $mahasiswa['nama']; ?></h4>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></h6>
                    <p class="card-text"><?= $mahasiswa['nim']; ?></p>
                    <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
                </div>
                <div class="card-footer">
                    <a name="kembali" id="kembali" class="btn btn-primary float-right" href="<?= base_url(); ?>mahasiswa" role="button">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>