<?php

class Master_model
{
    private $table = 'peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function get_peminjaman()
    {
        $this->db->query('SELECT * FROM transaksi INNER JOIN item on transaksi.id_item = item.id_item');
        return $this->db->resultSet();
    }
    public function get_buku()
    {
        $this->db->query('SELECT * FROM item INNER JOIN kategori ON item.id_kategori = kategori.id_kategori');
        return $this->db->resultSet();
    }
    public function get_kategori()
    {
        $this->db->query('SELECT * FROM kategori');
        return $this->db->resultSet();
    }
}