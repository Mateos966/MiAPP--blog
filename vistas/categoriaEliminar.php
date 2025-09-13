<?php
require_once "../controladores/categoriasController.php";

$id = $_GET['id'];
$stnt = new categoriasController();
$stnt->deleteId($id);
