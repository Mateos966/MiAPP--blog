<?php
require_once 'Conexion.php';

class LoginModel extends Conexion
{
    //LOGIN
    public static function login($email, $password)
    {
        $cnx  = self::sql();
        $stmt = $cnx->query("SELECT * FROM usuarios WHERE email = '$email'");
        return $stmt->fetch_assoc();
    }
}
