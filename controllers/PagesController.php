<?php

class PagesController
{

    public function home()
    {

        $tasks = $app['db']->selectAll('tasks');

        require 'views/index.view.php';
    }

    public function tasks()
    {
        $app['db']->insert('tasks', $_POST);

        header('Location: /');
    }

    public function about()
    {
        require 'views/about.view.php';
    }

    public function aboutCulture()
    {
        require 'views/about-culture.view.php';
    }

    public function contact()
    {

        $companyName = "My Company";
        require_once 'views/contact.view.php';
    }
}