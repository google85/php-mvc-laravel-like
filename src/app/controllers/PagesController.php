<?php

namespace App\Controllers;

class PagesController
{
    /**
     * Home page
     * 
     * @return mixed content of the page
     */
    public function home()
    {
        return view('index');
    }

    /**
     * About page
     * 
     * @return mixed content of the page
     */
    public function about()
    {
        $company = 'Laracasts';
        return view('about', ['company' => $company]);
    }

    /**
     * Contact page
     * 
     * @return mixed content of the page
     */
    public function contact()
    {
        return view('contact');

    }
}