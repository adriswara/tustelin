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
                    <a class="nav-link" href="/home/profile">Beta_Profile</a>
                </li>
                <li>
                    <a class="nav-link" href="/home/marketplace">Beta_marketplace</a>
                </li>
                <li>
                    <a class="nav-link" href="/fotografer">Beta_database</a>
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