<?php

require 'vendor/autoload.php';
use Core\Aplicacion;

$app = new Aplicacion();
$app->routes->get('/home',['Home','index']);
$app->routes->get('/alumnos/editar',['Alumnos','editar']);
$app->routes->get('/alumnos/listar',['Alumnos','listar']);
$app->run();










