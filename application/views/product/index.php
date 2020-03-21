<div class="product-container mt-5">
  <div class="container">
    <div class="title-slide">
      <h4 class="title-section text-center"><?= $judul ?></h4>
    </div>

    <div class="section-slide">
      <h5 class="sub-title">Product</h5>
      <div class="ml-2 row">
        <?php foreach ($product as $product) : ?>
          <p><a href="<?= base_url('product/data_product/') . $product->id ?>">
            <div class="col-md-2 col-sm-6 col-lg-2 product-section">
              <div class="image-product">
                <img src="<?= base_url('assets/img/jenis_product/') . $product->gambar ?>" alt="" srcset="" class="center">
              </div>
              <div class="nama_product">
                <?= $product->nama_jenis ?>
              </div>
            </div>
          </a></p>
        <?php endforeach ?>

      </div>
    </div>
    
  </div>
</div>