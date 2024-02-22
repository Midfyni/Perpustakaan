<?php 

class Admin extends controller{
    public function index(){
        $data['title'] = "login";
        $this->view('templates/header', $data);
        $this->view('templates/navigation', $data);
        $this->view('Admin/index', $data);
        $this->view('templates/footer');
    }
}