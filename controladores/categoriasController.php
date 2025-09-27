<?php
namespace controller;
require_once "../modelos/categoriasModels.php";
use model\categoriasModels;
class categoriasController
{

    //SELECT ALL
    public static function selectAll()
    {
        $stmt = categoriasModels::selectAll();
        return $stmt;
    }

    //INSERT
    public function insert($categoria)
    {
        $stmt = categoriasModels::insert($categoria);
        header('location:categorias.php?respuesta=ok');
    }

    //UPDATE
    public function update($id, $categoria, $estado)
    {
        categoriasModels::update($id, $categoria, $estado);
        header('location:categorias.php?respuesta=ok');
    }

    //SELECT ID
    public static function selectId($id)
    {
        return categoriasModels::selectId($id);
    }

    //DELETE
    public function deleteId($id)
    {
        $stmt = categoriasModels::deleteId($id);
        header('location:categorias.php?respuesta=ok');
    }
}
