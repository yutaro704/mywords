@extends('layouts.app')
@section('title', 'New word')
@section('content')
<h1>
  New word
  <a href="{{url('/')}}" class="header-menu" >Back</a>
</h1>
<form method='post' action="{{ url('/words') }}">
  {{ csrf_field() }}
  <p>
    <input type="text" name="title" placeholder="enter english">
  </p>
  <p>
    <input type="text" name="ja" placeholder="enter japanese">
  </p>
  <p>
    <input type="text" name="wordclass" placeholder="enter wordclass">
  </p>
  <p>
    <input type="submit" value="add word">
  </p>
</form>
@endsection