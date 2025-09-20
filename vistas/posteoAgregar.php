<?php
require_once '../controladores/posteosController.php';

if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
    $imagen = $_FILES['imagen']['name'];
    $rutaDestino = __DIR__ . "/dist/img/posteos/" . $imagen;
    echo "<pre>";
    print_r($_FILES['imagen']);
    echo "Ruta destino: $rutaDestino";
    echo "</pre>";
    if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
        echo "Error al mover el archivo.";
    }
} else {
    $imagen = "";
}
$autor = $_POST['autor'];
$categoria = $_POST['categoria'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];

$stmt = new posteosController();
$stmt->insert($imagen, $autor, $categoria, $titulo, $descripcion, $fecha);
