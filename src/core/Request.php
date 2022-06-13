<?php

class Request
{
    /**
     * get the route path URI, with the optional fixes
     */
    public static function uri($pathPrefix = null)
    {
        $uri = $_SERVER['REQUEST_URI'];
        
        //optional
        if (!empty($pathPrefix)) {
            $uri = str_replace($pathPrefix, '', $uri);
        }
        $uri = trim($uri, '/');
        
        return $uri;
    }
}