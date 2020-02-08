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
        {{ Auth::user()->name }}
        <!-- ↑ログインしている状態のユーザーの表示をするように設定してあるので、投稿ユーザーがログインしていない状態だとトップページがエラーになる。 -->
      </li>
      @endforeach
    </ul>
@endsection