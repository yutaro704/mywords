@extends('layouts.app')
@section('title', 'Myword')
@section('content')
<h1>
  <a href="{{url('/words/create')}}" class="header-menu" >新しいワードを追加する</a>
</h1>
    <ul class="words">
      @foreach($words as $word)
      <li class="word">
      <a href="{{ action('WordsController@show', $word )}}" class="show">例文をみる</a>
      <a href="{{ action('WordsController@edit', $word) }}" class='edit'>編集する</a>
      <a href="#" class="del" data-id="{{ $word->id }}">削除する</a>
      <form method="post" action="{{ url('/words', $word->id) }}" id="form_{{ $word->id }}">
          {{ csrf_field() }}
          {{ method_field('delete') }}
        </form>
      <div class="en">{{ $word->en }}</div>
        <b class="etranslation">和訳</b>
          {{ $word->ja }}
        <b class="partofspeech">品詞</b>
      </li>
      @endforeach
    </ul>
@endsection