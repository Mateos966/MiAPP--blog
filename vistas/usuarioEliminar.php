<?php
require_once "../controladores/usuariosController.php";

use controller\usuariosController;

$id = $_GET['id'];
$stnt = new usuariosController();
$stnt->deleteId($id);
