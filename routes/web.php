<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'postsController@index');

Route::get('/posts/create', 'postsController@create');
// Route::get('/posts/{post}', 'postsController@show');

Route::post('/posts', 'postsController@store');
// GET /posts
// GET /posts/{id}
// GET /posts/create
// POST /posts
// GET /posts/{id}/edit
// PATCH /posts/{id}
// DELETE /posts/{id}