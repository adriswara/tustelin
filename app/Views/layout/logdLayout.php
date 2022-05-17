<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $title; ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Bootstrap CSS
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" src="https://kit.fontawesome.com/a076d05399.js" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <!--STYLING CSS-->
  <?= $this->include('layout/style'); ?>
  <!-- -->
</head>

<body class="bg-secondary">
  <!--NAVBAR-->
  <?= $this->include('layout/logdNavbar'); ?>
  <!--Modal Sign Up-->

  <!-- The Modal -->
  <div class="modal" id="myModal1">
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
  <!-- end of modal signup -->

  <!--HEADER > CONTENT-->
  <?= $this->renderSection('pageContent'); ?>
  <!--CONTENT > FOOTER-->

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
  <!-- end of modal -->
  <!-- modal 2 -->



  <!-- end of modal 2 -->




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
          <h3>
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

    // Gallery

    function switchStyle() {
      if (document.getElementById('styleSwitch').checked) {
        document.getElementById('gallery').classList.add("custom");
        document.getElementById('exampleModal').classList.add("custom");
      } else {
        document.getElementById('gallery').classList.remove("custom");
        document.getElementById('exampleModal').classList.remove("custom");
      }
    }
  </script>
  <!-- Popper.js first, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>

</html>