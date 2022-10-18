<?php

namespace Core;

class View {



    public static function renderTemplate($url,$parametros){

        $loader = new \Twig\Loader\FilesystemLoader('../App/Views');
        $twig = new \Twig\Environment($loader);

        echo $twig->render($url,$parametros);

    }
}