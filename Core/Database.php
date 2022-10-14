<?php

namespace Core;

use RedBeanPHP\R;

class Database {

    public static function conexion_db()
    {
        R::setup('mysql:host=localhost;dbname=training', 'sammy', 'P3r12345#');
    }
       

}

