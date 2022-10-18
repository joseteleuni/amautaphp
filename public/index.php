<?php

require '../vendor/autoload.php';
use Core\Aplicacion;

$app = new Aplicacion();
$app->routes->get('/home/{id}',['Home','index']);
$app->routes->get('/alumnos/editar/{id}',['Alumnos','editar']);
$app->routes->get('/alumnos/listar',['Alumnos','listar']);

$app->run();











