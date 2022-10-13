<?php

namespace Core;

class Request {



    
    // Fetch method and URI from somewhere
    public function http(){ 
        $httpMethod = $_SERVER['REQUEST_METHOD'];

        return $httpMethod;
    }
    


    public function uri(){

        $uri = $_SERVER['REQUEST_URI'];

        // Strip query string (?foo=bar) and decode URI
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);

        return $uri;

    }
    
    
}