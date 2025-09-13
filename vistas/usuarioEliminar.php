<?php
require_once "../controladores/usuariosController.php";

$id = $_GET['id'];
$stnt = new usuariosController();
$stnt->deleteId($id);
