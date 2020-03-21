
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="card">
            <h1 class="h3 text-gray-800 mt-3 ml-3"><?= $judul ?></h1>
            <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $jenis_product->id ?>">
                <div class="form-group">
                  <label for="">Nama Jenis</label>
                  <input type="text" class="form-control" placeholder="Masukkan Jenis Jabatan" name="nama_jenis" value="<?= $jenis_product->nama_jenis ?>">
                </div>
                <div class="form-group">
                  <label for="">Caption</label>
                  <input type="text" class="form-control" placeholder="Masukkan Jenis Jabatan" name="caption" value="<?= $jenis_product->caption ?>">
                </div>

                <div class="form-group row">
                  <div class="col-sm-2">Picture</div>
                  <div class="col-sm-10">
                    <div class="row">
                      <div class="col-sm-3">
                        <img src="<?= base_url('assets/img/jenis_product/') . $jenis_product->gambar ?>" class="img-thumbnail">
                      </div>
                      <div class="col-sm-9">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="gambar" name="img">
                          <label class="custom-file-label" for="img">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
				        </div>

                <button class="btn btn-primary" type="submit">Update Jenis Product</button>
                
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->















