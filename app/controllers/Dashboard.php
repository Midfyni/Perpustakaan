<?php

class Dashboard extends controller
{
    public function index()
    {
        if ($_SESSION['master'] || $_SESSION['admin']) {
            $data['title'] = "Dashboard admin";
            $data['tabel'] = $this->model('Master_model')->get_peminjaman();
            $this->model('Master_model')->get_peminjaman();
            $this->view('templates/header', $data);
            $this->view('templates/navigation', $data);
            $this->view('dashboard/index', $data);
            $this->view('templates/footer');
        } else if ($_SESSION['user']) {
            $data['title'] = "Dashboard item";
            $data['tabel'] = $this->model('Master_model')->get_buku();
            $this->view('templates/header', $data);
            $this->view('templates/navigation', $data);
            $this->view('dashboard/item', $data);
            $this->view('templates/footer');
        } else {
            header("Location: home");
        }
    }
    public function item()
    {
        if ($_SESSION['master'] || $_SESSION['admin']) {
            $data['title'] = "Dashboard item";
            $data['tabel'] = $this->model('Master_model')->get_buku();
            $this->view('templates/header', $data);
            $this->view('templates/navigation', $data);
            $this->view('dashboard/item', $data);
            $this->view('templates/footer');
        }
    }
    public function pdf(){
        if($_SESSION['master']){
            $this->model('create_pdf')->pdf();
        }
    }
}
?>