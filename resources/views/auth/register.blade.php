<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ユーザー登録フォーム</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <form name="registerform" action="/auth/register" method="post">
    {{csrf_field()}}
    name:<input type="text" name="name" size="30" ><span>{{$errors->first('name')}}</span><br>
    email:<input type="text" name="email" size="30"><span>{{$errors->first('email')}}</span><br>
    password:<input type="password" name="password" size="30"><span>{{$errors->first('password')}}</span><br>
    password_confirmation:<input type="password" name="password_confirmation" size="30"><span>{{$errors->first('password_confirmation')}}</span><br>
    <button type="submit" name="action" value="send">send</button>
    </form>
</body>
</html>