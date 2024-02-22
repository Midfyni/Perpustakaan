<?php

class Insert extends controller
{
    public function index()
    {
        echo '<script language=javascript>alert("Tabel tidak tersedia")</script>';
    }
    public function register()
    {
        if ($_SESSION['master']) {
            $data['title'] = "Register";
            //$data['buku'] = $this->model('Master_model')->get_buku();
            //$data['kategori'] = $this->model('Master_model')->get_kategori();
            $this->model('Insert_model')->insert_register();
            $this->view('templates/header', $data);
            $this->view('templates/navigation', $data);
            $this->view('insert/Register', $data);
            $this->view('templates/footer');
        }
    }
    public function item()
    {
        if ($_SESSION['master'] || $_SESSION['admin']) {
            $data['title'] = "Insert item";
            $data['buku'] = $this->model('Master_model')->get_buku();
            $data['kategori'] = $this->model('Master_model')->get_kategori();
            $this->model('Insert_model')->insert_item();
            $this->view('templates/header', $data);
            $this->view('templates/navigation', $data);
            $this->view('insert/item', $data);
            $this->view('templates/footer');
        }else{
            echo "<script language=javascript>alert('Anda tidak memiliki akses')</script>";
        }
    }
    public function peminjaman()
    {
        if ($_SESSION['master'] || $_SESSION['admin']) {
            $data['title'] = "Insert Transaksi";
            $data['peminjaman'] = $this->model('Master_model')->get_peminjaman();
            $data['buku'] = $this->model('Master_model')->get_buku();
            $this->model('Insert_model')->insert_transaksi();
            $this->view('templates/header', $data);
            $this->view('templates/navigation', $data);
            $this->view('insert/peminjaman', $data);
            $this->view('templates/footer');
        }else{
            echo "<script language=javascript>alert('Anda tidak memiliki akses')</script>";
        }
    }
}
?>