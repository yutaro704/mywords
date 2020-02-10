@extends('layouts.app')
@section('title', 'Myword')
@section('content')
<div class="show">
  <ul class="show_words">
      <li class="show_words--post">
        <div class="title">
          {{ $word->title }}
        </div>
        <div class="content">
          <b class="etranslation">内容</b>
            <div class="text">
              {{ $word->body }}
            </div>
          <div class="contributorquestion">
            <b class="partofspeech">投稿者</b>
            {{ $word->user->name }}
          </div>
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
        </div>
        <div>
      </li>
  </ul>
</div>



<!-- コメント -->
<div class="comments">
  <ul class="comments_words">
    @forelse ($word->comments as $comment)
    <li class="comments_words--yes">
      <div class="answers">
      回答
      </div>
      <div class="crud">
        <a href="#" data-id="{{ $comment->id }}" class="crud_btn del" >削除</a>
      </div>
      <form method="post" action="{{ action('CommentsController@destroy', [$word, $comment]) }}" id="form_{{ $comment->id }}">
        {{ csrf_field() }}
        {{ method_field('delete') }}
      </form>
      <div class="contributorquestion">
        <b class="partofspeech">回答者</b>
        {{ $comment->user->name }}さん
      </div>
      <b class="etranslation">回答内容</b>
        <div class="text">
          {{ $comment->body }}
        </div>
    </li>
    @empty
    <li class="comments_words--no">まだ回答はありません</li>
    @endforelse
  </ul>
</div>

<!-- コメントのフォーム -->
<div class="comments">
  <form class="comments_form" method="post" action="{{ action('CommentsController@store', $word) }}">
    {{ csrf_field() }}
    <p class="comments_form__body">
      <textarea class="comments_form__body--text" type="text" name="body" placeholder="回答してみる！" value="{{ old('body') }}"></textarea>
      @if ($errors->has('body'))
      <span class="error">{{ $errors->first('body') }}</span>
      @endif
    </p>
    <p>
      <input class="comments_form__body--submit"type="submit" value="回答を入力する">
    </p>
  </form>
</div>
@endsection