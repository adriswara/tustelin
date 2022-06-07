<?= $this->extend('layout/page_layout'); ?>
<!--START CONTENT-->
<?= $this->section('pageContent'); ?>
<!---->
<div class="profile">

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
  <div class="name container">
    <h1 class="text-center "><?= $profil[0]['nama']; ?></h1>
    <span class="account card-text text-secondary ">
      <?= $profil[0]['akun_instagram']; ?>
    </span>

    - <i class="fa fa-star" aria-hidden="true"></i>
    <span class="rating"><?= $profil[0]['rataRata_rating']; ?></span>
    <span class="review">( <?= $profil[0]['jumlah_rating']; ?> Reviews )</span>
  </div>


  <!-- Tentang Fotografer -->
  <div class="  tentang-fotografer">
    <!-- <h3>Tentang Fotografer</h3> -->
    <div class="introduction container-fluid">

      <div class="introduction__image">
        <img src="/displaypic/<?= $profil[0]['displaypic']; ?>" alt="">
      </div>

      <div class="introduction__desc">
        <div class="desc">
          <p><b>Biodata</b></p><br>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
    </div>
  </div>


  <div class="info">
    <div class="container d-flex info-wrapper ">
      <div class="daftar-kontak">
        <span class="title">Daftar Kontak</span>
        <div>
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span><?= $profil[0]['no_telfon']; ?></span>
        </div>
        <div>
          <i class="fa fa-envelope-o" aria-hidden="true"></i>
          <span><?= $profil[0]['email']; ?></span>
        </div>
        <div>
          <i class="fa fa-instagram" aria-hidden="true"></i>
          <span><?= $profil[0]['akun_instagram']; ?></span>
        </div>
      </div>
      <div class="harga-pekerjaan">
        <span class="title">Harga dan Pekerjaan</span>
        <div>dimulai dari
          <b class="harga">Rp<?= $profil[0]['harga']; ?></b>
        </div>
        <div>Telah menyelesaikan <b><?= $profil[0]['jumlah_rating']; ?></b> pekerjaan</div>
      </div>
      <div class="equipment">
        <span class="title"> Camera Used</span>
        <ul>
          <li><?= $profil[0]['nama_alat']; ?></li>
        </ul>

      </div>
      <div class="equipment">
        <span class="title">Other Equipment</span>
        <ul>
          <li>Excell tripod</li>
          <li>DJI Ronin S Gimbal</li>
        </ul>
      </div>

    </div>
  </div>


  <div class="text-center ">
    <a href="https://wa.me/<?= $profil[0]['no_telfon']; ?>" target="_blank">
      <button class="btn btn-primary kontak" type="button">
        Kontak Fotografer
      </button>
    </a>

  </div>

  <!--end of Tentang Fotografer-->

  <!-- Gallery -->
  <div class="gallery">
    <h3>Sorotan Galeri Foto</h3>

    <div class="gallery-slider">
      <div class="gallery-slider__sub">
        <img src="https://source.unsplash.com/random" alt="">
      </div>
      <div class="gallery-slider__sub">
        <img src="https://source.unsplash.com/random" alt="">
      </div>
      <div class="gallery-slider__sub">
        <img src="https://source.unsplash.com/random" alt="">
      </div>
      <div class="gallery-slider__sub">
        <img src="https://source.unsplash.com/random" alt="">
      </div>
      <div class="gallery-slider__sub">
        <img src="https://source.unsplash.com/random" alt="">
      </div>
      <div class="gallery-slider__sub">
        <img src="https://source.unsplash.com/random" alt="">
      </div>
      <div class="gallery-slider__sub">
        <img src="https://source.unsplash.com/random" alt="">
      </div>
    </div>
    <div class="gallery-nav">
      <div class="gallery-nav__sub">
        <img src="https://source.unsplash.com/random" alt="">
      </div>
      <div class="gallery-nav__sub">
        <img src="https://source.unsplash.com/random" alt="">
      </div>
      <div class="gallery-nav__sub">
        <img src="https://source.unsplash.com/random" alt="">
      </div>
      <div class="gallery-nav__sub">
        <img src="https://source.unsplash.com/random" alt="">
      </div>
      <div class="gallery-nav__sub">
        <img src="https://source.unsplash.com/random" alt="">
      </div>
      <div class="gallery-nav__sub">
        <img src="https://source.unsplash.com/random" alt="">
      </div>
      <div class="gallery-nav__sub">
        <img src="https://source.unsplash.com/random" alt="">
      </div>
    </div>
  </div>

  <div class="container mt-5">

    <h3>User Review</h3>

    <?php foreach ($profil as $k) : ?>

      <div class="containerChat">
        <div class="d-flex">
          <img src="/img_avatar1.png" alt="Avatar" />
          <div>
            <h4><?= $k['username_pengguna']; ?></h4>
            <div class="time-right"><?= $k['waktu_kirim']; ?> </div>
          </div>
          <span class=""><i class="fa fa-star" aria-hidden="true"></i> <?= $k['rating']; ?></span>
        </div>

        <p><?= $k['review']; ?></p>


      </div>

    <?php endforeach; ?>



    <?php if (isset($get_sess)) : ?>
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
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Small button
              </button>
              <div class="dropdown-menu">
                <div class="radio">
                  <?= $inputRating = null; ?>

                  <!--  -->
                  <input <?= ($inputRating == 'inputRating1') ? "checked" : "" ?> type="radio" id="inputRating" name="inputRating" value="inputRating1">
                  <label for="inputRating"><i class="fa fa-star" aria-hidden="true"></i> 1</label>
                </div>
                <div class="radio">
                  <?= $inputRating = null; ?>

                  <!--  -->
                  <input <?= ($inputRating == 'inputRating2') ? "checked" : "" ?> type="radio" id="inputRating" name="inputRating" value="inputRating2">
                  <label for="inputRating"><i class="fa fa-star" aria-hidden="true"></i> 2</label>
                </div>
                <div class="radio">
                  <?= $inputRating = null; ?>

                  <!--  -->
                  <input <?= ($inputRating == 'inputRating3') ? "checked" : "" ?> type="radio" id="inputRating" name="inputRating" value="inputRating3">
                  <label for="inputRating"><i class="fa fa-star" aria-hidden="true"></i> 3</label>
                </div>
                <div class="radio">
                  <?= $inputRating = null; ?>

                  <!--  -->
                  <input <?= ($inputRating == 'inputRating4') ? "checked" : "" ?> type="radio" id="inputRating" name="inputRating" value="inputRating4">
                  <label for="inputRating"><i class="fa fa-star" aria-hidden="true"></i> 4</label>
                </div>
                <div class="radio">
                  <?= $inputRating = null; ?>

                  <!--  -->
                  <input <?= ($inputRating == 'inputRating5') ? "checked" : "" ?> type="radio" id="inputRating" name="inputRating" value="inputRating5">
                  <label for="inputRating"><i class="fa fa-star" aria-hidden="true"></i> 5</label>
                </div>
              </div>
              <!-- <div class="dropdown-menu">
                    2
                  </div>
                  <div class="dropdown-menu">
                    3
                  </div>
                  <div class="dropdown-menu">
                    4
                  </div>
                  <div class="dropdown-menu">
                    5
                  </div> -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    <?php endif; ?>
    <div class="col-md-2">
      <!---->








    </div>

    <?= $this->endSection(); ?>