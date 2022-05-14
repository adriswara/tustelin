<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">#Tustelin.id</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li>
                    <a class="nav-link" href="/profile/index">Marketplace</a>
                </li>
                <li>
                    <a class="nav-link" href="/databasetest">Beta_database</a>
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

                <a href="http://localhost:8080/login/logout"><button class="btn" type="button" style="width: auto">
                        Logout
                    </button></a>

                <a href=""><button class="btn" type="button" style="width: auto">
                        <?= $get_sess ?>
                    </button> </a>

                <img src="/img_avatar1.png" alt="Logo" style="width: 40px" class="rounded-pill" />
            </a>
        </div>
    </div>
</nav>