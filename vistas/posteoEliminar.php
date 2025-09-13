<?php
require_once "../controladores/posteosController.php";

$id = $_GET['id'];
$stnt = new posteosController();
$stnt->deleteId($id);
