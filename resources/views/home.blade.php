<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    こんにちは！
    @if (Auth::check())
        {{\Auth::user()->name}}さん
    @else
        ゲスト<br>
        <a herf="/auth/register">会員登録</a>
    @endif
</body>
</html>>