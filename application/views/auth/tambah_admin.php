
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          

          <div class="card">
            <h1 class="h3 text-gray-800 mt-3 ml-3"><?= $judul ?></h1>
            <div class="card-body">
              <form action="<?= base_url('AnAdmin/tambah_admin') ?>" method="post">
                <div class="form-group">
                  <label for="">Email Address</label>
                  <input type="text" class="form-control" placeholder="Email" name="email">
                </div>

                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                  <label for="">Jenis Admin</label>
                  <select name="id_jenis_admin" id="" class="form-control">
                    <?php foreach($jenis_admin as $jenis_admin) : ?>
                      <option value="<?= $jenis_admin->id ?>"><?= $jenis_admin->nama_jenis ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password1">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Repeat Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password2">
                </div>

                <button class="btn btn-primary" type='submit'>Tambah User</button>
                
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->















