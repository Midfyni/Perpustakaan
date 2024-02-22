<?php 
class logout extends controller
{
    public function index()
    {
        $data['status'] = $this->model('Logout_model')->signout();       
    }
}
?>