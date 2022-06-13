<?php

class Request
{
    /**
     * get the route path URI, with the optional fixes
     */
    public static function uri($pathPrefix = null)
    {
        //get only the URL path, without query strings
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        //$uri = $_SERVER['REQUEST_URI'];
        
        //optional
        if (!empty($pathPrefix)) {
            $uri = str_replace($pathPrefix, '', $uri);
        }
        $uri = trim($uri, '/');
        
        return $uri;
    }
    
    /**
     * get the request method
     * @return string GET|POST|...
     */
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}