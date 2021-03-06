@extends('layouts.app')
@section('title', 'Myword')
@section('content')
<div top_pic>
  <img class="top_pic__logo" src="{{ asset('images/top.png') }}" alt="top_logo">
  <div class="top_pic__title">
    古都グアナファクトとその銀鉱群
  </div>
  <div class="top_pic__text">
    メキシコ中央部高原の中にある比較的小さな街です。<br>
    地元の人も自慢するだけあり、町中から丘の上まで広がる<br>
    コロニアル調の家々がびっしりと描かれた街の景色です。<br>
    丘の上からの街の眺めが有名で、街歩きをすることで色々満喫できる街です。
  </div>
</div>
<!-- 質問する -->
<div class=add>
  <a href="{{url('/words/create')}}" class="add_word" >質問する</a>
</div>
<!-- メインコンテンツ -->
  <div class="index">
    <ul class="index_words">
      @foreach($words as $word)
      <li class="index_words--post">
        <div class="title">
          <a href="{{ action('WordsController@show', $word )}}" class="show">{{ $word->title }}</a>
        </div>
        <div>
          <b class="partofspeech">投稿者</b>
            <img src="/storage/profile_images/{{ $word->user->id }}.jpg" width="40px" height="40px">
          {{ $word->user->name }}さん
        </div>
      </li>
      @endforeach
    </ul>
@endsection