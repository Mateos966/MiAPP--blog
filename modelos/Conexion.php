<?php

class Conexion
{
    //SQL
    public static function sql()
    {
        return new mysqli('localhost', 'root', '', 'blog');
    }
}
