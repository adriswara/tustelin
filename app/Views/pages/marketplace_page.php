<?= $this->extend('layout/page_layout'); ?>
<!--PAGE CONTENT-->
<?= $this->section('pageContent'); ?>
<!---->

<!-- nav 2 -->
<nav class="marketplace__filter navbar-expand-sm bg-secondary navbar-dark">
  <div class="container-fluid p-3">
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <!-- form -->
      <form class="search-bar" action="" method="post">
        <i class="fa fa-search" aria-hidden="true"></i>
        <input class="form-control me-2" type="text" placeholder="ketik nama, username, kota, atau bidang dari fotografer yang kamu cari" name="keyword" id="frmKeyword">
      </form>
      <!-- form / -->
    </div>
    <div class="tags">
      <div class="tag__wrapper__cover-right"></div>
      <div class="tag__wrapper">
        <div class="tag__wrapper__list">
          <a class=tag>keluarga</a>
          <a class=tag>keluarga</a>
          <a class=tag>keluarga</a>
          <a class=tag>keluarga</a>
          <a class=tag>keluarga</a>
          <a class=tag>keluarga</a>
          <a class=tag>keluarga</a>
          <a class=tag>keluarga</a>
          <a class=tag>keluarga</a>
          <a class=tag>keluarga</a>
          <a class=tag>keluarga</a>
          <a class=tag>keluarga</a>
          <a class=tag>keluarga</a>
          <a class=tag>keluarga</a>

        </div>

      </div>
      <div class="tag__wrapper__cover-left"></div>
    </div>

  </div>
</nav>
<!-- nav 2 -->

<div class="bg-light marketplace">

  <!-- List of Cards -->
  <div class=" py-5 container-fluid">
    <h2 class="mt-2">
      Hasil Pencarian Fotografer Anda
    </h2>
    <p class="justify-content-center">Fotografer yang ditemukan <?= (count($fotografer) > 0 ? count($fotografer) : 0); ?> item
    </p>
    <!-- SEARCH BAR v2/ -->
    <div class="dropdown">
      <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" style="width: 11rem">
        Urutkan
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Alfabet A-Z</a></li>
        <li><a class="dropdown-item" href="#">Alfabet Z-A</a></li>
        <li>
          <hr class="dropdown-divider" />
        </li>
        <li><a class="dropdown-item" href="#">Harga Tertinggi</a></li>
        <li><a class="dropdown-item" href="#">Garga Terendah</a></li>
        <li>
          <hr class="dropdown-divider" />
        </li>
        <li><a class="dropdown-item" href="#">Rating Tertinggi</a></li>
        <li><a class="dropdown-item" href="#">Rating Terendah</a></li>
      </ul>
    </div>
  </div>



  <div class="marketplace__list  bg-light container-fluid">

    <div class="filter__sidebar">
      <div>
        Filter
      </div>
    </div>
    <div class="card__listing">
      <div class="card__listing__wrapper row hidden-md-up w-100">
        <?php foreach ($fotografer as $index => $k) : ?>
          <div class="card__wrapper col-lg-3 col-md-6 col-sm-12">
            <div class="card  px-0">
              <div class="card__imgwrapper">
                <img id="CardDi" class="card__img" src="/displaypic/<?= $k['displaypic']; ?>" alt="Card image" />
                <img id="CardDp" src="/displaypic/<?= $k['displaypic']; ?>" alt="Logo" class="rounded-pill card__pp" />
              </div>

              <!-- Card Body -->
              <div class="card-body card__body">
                <p class="harga">
                  <?= $k['harga']; ?>
                </p>
                <div class="description">
                  <h4 class="card-title mb-0"><?= $k['nama']; ?>
                  </h4>
                  <span class="account card-text text-secondary ">
                    <?= $k['akun_instagram']; ?>
                  </span>
                  <div class="ratingReview">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <span class="rating">5.0</span>
                    <span class="review">( 5 Reviews )</span>
                  </div>
                  <div class="city"> <?= $k['nama_kota']; ?> </div>
                  <p class="type type__<?= $k['nama_aliran']; ?>"> Foto <?= $k['nama_aliran']; ?> </p>
                </div>

                <p class="button">
                  <a href=<?= (isset($get_sess)) ? "/Profile/" . $k['slug'] : "/Login" ?>><button class="btn btn-primary">See Profile</button></a>
                </p>
              </div>
            </div>
          </div>


        <?php endforeach; ?>

      </div>
      <?= $this->include('layout/footer'); ?>
    </div>


  </div>
  <?= $this->endSection(); ?>