<div class="container jenis-produk">
  <h3 class="justify-content-center text-center title-section">Our Product</h3>
  <p class="text-center paraf-section"><a href="<?= base_url('product') ?>" class="mb-5">Product yang lainnya <i class="fas fa-chevron-right"></i></a></p>
  <div class="row product-flex">
      <?php foreach($jenis_product as $jenis_product) : ?>
      <p><a href="<?= base_url('product/data_product/') . $jenis_product->id ?>">
      <div class="col-md-2 col-sm-4 mb-3">
        <div class="gambar-product justify-content-center text-center">
          <img src="<?= base_url('assets/img/jenis_product/') . $jenis_product->gambar ?>" alt="">
        </div>
        <h5 class="jenis-kata mt-3 text-center pr-1"><?= $jenis_product->nama_jenis ?></h5>
      </div>
      </a></p>
      <?php endforeach ?>

    </div>
  </div>
</div>

<div class="pondasi">
  <div class="isi-pondasi">
    <div class="container">
      <h3 class="justify-content-center text-center title-text pondasi-budaya">5 FONDASI DASAR SISTEM DAN BUDAYA PELAYANAN CV. ANTON NATUNA</h3>
      <p class="text-center text-paraf">KAMI SIAP MENDUKUNG DAN MELAYANI APAPUN KEBUTUHAN SERTA RAGAM KEGIATAN ANDA UNTUK LEBIH SUKSES DAN MENCAPAI TARGET YANG DIHARAPKAN</p>
      <div class="pondasi-logo">
          <div class="row justify-content-end pondasi-logo-2">
              <div class="col-md-2 col-sm-4">
                <div class="cicle-logo">
                  <span class="justify-content-center text-center"><i class="fas fa-chess-queen"></i></span>
                </div>
                <div class="kata-cicle">
                  <p>QUALITY</p>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="cicle-logo">
                  <span class="justify-content-center text-center"><i class="fas fa-handshake"></i></span>
                </div>
                <div class="kata-cicle">
                  <p>REABILITY</p>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="cicle-logo">
                  <span class="justify-content-center text-center"><i class="fas fa-cogs"></i></span>
                </div>
                <div class="kata-cicle">
                  <p>SERVICE</p>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="cicle-logo">
                  <span class="justify-content-center text-center"><i class="fas fa-clock"></i></span>
                </div>
                <div class="kata-cicle">
                  <p>TIME</p>
                </div>
              </div>
              <div class="col-md-2 col-sm-4">
                <div class="cicle-logo">
                  <span class="justify-content-center text-center"><i class="fas fa-american-sign-language-interpreting"></i></span>
                </div>
                <div class="kata-cicle">
                  <p>EFFICIENCY</p>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>


<!-- <div class="service">
  <div class="container">
    <h2 class="text-center title-section">Our Service</h2>
    <p class="text-center paraf-section">Berikut pelayanan - pelayanan yang anda dapatkan jika memesan di CV. Anton Natuna</p>



  </div>
</div> -->

