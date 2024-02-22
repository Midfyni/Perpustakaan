<?php

class Update_model extends controller
{
    private $table = 'item';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function get_rowbuku($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_item=:id_item');
        $this->db->bind('id_item', $id);
        return $this->db->single();
    }
    public function get_rowpinjam($id)
    {
        $this->db->query('SELECT * FROM transaksi WHERE id_transaksi=:id_transaksi');
        $this->db->bind('id_transaksi', $id);
        return $this->db->single();
    }
    public function update_item($id)
    {
        $err='';
        if (isset($_POST['submit'])) {
            $id_item = $_POST['id_item'];
            $nama_buku = $_POST['nama_buku'];
            $harga = $_POST['harga'];
            $status = $_POST['status'];
            $kategori = $_POST['kategori'];
            if ($id_item == '' || $nama_buku == '' || $harga == ''  || $status == '' || $kategori == '') {
                $err .= "<li>Silakan masukkan id buku.</li>";
            } else {
                $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_item=:id_item');
                $this->db->bind('id_item', $id);
                $pgna = $this->db->single();
                if (!empty($pgna)) {
                    $this->db->query("UPDATE `item` SET `id_item` = '$id_item', `nama_buku` = '$nama_buku', `status` = '$status', `harga` = '$harga', `id_kategori` = '$kategori' WHERE `item`.`id_item` = $id;");
                    $this->db->execute();
                    header('Location /UAS/public/dashboard/item');
                    echo '<script>alert("update executed")</script>';
                } else {
                    $err .= "nilai pgna" . $this->db->single() . " sudah ada";
                }
                if (!empty($err)) {
                    echo "<script></script>";
                }
                return null;
            }
        }
        return null;
    }
    public function update_peminjaman($id)
    {
        $err='';
        if (isset($_POST['submit'])) {
            $id_item = $_POST['id_item'];
            $tanggal = $_POST['tanggal'];
            $banyak = $_POST['jumlah'];
            if ($id_item == '' || $tanggal == '' || $banyak == '') {
                $err .= "<li>Silakan masukkan id buku.</li>";
            } else {
                try{
                    $this->db->query("UPDATE `transaksi` SET `id_item` = '$id_item', `Tanggal` = '$tanggal', `jumlah` = '$banyak' WHERE `transaksi`.`id_transaksi` = $id;");
                    $this->db->execute();
                    header('Location /UAS/public/dashboard');
                    echo '<script>alert("Update \")</script>';
                }catch(Exception $e){
                    echo "<script language=javascript>alert('Terdapat error: '". $e->getMessage() .")</script>";
                }
            }
        }
        return null;
    }
}
?>