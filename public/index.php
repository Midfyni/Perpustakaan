<?php
session_start();
if(!isset($_SESSION['user'])){
    $_SESSION['user'] = false;
}
if(!isset($_SESSION['master'])){
    $_SESSION['master'] = false;
}
if(!isset($_SESSION['admin'])){
    $_SESSION['admin'] = false;
}
require_once '../app/init.php';

$app = new App;