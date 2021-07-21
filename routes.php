<?php


$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('about/culture', 'PagesController@aboutCulture');
$router->get('contact', 'PagesController@contact');

$router->post('tasks', 'PagesController@tasks');


$router->get('books', 'BooksController@index');
$router->get('books/delete', 'BooksController@destroy');
$router->get('books/create', 'BooksController@create');
$router->post('books', 'BooksController@store');
$router->get('books/edit', 'BooksController@edit');
$router->post('books/update', 'BooksController@update');
