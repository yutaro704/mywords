<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request, Word $word) {
        $this->validate($request, [
          'body'=>'required|max:255'
        ]);
        $comment = new Comment(['body' => $request->body]);
        $comment->user_id = auth()->id();
        $word->comments()->save($comment);
        return redirect()->action('WordsController@show', $word);
      }
    
    public function destroy(Word $word, Comment $comment){
        $comment->delete();
        return redirect()->back();
    }
    
}
