<?php

namespace App\Http\Controllers;

use App\Models\text;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ContactsPageData = /*session()->get('text',[]) / DB::table('text')->get()*/ text::all();
        return view('ContactsPage', [
        "text" => $ContactsPageData 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['text'=> ['required','min:3']]);
    $ContactsPageData = request('text');
    //session()->push("text" , $ContactsPageData);
    //DB::table('text')->insert
    text::create([
        'MessageBody' => $ContactsPageData
    ]);
    return redirect("/ContactsPage");
    //$ContactsPage = Request::input('ContactsPage');
    //$request->input('ContactsPage');
    }

    /**
     * Display the specified resource.
     */
    public function search()
    {
        $searchResults = text::query()->when(request('searchbar'),function($query,$search){
        $query->whereRaw("LOWER(MessageBody) LIKE ?", '%'. strtolower($search).'%');
        })->get();
        return view("/ContactsPage",["text"=>(count($searchResults)>0)?$searchResults:["no results found..."]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(text $text)
    {
        return view("/editmessages",["message"=>$text]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, text $text)
    {
        $request->validate(['messageBody'=> ['required','min:3']]);
        $text->update([
        "MessageBody" => request("messageBody")
        ]);
        return redirect("/ContactsPage");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        text::truncate();
        return redirect("/ContactsPage");
    }
}