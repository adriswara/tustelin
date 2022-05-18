<?= $this->extend('layout/page_layout'); ?>
<!--PAGE CONTENT-->
<?= $this->section('pageContent'); ?>
<!---->

<!-- nav 2 -->
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
  <div class="container-fluid">
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

<div class="bg-secondary marketplace" style="margin-top: -1rem; margin-bottom: 1rem">
  <!-- Card -->
  <div class="bg-light py-5">
    <div class="justify-content-center" style="margin-left: 20rem; margin-right: -10rem">
      <h2 class="justify-content-center" style="margin-top: 1rem">
        Hasil Pencarian Anda
      </h2>
      <p class="justify-content-center">Pencarian :
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
      <div class="dropdown" style="width: 20rem; margin-right: 0rem; margin-left: 71rem">
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

  <div class="bg-light container-fluid">
    <div class="row hidden-md-up justify-content-center">
      <?php foreach ($fotografer as $k) : ?>

        <!---->
        <div class="col-md-2">
          <!---->

          <div class="card" style="width: 300px">
            <div>
              <img id="CardDi" class="card-img-top" src="/displaypic/<?= $k['displaypic']; ?>" alt="Card image" style="width: 100%" />
              <div style="margin: -2rem; margin-left: 1rem; left: ">
                <img id="CardDp" src="/displaypic/<?= $k['displaypic']; ?>" alt="Logo" style="width: 70px" class="rounded-pill" />
              </div>
            </div>

            <!-- Card Body -->
            <div class="card-body" style="margin-top: 1rem">
              <p class="text-secondary" style="margin-left: 10rem">
                <?= $k['harga']; ?>
              </p>
              <h4 class="card-title" style="margin-top: 1rem"><?= $k['nama']; ?></h4>
              <p class="card-text">
                <?= $k['akun_instagram']; ?>
              </p>
              <p class="card-text"> <?= $k['nama_aliran']; ?> </p>
              <p>
                <a href="/Login"><button class="btn btn-primary">See Profile</button></a>
              </p>
            </div>
          </div>
          <div style="padding-top: 1rem"></div>
        </div>
      <?php endforeach; ?>

      <!---->
      <div class="col-md-2">
        <!---->

        <div class="card" style="width: 300px">
          <div>
            <img id="CardDi" class="card-img-top" src="/makanan.jpg" alt="Card image" style="width: 100%" />
            <div style="margin: -2rem; margin-left: 1rem; left: ">
              <img id="CardDp" src="/img_avatar1.png" alt="Logo" style="width: 70px" class="rounded-pill" />
            </div>
          </div>

          <!-- Card Body -->
          <div class="card-body" style="margin-top: 1rem">
            <p class="text-secondary" style="margin-left: 10rem">
              Rp500.000
            </p>
            <h4 class="card-title" style="margin-top: 1rem">John Doe</h4>
            <p class="card-text">
              Some example text some example text. John Doe is an architect
              and engineer
            </p>
            <p>
              <button href="#" class="btn btn-primary">See Profile</button>
            </p>
          </div>
        </div>
        <div style="padding-top: 1rem"></div>
      </div>
      <!---->

      <div class="col-md-2">
        <!---->
        <div class="card" style="width: 300px">
          <div>
            <img id="CardDi" class="card-img-top" src="/makanan.jpg" alt="Card image" style="width: 100%" />
            <div style="margin: -2rem; margin-left: 1rem; left: ">
              <img id="CardDp" src="/img_avatar1.png" alt="Logo" style="width: 70px" class="rounded-pill" />
            </div>
          </div>

          <!-- Card Body -->
          <div class="card-body" style="margin-top: 1rem">
            <p class="text-secondary" style="margin-left: 10rem">
              Rp500.000
            </p>
            <h4 class="card-title" style="margin-top: 1rem">John Doe</h4>
            <p class="card-text">
              Some example text some example text. John Doe is an architect
              and engineer
            </p>
            <p>
              <button href="#" class="btn btn-primary">See Profile</button>
            </p>
          </div>
        </div>
        <div style="padding-top: 1rem"></div>
      </div>
      <!---->
      <div class="col-md-2">
        <!---->
        <div class="card" style="width: 300px">
          <div>
            <img id="CardDi" class="card-img-top" src="/makanan.jpg" alt="Card image" style="width: 100%" />
            <div style="margin: -2rem; margin-left: 1rem; left: ">
              <img id="CardDp" src="/img_avatar1.png" alt="Logo" style="width: 70px" class="rounded-pill" />
            </div>
          </div>

          <!-- Card Body -->
          <div class="card-body" style="margin-top: 1rem">
            <p class="text-secondary" style="margin-left: 10rem">
              Rp500.000
            </p>
            <h4 class="card-title" style="margin-top: 1rem">John Doe</h4>
            <p class="card-text">
              Some example text some example text. John Doe is an architect
              and engineer
            </p>
            <p>
              <button href="#" class="btn btn-primary">See Profile</button>
            </p>
          </div>
        </div>
        <div style="padding-top: 1rem"></div>
      </div>
      <!---->
      <div class="col-md-2">
        <!---->
        <div class="card" style="width: 300px">
          <div>
            <img id="CardDi" class="card-img-top" src="/makanan.jpg" alt="Card image" style="width: 100%" />
            <div style="margin: -2rem; margin-left: 1rem; left: ">
              <img id="CardDp" src="/img_avatar1.png" alt="Logo" style="width: 70px" class="rounded-pill" />
            </div>
          </div>

          <!-- Card Body -->
          <div class="card-body" style="margin-top: 1rem">
            <p class="text-secondary" style="margin-left: 10rem">
              Rp500.000
            </p>
            <h4 class="card-title" style="margin-top: 1rem">John Doe</h4>
            <p class="card-text">
              Some example text some example text. John Doe is an architect
              and engineer
            </p>
            <p>
              <button href="#" class="btn btn-primary">See Profile</button>
            </p>
          </div>
        </div>
        <div style="padding-top: 1rem"></div>
      </div>
      <!---->
    </div>
    <br />
    <div class="row justify-content-center">
      <!---->
      <div class="col-md-2">
        <!---->

        <div class="card" style="width: 300px">
          <div>
            <img id="CardDi" class="card-img-top" src="/makanan.jpg" alt="Card image" style="width: 100%" />
            <div style="margin: -2rem; margin-left: 1rem; left: ">
              <img id="CardDp" src="/img_avatar1.png" alt="Logo" style="width: 70px" class="rounded-pill" />
            </div>
          </div>

          <!-- Card Body -->
          <div class="card-body" style="margin-top: 1rem">
            <p class="text-secondary" style="margin-left: 10rem">
              Rp500.000
            </p>
            <h4 class="card-title" style="margin-top: 1rem">John Doe</h4>
            <p class="card-text">
              Some example text some example text. John Doe is an architect
              and engineer
            </p>
            <p>
              <button href="#" class="btn btn-primary">See Profile</button>
            </p>
          </div>
        </div>
        <div style="padding-top: 1rem"></div>
      </div>
      <!---->
      <div class="col-md-2">
        <!---->
        <div class="card" style="width: 300px">
          <div>
            <img id="CardDi" class="card-img-top" src="/makanan.jpg" alt="Card image" style="width: 100%" />
            <div style="margin: -2rem; margin-left: 1rem; left: ">
              <img id="CardDp" src="/img_avatar1.png" alt="Logo" style="width: 70px" class="rounded-pill" />
            </div>
          </div>

          <!-- Card Body -->
          <div class="card-body" style="margin-top: 1rem">
            <p class="text-secondary" style="margin-left: 10rem">
              Rp500.000
            </p>
            <h4 class="card-title" style="margin-top: 1rem">John Doe</h4>
            <p class="card-text">
              Some example text some example text. John Doe is an architect
              and engineer
            </p>
            <p>
              <button href="#" class="btn btn-primary">See Profile</button>
            </p>
          </div>
        </div>
        <div style="padding-top: 1rem"></div>
      </div>
      <!---->
      <div class="col-md-2">
        <!---->
        <div class="card" style="width: 300px">
          <div>
            <img id="CardDi" class="card-img-top" src="/makanan.jpg" alt="Card image" style="width: 100%" />
            <div style="margin: -2rem; margin-left: 1rem; left: ">
              <img id="CardDp" src="/img_avatar1.png" alt="Logo" style="width: 70px" class="rounded-pill" />
            </div>
          </div>

          <!-- Card Body -->
          <div class="card-body" style="margin-top: 1rem">
            <p class="text-secondary" style="margin-left: 10rem">
              Rp500.000
            </p>
            <h4 class="card-title" style="margin-top: 1rem">John Doe</h4>
            <p class="card-text">
              Some example text some example text. John Doe is an architect
              and engineer
            </p>
            <p>
              <button href="#" class="btn btn-primary">See Profile</button>
            </p>
          </div>
        </div>
        <div style="padding-top: 1rem"></div>
      </div>
      <!---->
      <div class="col-md-2">
        <!---->
        <div class="card" style="width: 300px">
          <div>
            <img id="CardDi" class="card-img-top" src="/makanan.jpg" alt="Card image" style="width: 100%" />
            <div style="margin: -2rem; margin-left: 1rem; left: ">
              <img id="CardDp" src="/img_avatar1.png" alt="Logo" style="width: 70px" class="rounded-pill" />
            </div>
          </div>

          <!-- Card Body -->
          <div class="card-body" style="margin-top: 1rem">
            <p class="text-secondary" style="margin-left: 10rem">
              Rp500.000
            </p>
            <h4 class="card-title" style="margin-top: 1rem">John Doe</h4>
            <p class="card-text">
              Some example text some example text. John Doe is an architect
              and engineer
            </p>
            <p>
              <button href="#" class="btn btn-primary">See Profile</button>
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