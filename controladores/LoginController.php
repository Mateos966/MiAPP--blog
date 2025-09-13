<?php
require_once '../modelos/LoginModel.php';

class LoginController
{

    //LOGIN
    public function login($email, $password)
    {

        $respuesta = LoginModel::login($email, $password);

        if ($respuesta  && $respuesta['password'] == $password) {

            session_start();
            $_SESSION['usuario'] = $respuesta['email'];

            header('location:home.php');
        } else {
            header('location:../index.php?repuesta=error');
        }
    }
}
