<?php
require_once "Conexion.php";
class posteosModels extends Conexion
{

    //COUNT
    public static function count()
    {
        $conexion = self::sql();
        $stmt = $conexion->query('SELECT COUNT(*) AS total FROM posteos');
        return $stmt->fetch_assoc();
    }

    //SELECT ALL
    public static function selectAll()
    {
        $conexion = self::sql();
        return $conexion->query('SELECT* FROM posteos');
    }

    //INSERT
    public static function insert($imagen, $autor, $categoria, $titulo, $descripcion, $fecha)
    {
        $conexion = self::sql();
        return $conexion->query("INSERT INTO `posteos`(`Imagen`, `autor`, `categoria`, `titulo`, `descripcion`, `estado`, `fecha`) VALUES ('$imagen', '$autor', '$categoria', '$titulo', '$descripcion', 1, '$fecha')");
    }

    //UPDATE
    public static function update($id, $imagen, $categoria, $titulo, $descripcion, $estado)
    {
        $conexion = self::sql();
        return $conexion->query("UPDATE `posteos` SET `Imagen`='$imagen', `categoria`='$categoria', `titulo`='$titulo', `descripcion`='$descripcion', `estado`='$estado' WHERE id = $id");
    }

    //SELECT ID
    public static function selectId($id)
    {
        $conexion = self::sql();
        $stmt = $conexion->query("SELECT* FROM posteos WHERE id = $id");
        return $stmt->fetch_assoc();
    }

    //DELETE
    public static function deleteId($id)
    {
        $conexion = self::sql();
        return $conexion->query("DELETE FROM `posteos` WHERE id = $id");
    }
}
