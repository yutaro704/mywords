@extends('layouts.app')
@section('title', 'Edit word')
@section('content')
<h1 class="edit_title">
  質問編集
</h1>
<div class="edit">
<form class="edit_words" method='post' action="{{ url('/words', $word->id) }}">
  {{ csrf_field() }}
  {{ method_field('patch') }}
  <p class="edit_words__title">
    <input class="edit_words__title--input" type="text" style="width:500px;height:50px;" name="title" placeholder="質問の編集をしてみよう！" value= "{{ old('title', $word->title)}}">
    @if ($errors->has('title'))
        <span class="error">{{ $errors->first('title') }}</span>
    @endif
  </p>
  <p class="edit_words__body">
    <textarea class="edit_words__body--textarea" name="body" placeholder="質問の詳細を編集してみよう！" value= "{{ old('body', $word->body)}}"></textarea>
    @if ($errors->has('body'))
        <span class="error">{{ $errors->first('body') }}</span>
    @endif
  </p>
  <p class="edit_words__submit">
    <input class="edit_words__submit--input" type="submit" value="更新する">
  </p>
</form>
@endsection 