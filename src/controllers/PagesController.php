<?php

class PagesController
{
    public function home()
    {
        // Receive the request.
        $users = App::get('database')->selectAll('users');

        return view('index', ['users' => $users]);

        //require '../views/index.view.php';

    }

    public function about()
    {
        $company = 'Laracasts';
        return view('about', ['company' => $company]);
    }

    public function contact()
    {
        return view('contact');

    }


}