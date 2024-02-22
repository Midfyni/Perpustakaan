<?php
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container px-lg-3">
        <img src="https://static-00.iconduck.com/assets.00/open-book-icon-2048x2048-wuklhx59.png" style="width: 40px;"
            alt="Logo" title="MaBook">
        <a class="navbar-brand mx-lg-2" href="#!">Mabook</a>
        <ul class="ms-auto mb-2 mb-lg-0 navbar-links">
            <?php
            if ($_SESSION['master'] || $_SESSION['admin'] || $_SESSION['user']) {
                ?>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/logout">sign
                        out</a></li>
                <li class="nav-item"><a class="btn btn-primary nav-link active px-2" style="color= white;"
                        aria-current="page" href="<?= BASEURL; ?>/Dashboard">Explore</a></li>
                <?php
            } else {
                ?>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/login">sign in</a>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</nav>
<div class="hero">
    <img src="https://images.unsplash.com/photo-1577985051167-0d49eec21977" alt="Background-Image"
        style="width:100%; height: 100vh;">
</div>
<!-- Header-->
<header id="home" class="py-5 my-5" style="min-height: 100vh;">
    <div class="container px-lg-5 my-5">
        <div class="p-4 p-lg-5 rounded-3 text-center" style="color: white">
            <div class="m-4 m-lg-5">
                <h1 class="display-5 fw-bold pb-4">Temukan kemungkinan tidak terbatas!</h1>
                <p class="sao">Jelajahi dunia pengetahuan di perpustakaan MaBook. Temukan pertualanganmu selanjutnya
                    dalam koleksi buku kami yang sangat banyak</p>
                <a class="btn btn-primary btn-lg" href="#Ekskul">Tau lebih
                    banyak</a>
            </div>
        </div>
    </div>
</header>
<!-- Page Content-->
<section class="pt-4">
    <div id="Ekskul" class="container px-lg-5">
        <!-- Page Features-->
        ><div class="row gx-lg-5">
            <center>
                <h1 class="display-5 fw-bold mb-5 pb-4" style="color: black;">KATEGORI</h1>
            </center>
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card border-0 shadow">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <img src="http://localhost/UAS/public/img/cinderella.jpg" alt="" class="card-img-top mt-4"
                            style="height: 400px; object-fit: cover;">
                        <div class="card-body-content">
                            <h2 class="card-title fs-4 fw-bold mt-4">Fiksi</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card border-0 shadow">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <img src="http://localhost/UAS/public/img/non-fiksi.jpg" alt="" class="card-img-top mt-4"
                            style="height: 400px; object-fit: cover;">
                        <div class="card-body-content">
                            <h2 class="card-title fs-4 fw-bold mt-4">Non-fiksi</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card border-0 shadow">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <img src="http://localhost/UAS/public/img/science.jpg" alt="" class="card-img-top mt-4"
                            style="height: 400px; object-fit: cover;">
                        <div class="card-body-content">
                            <h2 class="card-title fs-4 fw-bold mt-4">Science</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card border-0 shadow">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <img src="http://localhost/UAS/public/img/sejarah.jpg" alt="" class="card-img-top mt-4"
                            style="height: 400px; object-fit: cover;">
                        <div class="card-body-content">
                            <h2 class="card-title fs-4 fw-bold mt-4">Sejarah</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>