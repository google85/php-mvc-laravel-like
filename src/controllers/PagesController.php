<?php

class PagesController
{
    public function home()
    {
        // Receive the request.
        $users = App::get('database')->selectAll('users');

        require '../views/index.view.php';

        // Delegate.
        
        // Return a response.

    }

    public function about()
    {

        require '../views/about.view.php';


    }

    public function contact()
    {
        require '../views/contact.view.php';

    }


}