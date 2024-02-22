<?php
if ($_SESSION['master'] || $_SESSION['admin'] || $_SESSION['user']) {
    echo '<script language=javascript>alert("Anda sudah login")</script>';
    header("Location: home");
} else {
    ?>
    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

        <div class="rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background-image: linear-gradient(#0575E6, #021B79) !important;
                ">
            <div class="featured-image">
                <img src="https://id-everbestshoes-cdn.ascentismedia.com/SharedImages/Public/files/BLOG/2021/Motif%20Batik%20Populer/4%20batik%20kawung.png"
                    class="rounded-4" style="width:897px;height:250px;">
            </div>
        </div>
        <!-------------------- ------ Right Box ---------------------------->
            <form action="<?= BASEURL;?>/login" method="post">
                <div class="col-md-12 right-box text-center">
                    <div class="row align-items-center">
                        <div class="header-text mb-3">
                            <p>Silahkan Login</p>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="user" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Username">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" name="pass" class="form-control form-control-lg bg-light fs-6"
                                placeholder="Password">
                        </div>
                        <div class="input-group mb-4 mt-1 d-flex justify-content-between" style="display: none!important;">
                            <div class="form-check">
                                <input type="checkbox" name="ingataku" class="form-check-input" id="formCheck"
                                    onclick="this.value=this.checked?1:0">
                                <label for="formCheck" class="form-check-label text-secondary">
                                    <small>I Agree All Term Of Policy</small>
                                </label>
                            </div>
                        </div>
                        <div class="input-group mb-3 justify-content-center text-center mt-3">
                            <button class="btn btn-lg btn-primary fs-6 w-100" style="display: flex; justify-content: center;align-items: center" type="submit" name="submit">submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
}
?>