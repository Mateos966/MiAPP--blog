<?php
require_once '../controladores/categoriasController.php';

$categoria = $_POST['categoria'];

$stmt = new CategoriasController();
$stmt->insert($categoria);