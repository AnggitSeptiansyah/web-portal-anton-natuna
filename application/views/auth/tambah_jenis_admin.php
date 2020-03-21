
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          

          <div class="card">
            <h1 class="h3 text-gray-800 mt-3 ml-3"><?= $judul ?></h1>
            <div class="card-body">
              <form action="<?= base_url('AnAdmin/tambah_jenis_admin') ?>" method="post">
                <div class="form-group">
                  <label for="">Tambah Jenis Admin</label>
                  <input type="text" class="form-control" placeholder="Tambah Jenis" name="jenis_admin">
                </div>

                <button class="btn btn-primary" type='submit'>Tambah User</button>
                
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->















