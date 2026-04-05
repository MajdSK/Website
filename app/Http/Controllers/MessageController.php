<?php

namespace App\Http\Controllers;

use App\Models\text;
use App\Notifications\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ContactsPageData = /* session()->get('text',[]) / DB::table('text')->get() */ text::where('username', Auth::user()->name)->get();

        return view('ContactsPage', [
            'text' => $ContactsPageData ?? ['no messages yet...'],
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
        if (! Auth::check()) {
            return redirect('/LogIn')->withErrors(['email' => 'you must be logged in to send messages']);
        }
        $request->validate(['text' => ['required', 'min:3']]);
        $ContactsPageData = request('text');
        // session()->push("text" , $ContactsPageData);
        // DB::table('text')->insert
        $message = text::create([
            'MessageBody' => $ContactsPageData,
            'username' => Auth::user()->name,
        ]);
        Auth::user()->notify(new MessageSent($message));

        return redirect('/ContactsPage');
        // $ContactsPage = Request::input('ContactsPage');
        // $request->input('ContactsPage');
    }

    /**
     * Display the specified resource.
     */
    public function search()
    {
        if (! Auth::check()) {
            return redirect('/LogIn')->withErrors(['email' => 'you must be logged in to view messages']);
        }
        $searchResults = text::query()->when(request('searchbar'), function ($query, $search) {
            $query->whereRaw('LOWER(MessageBody) LIKE ?', '%'.strtolower($search).'%');
            $query->where('username', Auth::user()->name);
        })->get();

        return view('ContactsPage', ['text' => (count($searchResults) > 0) ? $searchResults : ['no results found...']]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(text $text)
    {
        return view('editmessages', ['message' => $text]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, text $text)
    {
        $request->validate(['messageBody' => ['required', 'min:3']]);
        $text->update([
            'MessageBody' => request('messageBody'),
        ]);

        return redirect('/ContactsPage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        if (! Auth::check()) {
            return redirect('/LogIn')->withErrors(['email' => 'you must be logged in to delete messages']);
        }
        foreach (text::all() as $message) {
            if ($message->username === Auth::user()->name) {
                $message->delete();
            }
        }
        foreach (Auth::user()->Notifications->all() as $notification) {
            $notification->delete();
        }

        return redirect('/ContactsPage');
    }

    public function destroySingle()
    {
        $text = text::where('id', request('hidden2'))->first();
        $text->delete();

        return redirect('/ContactsPage');
    }
}
