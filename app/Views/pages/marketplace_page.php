<?= $this->extend('layout/page_layout'); ?>
<!--PAGE CONTENT-->
<?= $this->section('pageContent'); ?>
<!---->

<!-- nav 2 -->
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <!-- form -->
      <form class="d-flex" action="" method="post">
        <input class="form-control me-2" type="text" placeholder="Cari jasa untukmu disini" name="keyword" id="frmKeyword">
        <!-- button cari -->
        <button class="btn btn-primary" type="submit" name="submit" style="width: 100px">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
            Cari
          </div>
        </button>
        <!-- button cari / -->
      </form>
      <!-- form / -->
    </div>
    <ul class="navbar-nav me-auto">

      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">Pernikahan</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">Acara</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">Foto Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)">Foto Keluarga</a>
      </li>
    </ul>
  </div>
</nav>
<!-- nav 2 -->

<div class="bg-light marketplace">
  <!-- Card -->
  <div class=" py-5 container">
    <div class="justify-content-center">
      <h2 class="justify-content-center mt-2">
        Hasil Pencarian Fotografer Anda
      </h2>

      <p class="justify-content-center">Fotografer yang ditemukan <?= (count($fotografer) > 0 ? count($fotografer) : 0); ?> item

        <p id="hasilSrc"></p>
      </p>
      <!--  -->
      <script>
        function myFunction() {
          var x = document.getElementById("frmKeyword").elements[0].value;
          document.getElementById("hasilSrc").innerHTML = x;
        }
      </script>
      <!--  -->
      <!-- SEARCH BAR V2 -->
      <!-- 
      <div class="col-6">
        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="keyword" name="keyword">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
            </div>
          </div>
        </form>
      </div> -->


      <!-- SEARCH BAR v2/ -->
      <div class="dropdown">
        Urutan Pencarian
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
  </div>

  <div class="marketplace__list bg-light container">
    <div class="row hidden-md-up">
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
                <div class="city">Bandung</div>
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
  </div>
  <?= $this->endSection(); ?>