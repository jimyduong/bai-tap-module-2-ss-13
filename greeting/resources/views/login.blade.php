<?php
?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <style>
        .login{
            color: red;
        }

    </style>
</head>

<body>
<h1 class="login">Login</h1>
<form action="/login" method="post" >
@csrf
<p>
    <input type="text" name="user" placeholder="tai khoan">
</p>
<p>
    <input type="password" name="password" placeholder="mat khau">
</p>
<p>
    <input type="submit" value="Dang nhap">
</p>
</form>

</body>
</html>
