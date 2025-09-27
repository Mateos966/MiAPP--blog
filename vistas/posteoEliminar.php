<?php
require_once "../controladores/posteosController.php";

use controller\posteosController;

$id = $_GET['id'];
$stnt = new posteosController();
$stnt->deleteId($id);
