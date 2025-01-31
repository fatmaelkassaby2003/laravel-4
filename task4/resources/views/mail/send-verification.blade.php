<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="border: 1px solid #000; margin-bottom: 20px ; text-align: center">{{$user->name}}</h1>
    <h2 style="border: 1px solid #000; margin-bottom: 20px; text-align: center">{{$user->email}}</h2>
    <h2 style="border: 1px solid red; margin-bottom: 20px; background-color: #f5f5f5; text-align: center">Your Code Is {{$user->code}}</h2>
</body>
</html>