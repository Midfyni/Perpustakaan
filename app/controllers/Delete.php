<?php

class Delete extends controller
{
    public function index()
    {

        $data['title'] = "login";
        $data['status'] = $this->model('Login_model')->signin();
        $this->view('templates/header', $data);
        $this->view('login/index', $data);
        $this->view('templates/footer');
    }
    public function account_profile()
    {
        if ($_SESSION['master']) {

        } else if ($_SESSION['user']) {

        }
    }
    public function item($id)
    {
        if ($_SESSION['master'] || $_SESSION['admin']) {
            if (!empty($id)) {
                $this->model('Delete_model')->delete_item($id);
            } else {
                echo "<script language=javascript>alert('masukkan id tabel')</script>";
            }
        } else {
            echo '<script language=javascript>alert("Anda tidak memiliki akses")</script>';
        }
    }
    public function peminjaman($id)
    {
        if ($_SESSION['master'] || $_SESSION['admin']) {
            if (!empty($id)) {
                $this->model('Delete_model')->delete_peminjaman($id);
            } else {
                echo "<script language=javascript>alert('masukkan id tabel')</script>";
            }
        } else {
            echo '<script language=javascript>alert("Anda tidak memiliki akses")</script>';
        }

    }
}
?>