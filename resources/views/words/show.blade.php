@extends('layouts.app')
@section('title', 'Myword')
@section('content')

<ul class="words">
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
      <div class="titlequestion">
        {{ $word->title }}
      </div>
      <div class="contentquestion">
        <b class="etranslation">内容</b>
          {{ $word->body }}
      </div>
      <div class="contributorquestion">
        <b class="partofspeech">投稿者</b>
        {{ $word->user->name }}
      </div>
      </li>
</ul>

<!-- コメント -->
<div class="titlequestion">
  回答
</div>
<ul>
  @forelse ($word->comments as $comment)
  <li>
    {{ $comment->user->name }}さん
    {{ $comment->body }}
    <div class="crud">
      <a href="#" data-id="{{ $comment->id }}" class="crud_btn del" >削除</a>
    </div>
    <form method="post" action="{{ action('CommentsController@destroy', [$word, $comment]) }}" id="form_{{ $comment->id }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>
  </li>
  @empty
  <li>まだ回答はありません</li>
  @endforelse
</ul>
<form method="post" action="{{ action('CommentsController@store', $word) }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="body" placeholder="コメントする" value="{{ old('body') }}">
    @if ($errors->has('body'))
    <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="Add Comment">
  </p>
</form>
  <a href="{{url('/')}}" class="header-menu" >Back</a>
@endsection