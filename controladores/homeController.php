<?php
require_once "../modelos/categoriasModels.php";
class homeController
{
    //COUNT CATEGORIAS
    public static function countCategorias()
    {
        return categoriasModels::count();
    }
}
