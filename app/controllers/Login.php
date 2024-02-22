<?php

class login extends controller
{
    public function index()
    {
        if ($_SESSION['master'] || $_SESSION['admin'] || $_SESSION['user']) {
            echo '<script language=javascript>alert("Anda sudah login")</script>';
            header("Location: home");
        } else {
            $data['title'] = "login";
            $data['status'] = $this->model('Login_model')->signin();
            $this->view('templates/header', $data);
            $this->view('login/index', $data);
            $this->view('templates/footer');
        }
    }
}
?>