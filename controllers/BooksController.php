<?php
namespace App\Controllers;

use App\Core\App;

class BooksController {


    public function index()
    {
        $books = App::get('db')->selectAll('books');

        return view('books-index', compact('books'));
    }


    public function destroy()
    {
        App::get('db')->delete('books', $_GET['id']);

        return redirect('/books');
    }
}