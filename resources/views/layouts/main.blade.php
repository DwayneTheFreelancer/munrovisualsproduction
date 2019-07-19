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
            /* background: rgba(0,0,100,0.5); */
            background: url("img/beach-rocks.jpg");
            background-size: cover;
            height: 100vh;
            margin-bottom: 100px;
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
            /* color: ; */
        }

        .banner-name h1{
            font-size: 52px;
            margin: 25px;
        }

        .banner-btn {
            margin-top: 50px;  
        }

        .recent-work {
            margin-top: 100px;
        }

        .recent-work h1 {
            margin-bottom: 50px;
        }

        .testimonials {
            margin-top: 100px;
        }

        .appointment {
            margin-top: 100px;
            margin-bottom: 150px;
        }

        .appointment-name {
            margin-top: 25px;
        }

        .appointment img {
            border-radius: 10px;
        }

        .latest-video-title {
            text-align: left;
        }

        /* .latest-video-title hr {
            width: 150px;
            text-align: left;
        } */

        .latest-videos {
            margin: 100px auto;
            border: 1px solid black;
            padding: 35px 30px 30px 30px;
            /* width: 100%; */
        }

        .latest-pics-art {
            margin: 100px 0;
        }

        .instagram-div {
            margin-top: 100px;
        }


        body {
            
        }
        /* .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding-bottom: 80px;
            margin-right: 20px;
            height: 340px; 
            line-height: 80px; 
            background-color: #363535;
            color: #fff;
        } */


        .footer a {
            color: #fff;
        }

        .subscribe {
            width: 50%;
        }

        .index-social-links {
            margin-top: 300px;
            text-align: center;
        }
    </style>
    <body>
        @yield('header')
        
        @yield('content')

        @extends('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>