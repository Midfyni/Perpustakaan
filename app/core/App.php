<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $parameter = [];


    public function __construct()
    {
        $url = $this->parseURL();
        //controller
        if (isset($url)) {
            if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            }
            else{
                echo '<script language=javascript>alert("ini adalah nilai url 0 = ' . $url[0] . '")</script>';
            }
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        //parameter
        if (!empty($url)) {
            $this->parameter = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method], $this->parameter);
    }
    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}