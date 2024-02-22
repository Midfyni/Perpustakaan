<?php

class Delete_model extends controller
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function delete_item($id)
    {
        try {
            $this->db->query("DELETE FROM item WHERE `item`.`id_item` = $id");
            $this->db->execute();
            header("Location: /UAS/public/Dashboard/item/");
        } catch (Exception $e) {
            echo "<script language='javascript'>alert('Tidak dapat menghapus kolom terbatas: " . $e->getMessage() . "');</script>";

        }
        return null;
    }
    public function delete_peminjaman($id)
    {
        try {
            $this->db->query("DELETE FROM transaksi WHERE `transaksi`.`id_transaksi` = $id");
            $this->db->execute();
            header("Location: /UAS/public/Dashboard/");
            header("Location: /UAS/public/Dashboard/");
        } catch (Exception $e) {
            echo "<script language='javascript'>alert('Tidak dapat menghapus kolom terbatas: " . $e->getMessage() . "');</script>";

        }
        return null;
    }
}
?>