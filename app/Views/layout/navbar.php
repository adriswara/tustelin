<nav class="navbar header navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid px-3">
        <a class="navbar-brand" href="#">
            <img src="/logo-transparent.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php if (isset($get_sess)) : ?>
                        <a class="nav-link" href="/Dashboard/logedHome">Home</a>
                    <?php elseif (isset($admin_sess)) : ?>
                        <a class="nav-link" href="/DashboardAdmin/logedHome">Home</a>
                    <?php else : ?>
                        <a class="nav-link" href="/">Home</a>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if (isset($get_sess)) : ?>
                        <a class="nav-link" href="/Dashboard/logged">Marketplace</a>
                    <?php elseif (isset($admin_sess)) : ?>
                        <a class="nav-link" href="/DashboardAdmin/logged">Marketplace</a>
                    <?php else : ?>
                        <a class="nav-link" href="/profile/index">Marketplace</a>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if (isset($admin_sess)) : ?>
                        <a class="nav-link" href="/databasetest">Admin Dashboard</a>
                    <?php endif; ?>
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
        <div class="registration">
            <?php if (isset($get_sess)) : ?>
                <a href="/login/logout">
                    Logout
                </a>
                <a href=""> Hi,<?= $get_sess ?>!</a>
            <?php elseif (isset($admin_sess)) : ?>
                <a href="/login/logout">
                    Logout
                </a>
                <a href=""> Hi,<?= $admin_sess ?>!</a>
            <?php else : ?>
                <a href="/Login">
                    Login
                </a>
                <a href="/Register">
                    Sign Up
                </a>
            <?php endif; ?>

        </div>
    </div>
</nav>