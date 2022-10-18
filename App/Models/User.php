<?php


namespace App\Models;

use RedBeanPHP\R;

class User extends R  

{
   

    public static function orm(){
         return R::dispense('users');
    }

}

