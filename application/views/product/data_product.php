<div class="container mt-5">
  <h4 class="sub-title-product"><?= $jenis_product->nama_jenis ?></h4>
  <div class="row">
    <?php if(empty($produk)) : ?>
      <p>Maaf, Untuk saat ini data tidak ditemukan</p>
    <?php else : ?>
      <?php foreach($produk as $produk) : ?>
      <div class="col-md-3 col-lg-3 col-sm-6 image-section">
        <div class="image-detail-product">
          <img src="<?= base_url('assets/img/produk/') . $produk->gambar ?>" alt="">
        </div>
        <h6 class="text-center"><?= $produk->nama_produk ?></h6>
      </div>
      <?php endforeach ?>
    <?php endif ?>
  </div>
</div>

<section class="contact">
  <div class="container">
    
  </div>
</section>