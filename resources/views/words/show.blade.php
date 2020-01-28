@extends('layouts.app')
@section('title', 'Myword')
@section('content')

<h1>
  {{ $word->en }}
  <a href="{{url('/')}}" class="header-menu" >Back</a>
</h1>
@endsection