@extends('layouts.app')
@section('title', 'New word')
@section('content')

<h1 class="create_title">
  質問投稿
</h1>
<div class="create">
  <form class="create_words" method='post' action="{{ url('/words') }}">
    {{ csrf_field() }}
    <p class="create_words__title">
      <input class="create_words__title--input"type="text" style="width:500px;height:50px;" name="title" placeholder="質問のタイトルをつけてみよう！">
    </p>
    <p class="create_words__body">
      <textarea class="create_words__body--textarea" type="text" name="body" placeholder="質問の詳細を書いてみよう！"></textarea>
    </p>
    <p class="create_words__submit">
      <input class="create_words__submit--input" type="submit" value="投稿する">
    </p>
  </form>
</div>
@endsection