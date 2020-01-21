@extends('layouts.app')
@section('title', 'Edit word')
@section('content')
<h1>
  Edit word
  <a href="{{url('/')}}", class="header-menu" >Back</a>
</h1>
<form method='post', action="{{ url('/words', $word->id) }}">
  {{ csrf_field() }}
  {{ method_field('patch') }}
  <p>
    <input type="text" name="en" placeholder="enter english" value= "{{ old('en', $word->en)}}">
  </p>
  <p>
    <input type="text" name="ja" placeholder="enter japanese" value= "{{ old('ja', $word->ja)}}">
  </p>
  <p>
    <input type="submit" value="update">
  </p>
</form>
@endsection 