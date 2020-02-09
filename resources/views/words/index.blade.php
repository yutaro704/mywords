@extends('layouts.app')
@section('title', 'Myword')
@section('content')
<div class=add>
  <a href="{{url('/words/create')}}" class="add_word" >質問する</a>
</div>
    <ul class="words">
      @foreach($words as $word)
      <li class="word">
      <div class="titlequestion">
        <a href="{{ action('WordsController@show', $word )}}" class="show">{{ $word->title }}</a>
      </div>
      <b class="partofspeech">投稿者</b>
      {{ $word->user->name }}さん
      </li>
      @endforeach
    </ul>
@endsection