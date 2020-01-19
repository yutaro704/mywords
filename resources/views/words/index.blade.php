@extends('layouts.default')
@section('title', 'Myword')
@section('content')
<h1>
  Mywords
  <a href="{{url('/words/create')}}", class="header-menu" >New Word</a>
</h1>
    <ul>
      @foreach($words as $word)
      <li>
        <a href="{{ action('WordsController@show', $word )}}">{{ $word->en }}</a>
        <a href="">{{ $word->ja }}</a>
      </li>
      @endforeach
    </ul>
@endsection