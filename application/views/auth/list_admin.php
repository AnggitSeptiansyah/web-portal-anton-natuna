
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->

          <div class="card">
            <h1 class="h3 text-gray-800 mt-3 ml-3"><?= $judul ?></h1>
            <?= $this->session->flashdata('message') ?>
            <div class="card-body">
              <a href="<?= base_url('AnAdmin/tambah_admin') ?>" class="btn btn-primary">Tambah Admin</a>
              <a href="<?= base_url('AnAdmin/tambah_jenis_admin') ?>" class="btn btn-success">Tambah Jenis Admin</a>
              <table class="table table-hover table-bordered mt-3">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Jenis Admin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1 ?>
                  <?php foreach($list_admin as $list_admin) : ?>
                      <tr>
                        <td><?= $i ?></td>
                        <td><?= $list_admin->username ?></td>
                        <td><?= $list_admin->email ?></td>
                        <td><?= $list_admin->nama_jenis ?></td>
                      </tr>
                    <?php $i ++ ?>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->