<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset="utf-8">
  <title>Myword</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
  <div class="container">
    <h1>Mywords</h1>
    <ul>
      @foreach($words as $word)
      <li>
        <a href="{{ action('WordsController@show', $word )}}">{{ $word->en }}</a>
        <a href="">{{ $word->ja }}</a>
      </li>
      @endforeach
    </ul>
  </div>
</body>
</html>