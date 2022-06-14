<?php

class Router
{
    protected $routes = [
        'GET'=> [],
        'POST' => []
    ];
    
    /**
     * load route files
     */
    public static function load($file)
    {
        $router = new static;
        
        require $file;
        
        return $router; //for chaining purposes
    }
    
    /**
     * define GET routes
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }
    
    /**
     * define POST routes
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {

            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        
        throw new Exception('No route defined for this URI.');
    }

    /**
     * call the action of the controller
     */
    protected function callAction($controller, $action)
    {
        $controller = new $controller;
        if(! method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }
        return $controller->$action();
    }
}