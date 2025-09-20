<?php
//MANEJO DE ERRORES
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../controladores/posteosController.php";

// Procesar imagen
if (isset($_FILES['Imagen']) && $_FILES['Imagen']['error'] == 0) {
    $imagen = $_FILES['Imagen']['name'];
    $rutaDestino = __DIR__ . "/dist/img/posteos/" . $imagen;
    move_uploaded_file($_FILES['Imagen']['tmp_name'], $rutaDestino);
} else {
    // Si no se sube nueva imagen, mantener la actual
    $imagen = $_POST['imagen_actual'];
}
$categoria = $_POST ['categoria'];
$titulo = $_POST ['titulo'];
$descripcion = $_POST ['descripcion'];
$estado = $_POST ['estado'];
$id = $_POST ['id'];

$editar = new posteosController();
$editar->update($id, $imagen, $categoria, $titulo, $descripcion, $estado);