<?php
class Logout_model
{
    public function signout()
    {
        $_SESSION['session_username'] = "";
        $_SESSION['session_password'] = "";
        session_destroy();
        $cookie_name = "cookie_username";
        $cookie_value = "";
        $time = time() - (60 * 60);
        setcookie($cookie_name, $cookie_value, $time, "/");

        $cookie_name = "cookie_password";
        $cookie_value = "";
        $time = time() - (60 * 60);
        setcookie($cookie_name, $cookie_value, $time, "/");
        $_SESSION['user'] = false;
        $_SESSION['master'] = false;
        $_SESSION['admin'] = false;
        header("Location: /UAS/public/home");
        exit();
    }
}
?>