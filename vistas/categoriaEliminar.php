<?php
require_once "../controladores/categoriasController.php";

use controller\categoriasController;

$id = $_GET['id'];
$stnt = new categoriasController();
$stnt->deleteId($id);
