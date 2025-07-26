<?php
//this file is for routing configuration
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todolist', function () {
    $todolist = [
        ['id' => 1, 'name' => 'Buy groceries', 'completed' => false],
        ['id' => 2, 'name' => 'Clean the house', 'completed' => true],
        ['id' => 3, 'name' => 'Finish project', 'completed' => false],
    ];
    return view('todolist.index', ["greeting" => "Welcome to the To Do List", "todolist" => $todolist]);
});

Route::get('/todolist/create', function () {
    return view('todolist.create');
});

Route::get('/todolist/{id}', function ($id) {
    $todolist = [
        ['id' => 1, 'name' => 'Buy groceries', 'completed' => false],
        ['id' => 2, 'name' => 'Clean the house', 'completed' => true],
        ['id' => 3, 'name' => 'Finish project', 'completed' => false],
    ];
    return view('todolist.show', ["id" => $id]);
});