@extends('users.layout.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('users.layout.navbar')
    @include('users.layout.header')
    @include('users.layout.blog-post')
    @include('users.layout.comment-post')
</body>
</html>