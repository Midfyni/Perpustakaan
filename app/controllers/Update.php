<?php

class Update extends controller
{
    public function index()
    {
        echo "<script language=javascript>alert('Tabel tidak ada')</script>";
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
                $data['title'] = "Update item";
                $data['buku'] = $this->model('Update_model')->get_rowbuku($id);
                $data['book'] = $this->model('Master_model')->get_buku();
                $data['kategori'] = $this->model('Master_model')->get_kategori();
                $this->model('Update_model')->update_item($id);
                $this->view('templates/header', $data);
                $this->view('templates/navigation', $data);
                $this->view('update/item', $data);
                $this->view('templates/footer');
            }else{
                echo "<script language=javascript>alert('Masukkan id table')</script>";   
            }
        } else {
            echo "<script language=javascript>alert('anda tidak memiliki akses')</script>";
        }
    }
    public function peminjaman($id)
    {
        if ($_SESSION['master'] || $_SESSION['admin']) {
            if (!empty($id)) {
                $data['title'] = "Update Transaksi";
                $data['single'] = $this->model('Update_model')->get_rowpinjam($id);
                $data['multi'] = $this->model('Master_model')->get_peminjaman();
                $data['buku'] = $this->model('Master_model')->get_buku();
                $this->model('Update_model')->update_peminjaman($id);
                $this->view('templates/header', $data);
                $this->view('templates/navigation', $data);
                $this->view('update/peminjaman', $data);
                $this->view('templates/footer');
            }else{
                echo "<script language=javascript>alert('Masukkan id table')</script>";   
            }
        } else {
            echo "<script language=javascript>alert('anda tidak memiliki akses')</script>";
        }
    }
}
?>