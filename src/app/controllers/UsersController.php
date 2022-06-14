<?php

namespace App\Controllers;
use App\Core\App;

class UsersController
{
    /**
     * get all users from the database
     * 
     * @return mixed content of the page
     */
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        return view('users', compact('users'));
    }

    /**
     * insert a user into the database
     * 
     * @return header redirect
     */
    public function store()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);

        return redirect('users');
    }
}