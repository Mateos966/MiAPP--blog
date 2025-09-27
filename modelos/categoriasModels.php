<?php
namespace model;
require_once "Conexion.php";
use model\Conexion;
class categoriasModels extends Conexion
{

    //COUNT
    public static function count()
    {
        $conexion = self::sql();
        $stmt = $conexion->query('SELECT COUNT(*) AS total FROM categorias');
        return $stmt->fetch_assoc();
    }

    //SELECT ALL
    public static function selectAll()
    {
        $conexion = self::sql();
        return $conexion->query('SELECT* FROM categorias');
    }

    //INSERT
    public static function insert($categoria)
    {
        $conexion = self::sql();
        return $conexion->query("INSERT INTO `categorias`( `categoria`, `estado`) VALUES ('$categoria',1)");
    }

    //UPDATE
    public static function update($id, $categoria, $estado)
    {
        $conexion = self::sql();
        return $conexion->query("UPDATE `categorias` SET `categoria`='$categoria', `estado`='$estado' WHERE id = $id");
    }

    //SELECT ID
    public static function selectId($id)
    {
        $conexion = self::sql();
        $stmt = $conexion->query("SELECT* FROM categorias WHERE id = $id");
        return $stmt->fetch_assoc();
    }

    //DELETE
    public static function deleteId($id)
    {
        $conexion = self::sql();
        return $conexion->query("DELETE FROM `categorias` WHERE id = $id");
    }
}
