<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function store(Request $request) {
        $word = new Word();
        $word->en = $request->en;
        $word->ja = $request->ja;
        $word->save();
        return redirect('/');
    }
}
