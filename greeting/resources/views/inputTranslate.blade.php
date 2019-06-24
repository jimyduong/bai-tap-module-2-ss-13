<?php
?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Translate</title>
</head>
<body>
<form action="" method="post">
    @csrf
    <h1>Translate English</h1>
    <p>
        <input type="text" name="input">
    </p>
    <p>
        <button type="submit">Translate</button>
    </p>
</form>
</body>
</html>
