
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<form method="POST" action="/profiles" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <input type="file" name="photo">
    <input type="submit">
</form>

@if(isset($image))
    <figure>
        <img src="/storage/profile_images/0.jpg" width="100px" height="100px">
        <figcaption>プロフィール画像がありません</figcaption>
    </figure>
@else
    <figure>
        <img src="/storage/profile_images/{{ Auth::id() }}.jpg" width="100px" height="100px">
        <figcaption>現在のプロフィール画像</figcaption>
    </figure>
@endif