<?php
require_once "Conexion.php";
class usuariosModels extends Conexion
{

    //COUNT
    public static function count()
    {
        $conexion = self::sql();
        $stmt = $conexion->query('SELECT COUNT(*) AS total FROM usuarios');
        return $stmt->fetch_assoc();
    }

    //SELECT ALL
    public static function selectAll()
    {
        $conexion = self::sql();
        return $conexion->query('SELECT* FROM usuarios');
    }

    //INSERT
    public static function insert($nombre, $email, $password)
    {
        $conexion = self::sql();
        return $conexion->query("INSERT INTO `usuarios`(`nombre`, `email`, `password`, `estado`, `rol`) VALUES ('$nombre', '$email', '$password', 1, 1)");
    }

    //UPDATE
    public static function update($id, $nombre, $email, $password, $estado, $rol)
    {
        $conexion = self::sql();
        return $conexion->query("UPDATE `usuarios` SET `nombre`='$nombre', `email`='$email', `password`='$password', `estado`='$estado', `rol`='$rol' WHERE id = $id");
    }

    //SELECT ID
    public static function selectId($id)
    {
        $conexion = self::sql();
        $stmt = $conexion->query("SELECT* FROM usuarios WHERE id = $id");
        return $stmt->fetch_assoc();
    }

    //DELETE
    public static function deleteId($id)
    {
        $conexion = self::sql();
        return $conexion->query("DELETE FROM `usuarios` WHERE id = $id");
    }
}
