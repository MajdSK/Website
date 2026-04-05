<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\AuthorizationController;
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
Route::view("/training/toDoList" , 'training.toDoList');
Route::view("/training/rpsGame" , 'training.rpsGame');

Route::middleware('auth')->group(function () {
    Route::get("ContactsPage" , [MessageController::class, 'index']);
    Route::post("ContactsPage", [MessageController::class, "store"]);
    Route::delete("/ContactsPage", [MessageController::class, "destroy"]);
    Route::patch("/editmessages/{text}", [MessageController::class, "update"])->can('edit', 'text');
    Route::get("/editmessages/{text}",[MessageController::class, 'edit'])->can('edit', 'text');
    Route::get("/ContactsPage/search",[MessageController::class, 'search']);
    Route::delete("/ContactsPage/del", [MessageController::class, "destroySingle"]);
    
});

Route::middleware('guest')->group(function () {
    Route::get("/SignUp", [AuthorizationController::class, 'create']);
    Route::post("/SignUp", [AuthorizationController::class, 'store']);
    Route::get("/LogIn", [AuthorizationController::class, 'index']);
    Route::post("/LogIn", [AuthorizationController::class, 'show']);
});

Route::get("/LogOut", [AuthorizationController::class, 'update']);