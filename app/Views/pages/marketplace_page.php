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
          <?php foreach ($kriteria['aliran'] as $index => $j) : ?>
            <a href="/FilterProfile/<?= $j['nama_aliran']; ?>" class="tag" id="filter_aliran"><?= $j['nama_aliran']; ?></a>
          <?php endforeach; ?>
        </div>

      </div>
      <div class="tag__wrapper__cover-left"></div>
    </div>

  </div>
</nav>
<!-- nav 2 -->

<div class="bg-light marketplace">

  <!-- List of Cards -->
  <div class=" py-3 container-fluid">
    <h3 class="mt-2">
      Hasil Pencarian Fotografer Anda
    </h3>


    <p class="justify-content-center marketplace__find">Fotografer yang ditemukan <?= (count($fotografer) > 0 ? count($fotografer) : 0); ?> item
    </p>
    <button class="filter-button" onclick="openNav()"><i class="fa fa-filter" aria-hidden="true"></i> Filter</button>
    <!-- SEARCH BAR v2/ -->
    <div class="dropdown-sort dropdown">
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
        <!--  -->
        <!-- aliran -->
        <form action="/Profile/market_filter" method="post">
          <article class="beefup">
            <h2 class="beefup__head ">Aliran</h2>
            <div class="beefup__body">
              <?php foreach ($kriteria['aliran'] as $index => $j) : ?>
                <div class="checkbox">
                  <?php if (is_array($filter_aliran)) : ?>
                    <input <?= (in_array($j['nama_aliran'], $filter_aliran)) ? "checked" : "" ?> onChange="this.form.submit()" type="checkbox" id="filter_aliran" name="filter_aliran[]" value="<?= $j['nama_aliran']; ?>">
                    <label for="filter_aliran"> <?= $j['nama_aliran']; ?></label>
                  <?php else : ?>
                    <input onChange="this.form.submit()" type="checkbox" id="filter_aliran" name="filter_aliran[]" value="<?= $j['nama_aliran']; ?>">
                    <label for="filter_aliran"> <?= $j['nama_aliran']; ?></label>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
              <!-- </form> -->
            </div>
          </article>
          <!--  -->
          <!-- kota -->
          <article class="beefup">
            <h2 class="beefup__head">Kota</h2>
            <div class="beefup__body">
              <!-- <form action="/Profile/market_filter" method="post"> -->
              <?php foreach ($kriteria['kota'] as $index => $j) : ?>
                <div class="checkbox">
                  <?php if (is_array($filter_kota)) : ?>
                    <input <?= (in_array($j['nama_kota'], $filter_kota)) ? "checked" : "" ?> onChange="this.form.submit()" type="checkbox" id="filter_kota" name="filter_kota[]" value="<?= $j['nama_kota']; ?>">
                    <label for="filter_kota"> <?= $j['nama_kota']; ?></label>
                  <?php else : ?>
                    <input onChange="this.form.submit()" type="checkbox" id="filter_kota" name="filter_kota[]" value="<?= $j['nama_kota']; ?>">
                    <label for="filter_kota"> <?= $j['nama_kota']; ?></label>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          </article>
          <!-- harga -->
          <article class="beefup">
            <h2 class="beefup__head">Harga</h2>
            <div class="beefup__body">
              <!-- <form action=""> -->
              <div class="radio">
                <!--  -->
                <input <?= ($filter_harga == 'filterHargaAll') ? "checked" : "" ?> onChange="this.form.submit()" type="radio" id="filter_harga" name="filter_harga" value="filterHargaAll">
                <label for="filter_harga"> Rp0 - all</label>
              </div>
              <div class="radio">
                <!--  -->
                <input <?= ($filter_harga == 'filterHargaA') ? "checked" : "" ?> onChange="this.form.submit()" type="radio" id="filter_harga" name="filter_harga" value="filterHargaA">
                <label for="filter_harga"> Rp0 - Rp1.000.000</label>
              </div>
              <div class="radio">
                <!--  -->
                <input <?= ($filter_harga == 'filterHargaB') ? "checked" : "" ?> onChange="this.form.submit()" type="radio" id="filter_harga" name="filter_harga" value="filterHargaB">
                <label for="filter_harga"> Rp1.000.000 - Rp2.000.000</label>
              </div>
              <div class="radio">
                <input <?= ($filter_harga == 'filterHargaC') ? "checked" : "" ?> onChange="this.form.submit()" type="radio" id="filter_harga" name="filter_harga" value="filterHargaC">
                <label for="filter_harga">Rp2.000.000 - Rp3.000.000</label>
              </div>
              <div class="radio">
                <input <?= ($filter_harga == 'filterHargaD') ? "checked" : "" ?> onChange="this.form.submit()" type="radio" id="filter_harga" name="filter_harga" value="filterHargaD">
                <label for="filter_harga">Rp3.000.000 - Rp4.000.000</label>
              </div>
              <div class="radio">
                <input <?= ($filter_harga == 'filterHargaE') ? "checked" : "" ?> onChange="this.form.submit()" type="radio" id="filter_harga" name="filter_harga" value="filterHargaE">
                <label for="filter_harga"> > Rp5.000.000</label>
              </div>
              <!-- </form> -->
            </div>
          </article>
          <!-- rating -->
          <article class="beefup">
            <h2 class="beefup__head">Rating</h2>
            <div class="beefup__body">
              <!-- <form action=""> -->
              <div class="radio">
                <!--  -->
                <input <?= ($filter_rating == 'filterRating123') ? "checked" : "" ?> onChange="this.form.submit()" type="radio" id="filter_rating" name="filter_rating" value="filterRating123">
                <label for="filter_rating"><i class="fa fa-star" aria-hidden="true"></i> 1-5</label>
              </div>
              <div class="radio">
                <!--  -->
                <input <?= ($filter_rating == 'filterRating1') ? "checked" : "" ?> onChange="this.form.submit()" type="radio" id="filter_rating" name="filter_rating" value="filterRating1">
                <label for="filter_rating"><i class="fa fa-star" aria-hidden="true"></i> 1</label>
              </div>
              <div class="radio">
                <!--  -->
                <input <?= ($filter_rating == 'filterRating2') ? "checked" : "" ?> onChange="this.form.submit()" type="radio" id="filter_rating" name="filter_rating" value="filterRating2">
                <label for="filter_rating"><i class="fa fa-star" aria-hidden="true"></i> 2</label>
              </div>
              <div class="radio">
                <!--  -->
                <input <?= ($filter_rating == 'filterRating3') ? "checked" : "" ?> onChange="this.form.submit()" type="radio" id="filter_rating" name="filter_rating" value="filterRating3">
                <label for="filter_rating"><i class="fa fa-star" aria-hidden="true"></i> 3</label>
              </div>
              <div class="radio">
                <!--  -->
                <input <?= ($filter_rating == 'filterRating4') ? "checked" : "" ?> onChange="this.form.submit()" type="radio" id="filter_rating" name="filter_rating" value="filterRating4">
                <label for="filter_rating"><i class="fa fa-star" aria-hidden="true"></i> 4</label>
              </div>
              <div class="radio">
                <!--  -->
                <input <?= ($filter_rating == 'filterRating5') ? "checked" : "" ?> onChange="this.form.submit()" type="radio" id="filter_rating" name="filter_rating" value="filterRating5">
                <label for="filter_rating"><i class="fa fa-star" aria-hidden="true"></i> 5</label>
              </div>

            </div>
          </article>
          <!-- jmkRevuew -->
          <article class="beefup">
            <h2 class="beefup__head">Jumlah Review</h2>
            <div class="beefup__body">

              <div class="radio">
                <input <?= ($filter_jmlRating == 'filterJmlRating1') ? "checked" : "" ?> onChange="this.form.submit()" type="radio" id="filter_jmlRating" name="filter_jmlRating" value="filterJmlRating1">
                <label for="filter_jmlRating">0 - 10 </label>
              </div>
              <div class="radio">
                <input <?= ($filter_jmlRating == 'filterJmlRating2') ? "checked" : "" ?> onChange="this.form.submit()" type="radio" id="filter_jmlRating" name="filter_jmlRating" value="filterJmlRating2">
                <label for="filter_jmlRating">10 - 100 </label>
              </div>
              <div class="radio">
                <input <?= ($filter_jmlRating == 'filterJmlRating3') ? "checked" : "" ?> onChange="this.form.submit()" type="radio" id="filter_jmlRating" name="filter_jmlRating" value="filterJmlRating3">
                <label for="filter_jmlRating">> 100</label>
              </div>


            </div>
          </article>
        </form>
      </div>
    </div>
    <div class="card__listing">
      <div class="card__listing__wrapper row hidden-md-up w-100">
        <?php foreach ($fotografer as $k) : ?>
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
                    <span class="rating"><?= $k['rataRata_rating']; ?></span>
                    <span class="review">( <?= $k['jumlah_rating']; ?> Reviews )</span>
                  </div>
                  <div class="city"> <?= $k['nama_kota']; ?> </div>
                  <p class="type type__<?= $k['nama_aliran']; ?>"> Foto <?= $k['nama_aliran']; ?> </p>
                </div>

                <p class="button">
                  <a href=<?= (isset($get_sess)) || (isset($admin_sess)) ? "/Profile/" . $k['slug'] : "/Login" ?>><button class="btn btn-primary">See Profile</button></a>
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