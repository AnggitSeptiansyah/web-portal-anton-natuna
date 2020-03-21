
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="card">
            <h1 class="h3 text-gray-800 mt-3 ml-3"><?= $judul ?></h1>
            <div class="card-body">
            <form action="<?= base_url('jenisproduct/tambah_jenis') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Nama Jenis</label>
                  <input type="text" class="form-control" placeholder="Masukkan Jenis Jabatan" name="nama_jenis">
                </div>
                
                <div class="form-group">
                  <label for="">Caption</label>
                  <input type="text" class="form-control" placeholder="Masukkan Jenis Jabatan" name="caption">
                </div>

                <div class="form-group row">
                  <div class="col-sm-2">Picture</div>
                  <div class="col-sm-10">
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="gambar" name="gambar">
                          <label class="custom-file-label" for="gambar">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <button class="btn btn-primary" type="submit">Tambah Jenis Product</button>
                
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->















