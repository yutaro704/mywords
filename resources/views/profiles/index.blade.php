@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('プロフィール編集') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ニックネーム') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('ニックネーム')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </form>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('プロフィール画像') }}</label>

                            <div class="col-md-6">
                                <form method="POST" action="/profiles" enctype="multipart/form-data" >
                                    {{ csrf_field() }}
                                <input type="file" name="photo">
                                <input type="submit">
                                </form>
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br/>
                        @endif



                    <div class="profile">
                        @if(isset($image))
                        まだ画像はありません
                        @else
                            <figure>
                                <img src="/storage/profile_images/{{ Auth::id() }}.jpg" width="100px" height="100px">
                            </figure>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection