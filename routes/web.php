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

Route::get('/', function () {
    return view('welcome');
});

/*
    GET     /projects           (index)
    GET     /projects/create    (create)
    GET     /projects/1         (show)
    POST    /projects           (store)
    GET     /projects/1/edit    (edit)
    PUT     
    PATCH   /projects/1         (update)
    DELETE  /projects/1         (destroy)
*/

Route::resource('projects', 'ProjectsController');
/* 
Route::get('/projects', 'ProjectsController@index');                // INDEX
Route::get('/projects/create', 'ProjectsController@create');        // STORE
Route::get('/projects/{projects}', 'ProjectsController@show');      // SHOW
Route::post('/projects', 'ProjectsController@store');               // CREATE
Route::get('/projects/{project}/edit', 'ProjectsController@edit');  // EDIT
Route::patch('/projects/{project}', 'ProjectsController@update');   // UPDATE
Route::delete('/projects/{project}', 'ProjectsController@destroy'); // DESTROY */

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');
