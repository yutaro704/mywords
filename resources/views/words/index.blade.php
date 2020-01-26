@extends('layouts.app')
@section('title', 'Myword')
@section('content')
<h1>
  Mywords
  <a href="{{url('/words/create')}}" class="header-menu" >New Word</a>
</h1>
    <ul>
      @foreach($words as $word)
      <li>
        <a href="{{ action('WordsController@show', $word )}}">{{ $word->en }}</a>
        <a href="">{{ $word->ja }}</a>
        <a href="#" class="del" data-id="{{ $word->id }}">[×]</a>
        <form method="post" action="{{ url('/words', $word->id) }}" id="form_{{ $word->id }}">
          {{ csrf_field() }}
          {{ method_field('delete') }}
        </form>
      </li>
      @endforeach
    </ul>
@endsection