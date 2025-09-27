<?php

namespace model;

use mysqli;

class Conexion
{
    //SQL
    public static function sql()
    {
        return new mysqli('localhost', 'root', '', 'blog');
    }
}
