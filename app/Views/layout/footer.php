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