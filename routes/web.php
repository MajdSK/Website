<?php

use App\Http\Controllers\MessageController;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Models\text;

Route::get('/', function () {
    return view('MainPage');
});
Route::view('/projectsPage' , 'projectsPage');
Route::view('/CVpage' , 'CVpage');

Route::view('/Cal' , 'Cal');
Route::view("/training/toDoList" , 'training/toDoList');
Route::view("/training/rpsGame" , 'training/rpsGame');


    Route::get("ContactsPage" , [MessageController::class, 'index']);
    Route::post("ContactsPage", [MessageController::class, "store"]);
    Route::delete("/ContactsPage", [MessageController::class, "destroy"]);
    Route::patch("/editmessages/{text}", [MessageController::class, "update"]);
    Route::get("/editmessages/{text}",[MessageController::class, 'edit']);
    Route::get("/ContactsPage/search",[MessageController::class, 'search']);