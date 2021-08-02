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


$router->get('authors', 'AuthorsController@index');
$router->get('authors/delete', 'AuthorsController@destroy');
$router->get('authors/create', 'AuthorsController@create');
$router->post('authors', 'AuthorsController@store');
$router->get('authors/edit', 'AuthorsController@edit');
$router->post('authors/update', 'AuthorsController@update');

$router->get('register', 'AuthController@showRegistrationForm');
$router->post('register', 'AuthController@register');

$router->get('login', 'AuthController@showLoginForm');
$router->post('login', 'AuthController@login');

$router->get('logout', 'AuthController@logout');



/**
 *
 * API ROUTES
 */

$router->get('api/books', 'ApiBooksController@index');