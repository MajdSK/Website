<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('MainPage');
});
Route::view('/projectsPage' , 'projectsPage');
Route::view('/CVpage' , 'CVpage');
Route::view('/ContactsPage' , 'ContactsPage');
Route::view('/Cal' , 'Cal');
Route::view("/training/advancedFunctions" , 'training/advancedFunctions');
Route::view("/training/toDoList" , 'training/toDoList');
Route::view("/training/rpsGame" , 'training/rpsGame');