<?php
require_once "../controladores/categoriasController.php";

$categoria = $_POST ['categoria'];
$estado = $_POST ['estado'];
$id = $_POST ['id'];

$editar = new categoriasController();
$editar->update($id, $categoria, $estado);