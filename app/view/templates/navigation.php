<nav id="nav">
    <div class="background">
    </div>

    <div class="title" style="margin-left: 50px; margin-top:10px">
        <div class="container">
            <img src="https://static-00.iconduck.com/assets.00/open-book-icon-2048x2048-wuklhx59.png"
                style="width: 40px;" alt="Logo" title="MaBook">
            <as>MaBook</as>
        </div>
    </div>
    <div class="box-menu">
        <?php
        if ($_SESSION['master']) {
            ?>
            <a class="li opt nav-link active " href="<?= BASEURL ?>/Dashboard">Home</a>
            <a class="li opt nav-link active" href="<?= BASEURL ?>/Insert/register">Register</a>
            <a class="li opt nav-link active" href="<?= BASEURL ?>/Dashboard/item">Item</a>
            <a class="li opt nav-link active" href="<?= BASEURL ?>/logout">logout</a>
            <?php
        } else if ($_SESSION['admin']) {
            ?>
                <li class="li opt nav-link active"><a class="opt" href="<?= BASEURL ?>/Dashboard/item">Item</a></li>
                <li class="li opt nav-link active"><a class="opt" href="<?= BASEURL ?>/logout">Logout</a></li>
            <?php
        } else if ($_SESSION['user']) {
            ?>
                <a class="li opt nav-link active" href="<?= BASEURL ?>/logout">logout</a>
            <?php
        }
        ?>
    </div>
    <div class="upper">
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</nav>