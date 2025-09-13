<?php
//MANEJO DE ERRORES
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../controladores/posteosController.php";

$categoria = $_POST ['categoria'];
$titulo = $_POST ['titulo'];
$descripcion = $_POST ['descripcion'];
$estado = $_POST ['estado'];
$id = $_POST ['id'];

$editar = new posteosController();
$editar->update($id, $categoria, $titulo, $descripcion, $estado);