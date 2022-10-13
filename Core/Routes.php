<?php

namespace Core;

class Routes {


    /**
     * @param  string $metodo  : Metodo GET o POST
     * @param  string $ruta    : Ruta de la URL
     * @param  string $handler : funcion a aplicar al eligir una ruta.
     * 
     * @return void
     */

    public Request $request;
    public Response $response;
      
    
    function __construct(Request $request){ 
    
        $this->request = $request;
        //$this->response = $response;

    }
    
    
    public function get($ruta , $parametros=[]){ 

        $this->array_url[$ruta] = $parametros;
    }



    public function ruteador($httpMetodo,$uri){

        $dispatcher = \FastRoute\simpleDispatcher(function(\FastRoute\RouteCollector $r) 
        {
            foreach($this->array_url as $ruta => $parametros)
            { 
                $r->addRoute('GET',$ruta,$parametros);
            }
            
            
        });
    
    
        $routeInfo = $dispatcher->dispatch($httpMetodo,$uri);
        switch ($routeInfo[0]) {
            case \FastRoute\Dispatcher::NOT_FOUND:
                
                echo "Ruta no encontrada ..";
                break;
            case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = $routeInfo[1];
                // ... 405 Method Not Allowed
                break;
            case \FastRoute\Dispatcher::FOUND:
                $handler = $routeInfo[1];
                $vars = $routeInfo[2];
                
                $clase = "App\\Controllers\\".$handler[0];
                $metodo = $handler[1];
                $x = new $clase;
                $x->$metodo();
                
                break;
        }


    }

    

}
