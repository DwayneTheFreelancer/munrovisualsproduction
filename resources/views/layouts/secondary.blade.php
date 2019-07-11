<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.css">
        <link rel="stylesheet" type="text/css" href="css/app.css" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/a8508ec150a235879860da39d/a0198419471dfcdb86f73026b.js");</script>
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '671678486533449');
            fbq('track', 'PageView');
            fbq('track', 'FindLocation');
        </script>
            <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=671678486533449&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
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
                        <a style="color: #fff;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Videos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/music-videos">Music Videos</a>
                            <a class="dropdown-item" href="/promotional">Promotional</a>
                            <a class="dropdown-item" href="/interviews">Interviews</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a style="color: #fff;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Photography/Art
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/photography">Photography</a>
                            <a class="dropdown-item" href="/graphic-art">Graphic Art</a>
                        </div>
                    </li>
                    <!-- <li class="nav-item active">
                        <a style="color: #fff" class="nav-link" href="/portfolio">Portfolio<span class="sr-only">(current)</span></a>
                    </li> -->
                    <li class="nav-item">
                        <a style="color: #fff" class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #fff" class="nav-link" href="/news">News</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #fff" class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #fff" class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: #fff" class="nav-link" href="https://www.youtube.com/channel/UCMA2n1omkzh68Z6ZXM_12yg">YouTube</a>
                    </li>
                    
                </ul>
            </div>
        </nav>

        @yield('content')

        @extends('layouts.footer')
        
    @yield('script')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.js"></script>
    </body>
</html>