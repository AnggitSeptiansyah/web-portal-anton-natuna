
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="card">
            <h1 class="h3 text-gray-800 mt-3 ml-2"><?= $judul ?></h1>
            <div class="card-body">
            <?= $this->session->flashdata('message') ?>
              <div class="row">
                <div class="col-md-9">
                  <form action="<?= base_url('Admin_produk'); ?>" method="post">
                    <div class="input-group">
                      <input name="keyword" type="text" class="form-control" placeholder="Masukkan Pencarian...">
                      <div class="input-group-append">
                        <input name="submit" class="btn btn-outline-primary" type="submit" autocomplete='off' autofocus>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-3 float-right justify-content-between">
                <a href="<?= base_url('admin_produk/tambah_produk') ?>" class="btn btn-primary">Tambah Product</a>
                </div>
              </div>
              
              <table class="table table-bordered table-hovered mt-3">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Produk</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1 ?>
                  <?php foreach($admin_produk as $admin_produk) : ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $admin_produk->nama_produk ?></td>
                      <td><?= $admin_produk->nama_jenis ?></td>
                      <td>
                        <a href="<?= base_url('admin_produk/deleteProduk/') . $admin_produk->id ?>" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                  <?php $i++ ?>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
          
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->