<section class="intro-area white" id="intro">
  <div class="container">
      <div class="row">
          <div class="col-sm-12 text-center">
              <h2 class="text-center title-section">OUR SERVICE</h2>
              <div class="sub-heading">
                  <p>
                    Berikut pelayanan - pelayanan yang dapat anda dapatkan jika anda memesan di CV. Anton Natuna
                  </p>
              </div>
          </div>
      </div>

      <div class="row justify-content-center">
          <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="intro-block">
                  <span class="intro-icon"><i class="fas fa-paint-brush"></i></span>
                  <h3>Design</h3>
                  <p> 
                  Anda dapat memesan cetakan anda di CV. Anton Natuna jika anda masih belum mempunyai desain. Kami mempunyai desainer yang handal untuk mendesainkan cetakan anda. 
                  </p>
              </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="intro-block">
                  <span class="intro-icon"><i class="fas fa-print"></i></span>
                  <h3>Printing</h3>
                  <p>
                    Setelah mendesain, anda dapat meminta CV. Anton Natuna untuk mencetak hasil desainer anda. Anda dapat meminta perusahaan ini untuk mencetak jika anda sudah mempunyai sebuah desain
                  </p>
              </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="intro-block">
                  <span class="intro-icon"><i class="fas fa-cut"></i></span>
                  <h3>Finishing</h3>
                  <p>
                    Setelah mencetak, CV. Anton Natuna menawarkan sebuah sentuhan akhir untuk desain anda. baik itu berupa penambahan lubang disekitar cetakan.
                  </p>
              </div>
          </div>

          <div class="col-md-6 col-lg-6 col-sm-12">
              <div class="intro-block">
                  <span class="intro-icon"><i class="fas fa-box"></i></span>
                  <h3>Packaging</h3>
                  <p>
                    Jika anda memesan banyak cetakan, CV. Anton Natuna dapat memberikan box/pelindung untuk melindungi cetakan anda agar terhindar dari kerusakan
                  </p>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- End of Partner -->


<!-- Hubungi Kami -->

<section class="contact-us">
  <div class="container">
    <h2 class="text-center text-center">Hubungi Kami</h2>
    <div class="sub-heading text-center">
        <p>Silahkan mengunjungi kantor atau menghubungi kontak kami. <br>Berikut alamat kantor, email dan nomor WA kantor kami</p>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-6 col-sm-12">
        <h4 class="contact-title">Kantor Pusat (Pekanbaru)</h4>
        <div class="contact-section">
          <p><span class="contact-icon"><i class="fas fa-map-marker"></i></span>Jalan Surabaya no.43-45, Pekanbaru, Riau</p>
          <p><span class="contact-icon"><i class="fas fa-phone"></i></span>08117680117</p>
          <p><span class="contact-icon"><i class="fab fa-whatsapp"></i></span>08238288329</p>
          <p><span class="contact-icon"><i class="fas fa-mail-bulk"></i></span>antonnatuna.printing@gmail.com</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 col-sm-12">
        <h4 class="contact-title">Kantor Cabang Teratai (Pekanbaru)</h4>
        <div class="contact-section">
          <p><span class="contact-icon"><i class="fas fa-map-marker"></i></span>Jalan Teratai no.131-132, Pekanbaru - Riau</p>
          <p><span class="contact-icon"><i class="fas fa-phone"></i></span>0811-7671-882</p>
          <p><span class="contact-icon"><i class="fab fa-whatsapp"></i></span>0823-8621-0091</p>
          <p><span class="contact-icon"><i class="fas fa-mail-bulk"></i></span>antonnatuna.desain@gmail.com</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 col-sm-12">
        <h4 class="contact-title">Kantor Cabang Arengka (Pekanbaru)</h4>
        <div class="contact-section">
          <p><span class="contact-icon"><i class="fas fa-map-marker"></i></span>Jalan Soekarno Hata no. 17 Pekanbaru - Riau</p>
          <p><span class="contact-icon"><i class="fas fa-phone"></i></span>0811-7608-919</p>
          <p><span class="contact-icon"><i class="fab fa-whatsapp"></i></span>0823-8634-6428</p>
          <p><span class="contact-icon"><i class="fas fa-mail-bulk"></i></span>antonnatuna.arengka@gmail.com</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 col-sm-12">
        <h4 class="contact-title">Kantor Cabang Tanjung Pinang (Kepulauan Riau)</h4>
        <div class="contact-section">
          <p><span class="contact-icon"><i class="fas fa-map-marker"></i></span>Jl. Daeng KM. 8 (Samping RSUP Tj Pinang - Kepri)</p>
          <p><span class="contact-icon"><i class="fas fa-phone"></i></span>0811 7780 116</p>
          <p><span class="contact-icon"><i class="fas fa-mail-bulk"></i></span>antonnatuna.kepri@gmail.com</p>
        </div>
      </div>

    </div>
  </div>
</section>