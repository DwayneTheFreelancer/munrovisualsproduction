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

        body {
            
        }
        .footer {
            
            bottom: 0;
            width: 100%;
            padding-bottom: 80px;
            margin-right: 20px;
            height: 240px; 
            line-height: 60px; 
            background-color: #363535;
            color: #fff;
        }

        .footer a {
            color: #fff;
        }

        .subscribe {
            width: 50%;
        }









                /* Hide carousel until webpage is loaded to prevent FOUC - Flash Of Unstyled Content -

        Class is removed once page has loaded using jQuery  

        $(function() {
            $('.no-fouc').removeClass('no-fouc');
            console.log( "ready!" );
        });

        */
        .no-fouc {visibility: hidden}
        /* Size and Center Slider Container */
        .centered {
        padding-left:50px;
        padding-right:50px;
        }

        .slick-slider {
        width: 1000px;
        }
        /* Make Images Responsive */
        img {
        height: 340px!important;
        object-fit: cover;
            max-width: 299px;
            height: auto;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.9);
        }
        /* Default Slick Slide */
        .slick-slide {
            opacity: 1;
            transition: all .2s ease-in-out;
            transform: scale(0.95);
            outline: none;
            /* Wiggle Room - extra space below caption.  */
            /* Grab Hand Cursor */
            cursor: move;
            cursor: grab;
            cursor: -moz-grab;
            cursor: -webkit-grab;
        }

        /* Default Slick Slide ACTIVE
        Grabbing Hand Cursor on Active Slide */
        
        .slick-slide:active {
            cursor: grabbing;
            cursor: -moz-grabbing;
            cursor: -webkit-grabbing;
        }
        .slick-slide.slick-center {
            opacity: 1;
            cursor:pointer;
        }
        /* Arrows */
        .slick-prev, .slick-next {
            position: absolute;
            display: block;
            background: transparent;
            line-height: 0;
            font-size: 0;
            cursor: pointer;
            z-index: 2;
            top: 50%;
            margin-top: -10px;
            padding: 0;
            border: none;
            outline: none;
        }
        .slick-prev:focus, .slick-next:focus {
            outline: none;
        }
        .slick-prev.slick-disabled:before, .slick-next.slick-disabled:before {
            opacity: 0.25;
        }
        .slick-prev:before, .slick-next:before {
            font-size: 18px;
            line-height: 18px;
            opacity: 0.65;
            padding: 8px;
            background: grey;
            color: white;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            transition: all ease-in-out 0.3s;
        }
        .slick-prev:hover::before, .slick-next:hover::before {
            color: white;
            opacity: 0.85;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .slick-prev {
            left: 25px;
        }
        .slick-prev:before {
            content: '◀';
        }
        .slick-next {
            right: 25px;
        }
        .slick-next:before {
            content: '▶';
        }

        button.focus {
            outline: none;
        }


        .slick-slide h3 {
            font-size:18px;
        margin-top:20px;
        font-weight: bold;
        color:#101411;
        text-transform:uppercase;
        letter-spacing:1px;
        }
        .slick-slide p {
        line-height: 1.5;
        font-size: 15px;
        color:#50535B;
        letter-spacing:1px;
        
        }
        .slider-more {
        text-decoration: none;
        color: #2f4f4f;
        opacity:0.85;
        transition: all 0.2s ease-in-out;


        
        }
        .slider-more:hover {
        opacity: 1;
        color: #CC2C1E;
        
        }
        h1 {
            color: black;
            text-transform: uppercase;
        text-align:center;
            letter-spacing: 2px;
            font-size: 3vw;
            margin-top: 2%;
        font-weight:800;
        opacity:0.75;
        
        }
        body {
            background: #f8f8ff;
        font-family: 'Open Sans', sans-serif;
        }
    </style>
    <body>
        @yield('header')
        
        @yield('content')

        @yield('footer')
    <script>
        $(".centered").slick({
        centerMode: true,
        centerPadding: "0px",
        slidesToShow: 3,
        infinite: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: "0px",
                slidesToShow: 1
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: "0px",
                slidesToShow: 1
            }
            }
        ]
        });

        // Make LEFT and RIGHT slides - i.e. not centered 
        // clickable - i.e. Go to PREVIOUS and NEXT 
        // slides respectively.

        $(".centered").on("click", ".slick-slide", function(e) {
        e.stopPropagation();
        var index = $(this).data("slick-index");
        if ($(".centered").slick("slickCurrentSlide") !== index) {
            $(".centered").slick("slickGoTo", index);
        }
        });

        // Remove class FOUC 
        // --> Flash Of Unstyled Content <-- from Carousel when // web page is loaded. 

        $(function() {
            $('.no-fouc').removeClass('no-fouc');
        // Console message that page is ready.
            console.log( "Page ready! Show Carousel" );
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>