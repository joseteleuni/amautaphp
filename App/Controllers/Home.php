<?php

namespace App\Controllers;
use RedBeanPHP\R;
use App\Models\User;

class Home {

    public function index($param){ 
        
        echo "Esto es el indice";
        echo $param['id'];
        /*
        $user = User::orm();
        $user->name="Pedro";
        R::store($user);
        */
        
        $x = R::load('users',[1,2]);
        R::trash($x);



        //$post=R::load('',1);
        //echo $post->nombre;
    }
}