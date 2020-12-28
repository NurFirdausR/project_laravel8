<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="form" method="get">
        @csrf
        <input type="text" placeholder="name" name="nama"> <br>
        <input type="password" placeholder="password" name="password"> <br>
    <button type="submit">Masuk</button>         
    </form>
</body>
</html>