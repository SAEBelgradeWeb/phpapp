<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{

    public function home()
    {

        $tasks = App::get('db')->selectAll('tasks');

        return view('index', compact('tasks'));
    }

    public function tasks()
    {
        App::get('db')->insert('tasks', $_POST);

        return redirect('/');
    }

    public function about()
    {
        return view('about');
    }

    public function aboutCulture()
    {
        return view('about-culture');
    }

    public function contact()
    {

        $companyName = "My Company";
        return view('contact', compact('companyName'));
    }
}