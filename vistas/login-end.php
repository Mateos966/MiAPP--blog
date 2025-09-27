<?php
require_once '../controladores/LoginController.php';

use controller\LoginController;

if (empty($_POST['email'])  || empty($_POST['password'])) {

    header('location:../index.php');
} else {

    $stmt = new LoginController();
    $stmt->login($_POST['email'], $_POST['password']);
}
