<?php

namespace App\Controllers;
use RedBeanPHP\R;

class Home {

    public function index($param){ 
        
        echo "Esto es el indice";
        echo $param['id'];
        $post=R::load('post',$param['id']);
        echo $post;
    }
}