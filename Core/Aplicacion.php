<?php

namespace  Core;
use Core\Routes;
use Core\Request;
use Core\Response;
use Core\Database;
use App\Models\User;
class Aplicacion{

    public Routes $routes;
    public Request $request;
    public Response $response;


    function __construct(){ 

        $this->request  = new Request();
        $this->response = new Response();
        //$this->routes   = new Routes($this->request,$this->response);
        $this->routes   = new Routes($this->request);
        $this->user     = new User();

    }
    
    // Correr la app
    public function run(){ 

        Database::conexion_db();
        $this->routes->ruteador($this->request->http(),$this->request->uri());
        $this->user->save();
             
    }

}

