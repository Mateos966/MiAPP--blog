<?php
require_once '../controladores/usuariosController.php';

use controller\usuariosController;

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];


$stmt = new usuariosController();
$stmt->insert($nombre, $email, $password);