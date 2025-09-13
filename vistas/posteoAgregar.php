<?php
require_once '../controladores/posteosController.php';

$autor = $_POST['autor'];
$categoria = $_POST['categoria'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];

$stmt = new posteosController();
$stmt->insert($autor, $categoria, $titulo, $descripcion, $fecha);