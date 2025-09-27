<?php
require_once '../controladores/categoriasController.php';

use controller\categoriasController;

$categoria = $_POST['categoria'];

$stmt = new CategoriasController();
$stmt->insert($categoria);