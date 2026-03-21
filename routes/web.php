<?php

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Http\Request as IlluminateHttpRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Models\text;

Route::get('/', function () {
    return view('MainPage');
});
Route::view('/projectsPage' , 'projectsPage');
Route::view('/CVpage' , 'CVpage');
Route::get('/ContactsPage' , function() {
    $ContactsPageData = /*session()->get('text',[]) / DB::table('text')->get()*/ text::all();
    return view('ContactsPage', [
        "text" => $ContactsPageData 
    ]);
    });
Route::post('/ContactsPage', function(){
    $ContactsPageData = request('text');
    //session()->push("text" , $ContactsPageData);
    //DB::table('text')->insert
    text::create([
        'MessageBody' => $ContactsPageData??""
    ]);
    return redirect("/ContactsPage");
    //$ContactsPage = Request::input('ContactsPage');
    //$request->input('ContactsPage');
});
Route::get("/delOldMessages",function(){
    //DB::table('texts')->truncate();
    text::truncate();
    return redirect("/ContactsPage");
});
Route::get("/ContactsPage/search",function(){
    //DB::table('texts')->truncate();
    $searchResults = text::where('MessageBody', 'like', '%' . request('searchbar') . '%')->get();
    return view("/ContactsPage",["text"=>$searchResults]);
});
Route::view('/Cal' , 'Cal');
Route::view("/training/toDoList" , 'training/toDoList');
Route::view("/training/rpsGame" , 'training/rpsGame');