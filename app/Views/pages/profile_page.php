<?= $this->extend('layout/page_layout'); ?>
<!--START CONTENT-->
<?= $this->section('pageContent'); ?>
<!---->
<div class="bg-secondary" style="margin-top: -1rem; margin-bottom: 1rem">

  <!-- modal 2 -->


  <!-- The Modal -->
  <div class="modal" id="myModal2">
    <div class="modal-dialog modal-fullscreen-sm-down">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h2 class="modal-title">Kontak Fotografer</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>



        <!-- Modal body -->
        <div class="modal-body">
          <label for="email"><b>Nomor Telefon</b></label>
          <p><?= $profil[0]['no_telfon']; ?></p>
          <label for="email"><b>Email</b> </label>
          <p><?= $profil[0]['email']; ?></p>
          <label for="psw"><b>Instagram</b></label>
          <p><?= $profil[0]['akun_instagram']; ?></p>
          <label for="psw-repeat"><b>Nomor Rekening</b></label>
          <p><?= $profil[0]['no_rekening']; ?></p>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
            Cancel
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- end of modal 2 -->



  <!-- Card -->
  <div class="bg-light py-5"></div>

  <div class="bg-light container-fluid">
    <div class="row hidden-md-up justify-content-end" style="margin-right: 20rem">
      <!---->

      <!-- Carousel -->
      <div id="demo" class="carousel slide main-banner" style="height: 52vh;width: 100vh;" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner main-banner__inner" style="height:52vh;width: 100vh">
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
      <!---->

      <!---->

      <div class="col-md-2">
        <!---->


        <div class="card" style="width: 300px">
          <div>
            <img id="CardDi" class="card-img-top" src="/displaypic/<?= $profil[0]['displaypic']; ?>" alt="Card image" style="width: 100%" />
            <div style="margin-left: 6rem; margin-top: -3rem">
              <img id="CardDp" src="/displaypic/<?= $profil[0]['displaypic']; ?>" alt="Logo" style="width: 120px" class="rounded-pill" />
            </div>
          </div>



          <!-- Card Body -->
          <div class="card-body" style="margin-top: 1rem">
            <h4 class="card-title" style="margin-top: 1rem"><?= $profil[0]['nama']; ?></h4>
            <p class="card-text">Harga Dimulai Dari : <?= $profil[0]['harga']; ?></p>
            <p class="card-text">Rating : <?= $profil[0]['rataRata_rating']; ?>.0/5.0</p>

            <p>Total pemesanan jasa : <?= $profil[0]['jumlah_rating']; ?></p>
            <p>
              <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#myModal2">
                Kontak Fotografer
              </button>
            </p>
          </div>
        </div>
        <div style="padding-top: 1rem"></div>
      </div>
      <!--batas-->



      <!-- batas -->
    </div>
    <!-- Gallery -->

    <div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal">
      <div class="col-12 col-sm-6 col-lg-3">
        <img class="w-100" src="https://images.unsplash.com/photo-1546853020-ca4909aef454?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="First slide" data-target="#carouselExample" data-slide-to="0">
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <img class="w-100" src="https://images.unsplash.com/photo-1546534505-d534e27ecb35?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="First slide" data-target="#carouselExample" data-slide-to="1">
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <img class="w-100" src="https://images.unsplash.com/photo-1546111380-cfca9a43dd85?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="First slide" data-target="#carouselExample" data-slide-to="2">
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <img class="w-100" src="https://images.unsplash.com/photo-1547288242-f3d375fc7b5f?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="First slide" data-target="#carouselExample" data-slide-to="3">
      </div>
    </div>

    <!-- Modal -->
    <!-- 
This part is straight out of Bootstrap docs. Just a carousel inside a modal.
-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div id="carouselExample" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExample" data-slide-to="1"></li>
                <li data-target="#carouselExample" data-slide-to="2"></li>
                <li data-target="#carouselExample" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://images.unsplash.com/photo-1546853020-ca4909aef454?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://images.unsplash.com/photo-1546534505-d534e27ecb35?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://images.unsplash.com/photo-1546111380-cfca9a43dd85?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://images.unsplash.com/photo-1547288242-f3d375fc7b5f?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" alt="Fourth slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Custom Styling Toggle. For demo purposes only. -->
    <div class="switch-wrap">
      <label class="switch">
        <input type="checkbox" id="styleSwitch" onclick="switchStyle();">
        <span class="slider round"></span>
      </label>
      <span class="switch-text">Toggle between <em>Bootstrap defaults</em> and <em>custom styling</em>.</span>
    </div>

    <!-- close gallery -->
    <br />
    <div class="row justify-content-end" style="margin-right: 20rem">
      <!-- -->
      <div class="col-md-2" style="width: 60rem">
        <h2>User Review</h2>

        <?php foreach ($profil as $k) : ?>

          <div class="containerChat">
            <img src="/img_avatar1.png" alt="Avatar" style="width: 100%" />
            <h4><?= $k['username_pengguna']; ?></h4>
            <p><?= $k['review']; ?></p>
            <span class="">Rating : <?= $k['rating']; ?></span>
            <span class="time-right"><?= $k['waktu_kirim']; ?> </span>
          </div>

        <?php endforeach; ?>




        <div class="containerChat darker">

          <h4>Input Review</h4>
          <div class="form-group">
            <form action="/Profile/saveReview/<?= $profil[0]['slug']; ?>" method="post">
              <?= csrf_field(); ?>
              <!--  -->
              <label for="review" class="form-label">Review :<?= $profil[0]['slug']; ?></label>
              <input type="text" name="review" class="form-control" id="review" value="<?= old('review'); ?>">
              <!--  -->
              <div class="btn-group">
                <!-- <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Rating
                </button>
                <div class="dropdown-menu" value="rating1">
                  <i class="fa fa-star" aria-hidden="true">1</i>
                </div>
                <div class="dropdown-menu" value="rating2">
                  <i class="fa fa-star" aria-hidden="true">2</i>
                </div>
                <div class="dropdown-menu" value="rating3">
                  <i class="fa fa-star" aria-hidden="true">3</i>
                </div>
                <div class="dropdown-menu" value="rating4">
                  <i class="fa fa-star" aria-hidden="true">4</i>
                </div>
                <div class="dropdown-menu" value="rating5">
                  <i class="fa fa-star" aria-hidden="true">5</i>
                </div> -->
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-2">
          <!---->

          <div class="card" style="width: 300px">
            <div>
              <img id="CardDi" class="card-img-top" src="/equipment.jpg" alt="Card image" style="width: 100%" />
              <div style="margin: -2rem; margin-left: 1rem; "></div>
            </div>

            <!-- Card Body -->
            <div class="card-body" style="margin-top: 1rem">
              <h4 class="card-title" style="margin-top: 1rem">
                Equipment List
              </h4>
              <p class="card-text">Main Camera : <?= $profil[0]['nama_alat']; ?></p>

              <h5>Other Equipment</h5>
              <p class="card-text">Excell tripod</p>
              <p>DJI Ronin S Gimbal</p>
              <p>
                <button href="#" class="btn btn-primary">More</button>
              </p>
            </div>
          </div>
          <div style="padding-top: 1rem"></div>
        </div>
        <!---->
      </div>
    </div>
  </div>

  <?= $this->endSection(); ?>