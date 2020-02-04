@extends('layouts.app')
@section('title', 'Myword')
@section('content')
<div class=add>
  <a href="{{url('/words/create')}}" class="add_word" >単語を追加</a>
</div>
    <ul class="words">
      @foreach($words as $word)
      <li class="word">
      <div class="en">
        <a href="{{ action('WordsController@show', $word )}}" class="show">{{ $word->en }}</a>
      </div>
        <b class="etranslation">和訳</b>
          {{ $word->ja }}
        <b class="partofspeech">品詞</b>
          {{ $word->wordclass }}
        <b class="partofspeech">投稿者</b>
        {{ Auth::user()->name }}
      </li>
      @endforeach
    </ul>
@endsection