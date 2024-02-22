<?php

class User_model
{
    private $table = 'peminjaman';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function get_peminjaman()
    {
        $this->db->query('SELECT * FROM peminjaman INNER JOIN item ON peminjaman.id_buku = item.id_buku INNER JOIN kategori ON item.id_kategori = kategori.id_kategori');
        return $this->db->resultSet();
    }
}