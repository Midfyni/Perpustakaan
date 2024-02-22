<?php

class Home extends controller{
    public function index(){
        $data['title'] = "halaman index"; 
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}