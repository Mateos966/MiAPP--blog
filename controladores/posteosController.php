<?php
require_once "../modelos/posteosModels.php";
class posteosController
{

    //SELECT ALL
    public static function selectAll()
    {
        $stmt = posteosModels::selectAll();
        return $stmt;
    }

    //INSERT
    public function insert($imagen, $autor, $categoria, $titulo, $descripcion, $fecha)
    {
        $stmt = posteosModels::insert($imagen, $autor, $categoria, $titulo, $descripcion, $fecha);
        header('location:posteos.php?respuesta=ok');
    }

    //UPDATE
    public function update($id, $imagen, $categoria, $titulo, $descripcion, $estado)
    {
        posteosModels::update($id, $imagen, $categoria, $titulo, $descripcion, $estado);
        header('location:posteos.php?respuesta=ok');
    }

    //SELECT ID
    public static function selectId($id)
    {
        return posteosModels::selectId($id);
    }

    //DELETE
    public function deleteId($id)
    {
        $stmt = posteosModels::deleteId($id);
        header('location:posteos.php?respuesta=ok');
    }
}
