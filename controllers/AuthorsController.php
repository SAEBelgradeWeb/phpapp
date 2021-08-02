<?php

namespace App\Controllers;

use App\Core\App;

class AuthorsController
{
    /**
     * List all books
     */

    public function index()
    {
        $authors = App::get('db')->selectAll('authors');


        return view('authors-index', compact('authors'));
    }

    public function create()
    {

        return view('authors-create');
    }

    public function store()
    {
        //TODO: Do some validation and sanitization before storing
        $author = $_POST;

        $author = $this->uploadImage($author);


        App::get('db')->insert('authors', $author);

        return redirect('/authors');
    }

    public function edit()
    {
        $author = App::get('db')->select('authors', $_GET);


        return view('authors-edit', compact('author'));
    }


    public function update()
    {
        //TODO: Do some validation and sanitization before storing

        $author = $_POST;


        if ($_FILES['image']) {

            $author = $author->uploadImage($author);

            $oldAuthor = App::get('db')->select('authors', ['id' => $author['id']]);
            unlink(getcwd() . '/images/' . $oldAuthor->image);

        }

        App::get('db')->update('authors', $author);

        return redirect('/authors');
    }

    public function destroy()
    {
        //TODO: Ask user are they sure before delete

        $oldAuthor = App::get('db')->select('authors', ['id' => $_GET['id']]);

        if ($oldAuthor->image) {
            $path = getcwd() . '/images/';
            unlink($path . $oldAuthor->image);
        }

        App::get('db')->delete('authors', $_GET);

        return redirect('/authors');
    }

    /**
     * @param array $author
     * @return array
     */
    public function uploadImage(array $author)
    {
        $name = time() . '_' . $_FILES['image']['name'];

        $path = getcwd() . '/images/';


        move_uploaded_file($_FILES['image']['tmp_name'], $path . $name);;


        $author['image'] = $name;
        return $author;
    }

}