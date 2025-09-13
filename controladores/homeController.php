<?php
require_once "../modelos/categoriasModels.php";
require_once "../modelos/usuariosModels.php";
require_once "../modelos/posteosModels.php";

class homeController
{
    //COUNT CATEGORIAS
    public static function countCategorias()
    {
        return categoriasModels::count();
    }

     //COUNT USUARIOS
    public static function countUsuarios()
    {
        return usuariosModels::count();
    }

    //COUNT POSTS
    public static function countPosteos()
    {
        return posteosModels::count();
    }
}
