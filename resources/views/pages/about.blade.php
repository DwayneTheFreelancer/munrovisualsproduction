<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/app.css" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    @extends('layouts.secondary')
    
    @section('styles')
        <style>
            .about-page {
                margin-top: 100px;
                margin-bottom: 400px;
            }

            .about-page p {
                margin-top: 30px;
                font-size: 1.5em;
            }
        </style>
    @endsection

    @section('content')
        <div class="container about-page">
            <h1 class="text-center">Why Choose Us?</h1>
            <p>Munro Visuals Media is a growing video production company that creates creative content for music videos, video ads to help marketing for small businesses, interviews, and special ocassions. Our goal is to create content that both our clients and their potential customers/viewers love by standing out with fanstastic visuals.</p>
        </div>
    @endsection
</body>
</html>