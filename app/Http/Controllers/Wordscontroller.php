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

    public function show($id){
        $word = Word::findOrFail($id);
        return view('words.show')->with('word', $word);
    }
}
