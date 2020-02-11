<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auth;
use App\Word;

class WordsController extends Controller
{
    public function index(){
        $words = Word::latest()->get();
        return view('words.index')->with('words', $words);
    }

    public function show(Word $word){
        return view('words.show')->with('word', $word);
    }

    public function create(){
        return view('words.create');
    }

    public function edit(Word $word){
        return view('words.edit')->with('word', $word);
    }
    
    public function store(Request $request) {
        $word = new Word();
        $word->title = $request->title;
        $word->body = $request->body;
        $word->wordclass = $request->wordclass;
        $word->user_id = auth()->id();
        $word->save();
        return redirect('/');
    }

    public function update(Request $request, Word $word) {
        $word->title = $request->title;
        $word->body = $request->body;
        $word->user_id = auth()->id();
        $word->save();
        return redirect('/');
    }

    public function destroy(Word $word){
        $word->delete();
        return redirect('/');
    }
}
