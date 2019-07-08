@extends('layouts.main')

@section('title')
    Home
@endsection

@section('header')

    <header>
        <!-- <video autoplay loop class="video-background" muted plays-inline>
            <source src="videos/mvpbanner5.mp4" type="video/mp4">
        </video> -->
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
                    <li class="nav-item active">
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
        <div class="banner-name">
            <h1 style="color: #EAF4F7">MUNRO VISUALS MEDIA</h1>
            <h3 style="color: #EAF4F7">INVEST IN YOUR NAME</h3>
            <a href="/services"><button type="button" class="text-center btn banner-btn btn-light">Book A Service</button></a>
            <a href="/music-videos"><button type="button" class="btn banner-btn btn-light">Music Videos</button></a>
            <a href="/interviews"><button type="button" class="btn banner-btn btn-light">Interviews</button></a>
            <a href="/photography"><button type="button" class="btn banner-btn btn-light">Photoshop Edits</button></a>
            <a href="/graphic-art"><button type="button" class="btn banner-btn btn-light">Graphic Art</button></a>
        </div>
        <!-- @yield('banner') -->
    </header>

@endsection

@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <h1 style="text-decoration: underline">Latest Videos</h1>
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <iframe width="100%" height="450px" src="https://www.youtube.com/embed/6ymWaP0SnkI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <!-- <div class="carousel-item">
                <iframe width="100%" height="450px" src="https://www.youtube.com/embed/N_fBJ-D_kd4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="carousel-item">
                <iframe width="100%" height="450px" src="https://www.youtube.com/embed/o1gzrH3syhI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <div class="container-fluid latest-pics-art">
        <h1 style="text-decoration: underline">Latest Photos/Art</h1>
        <div class="card-deck">
            <div class="card">
                <img src="img/Lance Cover.JPG" class="card-img-top" alt="..." width="300px" height="300px">
                <div class="card-body">
                <h5 class="card-title">Baby Prince Cover Art</h5>
                <p class="card-text">With Baby Prince new single coming out soon he choose this to be his cover art, stay tuned for "Your Love Is My Drugz".</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
            </div>
            <div class="card">
                <img src="img/MVM Logo.jpg" class="card-img-top" alt="..." width="300px" height="300px">
                <div class="card-body">
                <h5 class="card-title">Munro Visuals Media Official Logo</h5>
                <p class="card-text">We would love to give a thanks to our graphic artist for making us this logo.</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
            </div>
            <div class="card">
                <img src="img/Prom Pic 3.png" class="card-img-top" alt="..." width="300px" height="300px">
                <div class="card-body">
                <h5 class="card-title">Prom 2k19 Pic</h5>
                <p class="card-text">Big thanks to Amia for choosing Munro Visuals Media to be her photographer for her prom. <br>IG: amialicious</p>
                <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
            </div>
        </div>
    </div>

    <div class="container accordion" id="accordionExample">
        <h1>Production Process</h1>
        <div class="card">
            <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Pre-Production
                <i class="fas fa-1x fa-calendar-alt"></i>
                </button>
            </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <h4>Schedule a meeting with us and we will plan out with you the idea you would like to film</h4>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Production
                <i class="fas fa-1x fa-video"></i>
                </button>
            </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <h4>We use high quality equipment plus lots of creativity to make sure visuals are perfect</h4>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Post-Production
                <i class="fas fa-1x fa-desktop"></i>
                </button>
            </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <h4>During this step we are working hardcore on the editing process adding effects to bring your idea to film</h4>
            </div>
        </div>
    </div>

    <div class="container instagram-div">
        <h1><center>Follow Us On Instagram</center></h1>
        <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/38e07066638a58ae969fe6c25ba1ad35.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
    </div>

    <div class="container appointment">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/camera.jpg" alt="" width="100%">
                </div>
                <div class="col-md-6">
                    <div class="appointment-name">
                        <h1>Schedule An Appointment</h1>
                        <p>Why Munro Visuals Media? Because we have the most talented and creative people on our team. We value our clients work as much as they value their customers/audience. Our goal is to make sure to produce the best content we can to make your business stand out and grow.</p>
                        <button type="button" class="btn banner-btn btn-primary"><a style="color: #fff" href="/services">GET STARTED</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

