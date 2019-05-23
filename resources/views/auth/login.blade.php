<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ログイン登録フォーム</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h2>ログイン登録</h2>
    @isset($message)
        <p style="color:red">{{$message}}</p>
    @endisset
    <form name="registerform" action="/auth/register" method="post">
        {{csrf_field()}}
    
        email:<input type="text" name="email" size="30" value="{{old('email')}}"><br>
        password:<input type="password" name="password" size="30" value="{{old('password')}}"><br>
   
    <button type="submit" name="action" value="send">ログイン</button>
    </form>
</body>
</html>