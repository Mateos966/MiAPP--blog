<?php
//MANEJO DE ERRORES
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use controller\usuariosController;

require_once "../controladores/usuariosController.php";

$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$estado = $_POST ['estado'];
$rol = $_POST ['rol'];
$id = $_POST ['id'];

$editar = new usuariosController();
$editar->update($id, $nombre, $email, $password, $estado, $rol);