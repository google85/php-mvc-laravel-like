<?php

namespace App\Core;

class Router
{
    protected $routes = [
        'GET'=> [],
        'POST' => []
    ];
    
    /**
     * load route files into the router object
     * 
     * @param file $file
     * @return array $router
     */
    public static function load($file)
    {
        $router = new static;
        
        require $file;
        
        return $router; //for chaining purposes
    }
    
    /**
     * define GET routes
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }
    
    /**
     * define POST routes
     * 
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
    
    /**
     * direct the request to the respective controller's action
     * 
     * @param string $uri
     * @param string $requestType
     * @return mixed the call to the controller's action
     */
    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {

            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        
        throw new \Exception('No route defined for this URI.');
    }

    /**
     * call the action of the controller
     * 
     * @param string $controller
     * @param string $action
     * @return mixed the call to the controller's action
     */
    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;
        
        if(! method_exists($controller, $action)) {
            throw new \Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }
        return $controller->$action();
    }
}