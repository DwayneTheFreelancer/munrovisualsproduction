@extends('layouts.main')

@section('title')
    Home
@endsection

@section('header')

    <header>
        <video autoplay loop class="video-background" muted plays-inline>
            <source src="videos/mvpbanner5.mp4" type="video/mp4">
        </video>
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
        <div class="banner-name">
            <h1>MVM</h1>
            <h1>TELL YOUR BRAND'S STORY</h1>
            <button type="button" class="btn banner-btn btn-light"><a href="/services">GET STARTED</a></button>
            <button type="button" class="btn banner-btn btn-light"><a href="/portfolio">PORTFOLIO</a></button>
        </div>
        <!-- @yield('banner') -->
    </header>

@endsection

@section('content')

    <div class="carousel">
        <div>
            <img src="img/services-banner.jpg" alt="" height="300px" width="300px">
        </div>
        <div>
            <img src="img/camera.jpg" alt="" height="300px" width="300px">
        </div>
        <div>
            <img src="img/cameraman.jpg" alt="" height="300px" width="300px">
        </div>
        <div>
            <img src="img/services2.jpg" alt="" height="300px" width="300px">
        </div>
    </div>

    <div class="container process">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Pre-Production</h4>
                    </div>
                    <div class="card-body">
                        <h2>Schedule a meeting with us and we will plan out with you the idea you would like to film</h2>
                        <button type="button" class="btn btn-lg btn-block"><i class="fas fa-3x fa-calendar-alt"></i></button>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Production</h4>
                    </div>
                    <div class="card-body">
                        <h2>We use high quality equipment plus lots of creativity to make sure visuals are perfect</h2>
                        <br>
                        <br>
                        <span></span>
                        <button type="button" class="btn btn-lg btn-block"><i class="fas fa-3x fa-video"></i></button>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Post-Production</h4>
                    </div>
                    <div class="card-body">
                        <h2>During this step we are working hardcore on the editing process adding effects to bring your idea to film</h2>
                        <button type="button" class="btn btn-lg btn-block"><i class="fas fa-3x fa-desktop"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container recent-work">
            <div class="recent-work-title">
                <h1 class="text-center">Recent Work</h1>
            </div>
            <iframe width="100%" height="543" src="https://www.youtube.com/embed/hdUEumBsY9o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="container testimonials">
            <div class="testimonials-name">
                <h1 class="text-center">Client's Reviews</h1>
                <h1>Coming Soon...</h1>
            </div>
            
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

@section('footer')
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
@endsection
