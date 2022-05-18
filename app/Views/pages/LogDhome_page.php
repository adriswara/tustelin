<?= $this->extend('layout/logdLayout'); ?>
<!--START CONTENT-->
<?= $this->section('pageContent'); ?>
<!-- Carousel -->
<div id="demo" class="carousel slide main-banner" style="height: 70vh" data-bs-ride="carousel">
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner main-banner__inner" style="height: 70vh;width: 100%">
    <div class="carousel-item active">
      <center>
        <img src="/pribadi.jpg" alt="Pribadi" class="d-block" style="width: 100%" />
      </center>
      <div class="carousel-caption">
        <h3>Jasa Foto Pribadi</h3>
        <p>Ekspresikan dirimu sekarang!</p>
        <button class="btn btn-outline-light" type="button">
          Informasi lebih lanjut
        </button>
      </div>
    </div>
    <div class="carousel-item">
      <center>
        <img src="/fashion.jpg" alt="Fashion" class="d-block" style="width: 100%" />
      </center>
      <div class="carousel-caption">
        <h3>Foto Fashion</h3>
        <p>Buat foto outfitmu sekarang!</p>
        <button class="btn btn-outline-light" type="button">
          Informasi lebih lanjut
        </button>
      </div>
    </div>
    <div class="carousel-item">
      <center>
        <img src="/makanan.jpg" alt="food" class="d-block" style="width: 100%" />
      </center>
      <div class="carousel-caption">
        <h3>Foto Produk Makanan</h3>
        <p>Tampilkan kelezatan dari produk makanan anda!</p>
        <button class="btn btn-outline-light" type="button">
          Informasi lebih lanjut
        </button>
      </div>
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<?= $this->endSection(); ?>