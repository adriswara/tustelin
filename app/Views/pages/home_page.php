<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">#Tustelin.id</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle pl-1" href="#" role="button" data-bs-toggle="dropdown">Kategori Jasa</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Keluarga</a></li>
            <li><a class="dropdown-item" href="#">Produk Kemasan</a></li>
            <li><a class="dropdown-item" href="#">Makanan & Minuman</a></li>
            <li><a class="dropdown-item" href="#">...</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="mr-4">
      <a class="navbar-brand mr-4" href="#">
        <!--

              data-bs-toggle="modal"
              data-bs-target="#myModal"

            -->

        <button class="btn" type="button" onclick="document.getElementById('id01').style.display='block'" style="width: auto">
          Login
        </button>

        <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#myModal" style="width: auto">
          Sign Up
        </button>

        <img src="/img_avatar1.png" alt="Logo" style="width: 40px" class="rounded-pill" />
      </a>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Cari jasa untukmu disini" />
        <button class="btn btn-primary" type="button" style="width: 100px">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
            Cari
          </div>
        </button>
      </form>
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

<!--Modal Sign Up-->

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-fullscreen-sm-down">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h2 class="modal-title">Register</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required />

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required />

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required />
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
          Sign Up
        </button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
          Cancel
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Carousel -->
<div id="demo" class="carousel slide main-banner" data-bs-ride="carousel">
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner main-banner__inner" style="width: 100%">
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

<!-- Modal Login -->

<div id="id01" class="modal">
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="/img_avatar1.png" alt="Avatar" class="avatar" />
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required />

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required />

      <button class="btn btn-primary" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember" /> Remember
        me
      </label>
    </div>

    <div class="container" style="background-color: #f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
        Cancel
      </button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>