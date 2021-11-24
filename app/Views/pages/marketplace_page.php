<!DOCTYPE html>
<html lang="en">

<head>
  <title>Website Fotografi</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" src="https://kit.fontawesome.com/a076d05399.js" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    /* carousel */
    .main-banner {
      height: 70vh;
    }

    .main-banner__inner {
      height: 70vh;
    }

    .main-banner__inner .carousel-item {
      height: 100%;
    }

    /* Full-width input fields */
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
      background-color: #04aa6d;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
      padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto;
      /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%;
      /* Could be more or less, depending on screen size */
    }

    .modal-backdrop {
      z-index: 0;
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s;
    }

    @-webkit-keyframes animatezoom {
      from {
        -webkit-transform: scale(0);
      }

      to {
        -webkit-transform: scale(1);
      }
    }

    @keyframes animatezoom {
      from {
        transform: scale(0);
      }

      to {
        transform: scale(1);
      }
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }

      .cancelbtn {
        width: 100%;
      }
    }
  </style>
</head>

<body class="bg-secondary">
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

          <label for="usrname"><b>Username</b> </label>
          <input type="text" placeholder="Enter Username" name="username" id="username" required />
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

  <div class="bg-secondary" style="margin-top: -1rem; margin-bottom: 1rem">
    <!-- Card -->
    <div class="bg-light py-5">
      <div class="justify-content-center" style="margin-left: 20rem; margin-right: -10rem">
        <h2 class="justify-content-center" style="margin-top: 1rem">
          Hasil Pencarian Anda
        </h2>
        <p class="justify-content-center">Kategori Jasa Foto Makanan</p>
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
  <div>
    <div class="container mt-0 bg-secondary" style="margin-bottom: 90px">
      <div class="row">
        <div class="col-sm-4">
          <h3 style="margin-top: -20px; padding-top: 70px">
            Daftarkan Akunmu
          </h3>
          <p style="margin-bottom: auto">
            Daftar terlebih dahulu untuk memesan jasa.
          </p>
        </div>
        <div class="col-sm-4" style="margin-top: 50px">
          <h3 style="height: margin-top: -20px;padding top : 70px;">
            Negosiasi
          </h3>
          <p style="margin-bottom: auto">
            Negosiasikan harga sesuai dengan kebutuhanmu
          </p>
        </div>
        <div class="col-sm-4">
          <h3 style="margin-top: -20px; padding-top: 70px">
            Pilih jasa sesuai kebutuhanmu
          </h3>
          <p style="margin-bottom: auto">
            Pilih berbagai jenis jasa foto sesuai dengan konsep dan kebutuhan
            anda
          </p>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Get the modal login
    var modal = document.getElementById("id01");

    // When the user clicks anywhere outside of the modal login, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    };
  </script>
</body>

</html>
<!-- style="width: 50%; margin-top: 10px" warna bawah background-color: rgb(99, 123, 131)-->

<!--

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

-->

<!-- 
    <div class="container-fluid mt-3 bg-secondary">
      <h3 style="margin-top: -20px; padding-top: 70px">Daftarkan Akunmu</h3>
      <p style="margin-bottom: auto">
        Daftar terlebih dahulu untuk memesan jasa.
      </p>
      <h3 style="height: margin-top: -20px;padding: top 70px;">Negosiasi</h3>
      <p>Negosiasikan harga sesuai dengan kebutuhanmu</p>
    </div> -->