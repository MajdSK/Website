<?php

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Http\Request as IlluminateHttpRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('MainPage');
});
Route::view('/projectsPage' , 'projectsPage');
Route::view('/CVpage' , 'CVpage');
Route::get('/ContactsPage' , function() {
    $ContactsPageData = session()->get('text',[]);
    return view('ContactsPage', [
        "text" => $ContactsPageData 
    ]);
    });
Route::post('/ContactsPage', function(){
    $ContactsPageData = request('text');
    session()->push("text" , $ContactsPageData);
    return redirect("/ContactsPage");
    //$ContactsPage = Request::input('ContactsPage');
    //$request->input('ContactsPage');
});
Route::get("/delOldMessages",function(){
    session()->forget('text');
    return redirect("/ContactsPage");
});
Route::view('/Cal' , 'Cal');
Route::view("/training/toDoList" , 'training/toDoList');
Route::view("/training/rpsGame" , 'training/rpsGame');