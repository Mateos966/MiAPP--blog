<?php
namespace controller;
require_once "../modelos/usuariosModels.php";
use model\usuariosModels;
class usuariosController
{

    //SELECT ALL
    public static function selectAll()
    {
        $stmt = usuariosModels::selectAll();
        return $stmt;
    }

    //INSERT
    public function insert($nombre, $email, $password)
    {
        $stmt = usuariosModels::insert($nombre, $email, $password);
        header('location:usuarios.php?respuesta=ok');
    }

    //UPDATE
    public function update($id, $nombre, $email, $password, $estado, $rol)
    {
        usuariosModels::update($id, $nombre, $email, $password, $estado, $rol);
        header('location:usuarios.php?respuesta=ok');
    }

    //SELECT ID
    public static function selectId($id)
    {
        return usuariosModels::selectId($id);
    }

    //DELETE
    public function deleteId($id)
    {
        $stmt = usuariosModels::deleteId($id);
        header('location:usuarios.php?respuesta=ok');
    }
}
