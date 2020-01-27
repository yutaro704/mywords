@extends('layouts.app')
@section('title', 'Myword')
@section('content')
<h1>
  <a href="{{url('/words/create')}}" class="header-menu" >新しいワードを追加する</a>
  <a href="#" class="header-menu">Mywordsとは？<a>
</h1>
    <ul class="words">
      @foreach($words as $word)
      <li class="word">
      <a href="#" class="del" data-id="{{ $word->id }}">単語を削除する</a>
        <div class="en">
          <a href="{{ action('WordsController@show', $word )}}">{{ $word->en }}</a>
        </div>
        <b class="etranslation">和訳</b>
          <a href="/" class="ja">{{ $word->ja }}</a>
        <b class="partofspeech">品詞</b>
        <form method="post" action="{{ url('/words', $word->id) }}" id="form_{{ $word->id }}">
          {{ csrf_field() }}
          {{ method_field('delete') }}
        </form>
      </li>
      @endforeach
    </ul>
@endsection