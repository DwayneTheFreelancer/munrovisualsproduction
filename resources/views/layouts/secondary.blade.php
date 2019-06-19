<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <link href="css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/app.css" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    @yield('styles')
    <style>
        .video-background {
            position: absolute;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
        }

        @media (min-aspect-ratio: 16/9) {
            .video-background {
                width: 100%;
                height: auto;
            }
        }

        @media (min-aspect-ratio: 16/9) {
            .video-background {
                width: auto;
                height: 100%;
            }
        }

        header {
            background: rgba(0,0,100,0.5);
            height: 100vh;
        }

        .nav-link {
            color: #fff;
        }

        .process {
            margin-top: 100px;
        }

        .banner-name {
            position: relative;
            text-align: center;
            font-family: sans-serif;
            color: #fff;
            top: 180px;
        }

        .banner-name h1{
            font-size: 52px;
            margin: 25px;
        }

        .banner-btn {
            margin-top: 50px;  
        } 

        html {
            position: relative;
            min-height: 100%;
        }

        body {
            margin-bottom: 60px; 
        }
        
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding-bottom: 80px;
            margin-right: 20px;
            height: 240px; /* Set the fixed height of the footer here */
            line-height: 60px; /* Vertically center the text there */
            background-color: #363535;
            color: #fff;
        }

        .footer a {
            color: #fff;
        }
    </style>
    <body>
        <nav style="background: #2606B8;" class="navbar fixed-top navbar-expand-lg navbar-light">
            <a style="color: #fff" class="navbar-brand" href="/">Munro Visuals Media</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a style="color: #fff" class="nav-link" href="/portfolio">Portfolio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #fff" class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #fff" class="nav-link" href="/about">About</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a style="color: #fff" class="nav-link" href="#">Contact</a>
                    </li> -->
                    <li class="nav-item">
                        <a style="color: #fff" class="nav-link" href="https://www.youtube.com/channel/UCMA2n1omkzh68Z6ZXM_12yg">YouTube</a>
                    </li>
                    
                </ul>
            </div>
        </nav>

        @yield('content')


        <footer class="footer mt-auto py-3">
            <div class="container">
                <h3 class="text-center">Subscribe To Newsletter</h3>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Submit</button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <span>Munro Visuals Media</span>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <span class="m-right">Email: dwaynemunro4business@gmail.com | <a href="https://www.youtube.com/channel/UCMA2n1omkzh68Z6ZXM_12yg">YouTube</a></span>
                    </div>
                </div>
            </div>
        </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>