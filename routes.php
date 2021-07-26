<?php


$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('about/culture', 'PagesController@aboutCulture');
$router->get('contact', 'PagesController@contact');

$router->post('tasks', 'PagesController@tasks');


$router->get('books', 'BooksController@index', 'auth');
$router->get('books/delete', 'BooksController@destroy', 'auth');
$router->get('books/create', 'BooksController@create', 'auth');
$router->post('books', 'BooksController@store', 'auth');
$router->get('books/edit', 'BooksController@edit', 'auth');
$router->post('books/update', 'BooksController@update', 'auth');

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