
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="card">
            <h1 class="h3 text-gray-800 mt-3 ml-2"><?= $judul ?></h1>
            <div class="card-body">
              <div class="row">
                <div class="col-md-9">
                  <?= $this->session->flashdata('message') ?>
                </div>
                <div class="col-md-3 float-right justify-content-between">
                <a href="<?= base_url('jenisproduct/tambah_jenis') ?>" class="btn btn-primary">Tambah Jenis Product</a>
                </div>
              </div>
              
              <table class="table table-bordered table-hovered mt-3">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Product</th>
                    <th>Caption</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1 ?>
                  <?php foreach($jenisProduct as $jenisProduct) : ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?= $jenisProduct->nama_jenis ?></td>
                    <td><?= $jenisProduct->caption ?></td>
                    <td>
                      <a class="btn btn-success btn-sm" href="<?= base_url('jenisproduct/updateJenisProduct/') . $jenisProduct->id ?>">Update</a>
                      <a class="btn btn-danger btn-sm" href="<?= base_url('jenisproduct/deleteJenisProduct/') . $jenisProduct->id ?>">Delete</a>
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