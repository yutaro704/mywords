@extends('layouts.app')
@section('title', 'Myword')
@section('content')
<div class=add>
  <a href="{{url('/words/create')}}" class="add_word" >単語を追加</a>
</div>
    <ul class="words">
      @foreach($words as $word)
      <li class="word">
        <div class="crud">
          <a href="{{ action('WordsController@edit', $word) }}" class='crud_btn'>編集</a>
        </div>
        <div class="crud">
          <a href="#" data-id="{{ $word->id }}" class="crud_btn del" >削除</a>
        </div>
          <form method="post" action="{{ url('/words', $word->id) }}" id="form_{{ $word->id }}">
          {{ csrf_field() }}
          {{ method_field('delete') }}
        </form>
      <div class="en">{{ $word->en }}</div>
        <b class="etranslation">和訳</b>
          {{ $word->ja }}
        <b class="partofspeech">品詞</b>
          <!-- {{ $word->ja }} -->
      </li>
      @endforeach
    </ul>
@endsection