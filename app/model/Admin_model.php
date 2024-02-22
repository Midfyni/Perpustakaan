<?php

class Admin_model
{
    private $table = 'user';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    public function get_user()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}