@extends('layouts.secondary')

@section('styles')

<style>
    .portfolio-banner {
        height: 400px;
        background: url('/img/Adobe Premiere.jpg') center no-repeat;
        background-size: cover;
        background-height: 400px;
    }

    .portfolio-banner-head {
        padding-top: 40px;
        color: #fff;
    }

    .work {
        margin: 100px 0 300px 0;
    }

    .video-border {
        width: 100%;
    }

    .video-container {
        margin-bottom: 300px;
        width: 100%;
    }
</style>

@endsection

@section('content')
    <section class="portfolio-banner jumbotron text-center">
        <div class="container">
            <h1 class="portfolio-banner-head jumbotron-heading">CHECK OUT OUR WORK</h1>
        </div>
    </section>

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold my-5">Our best projects</h2>
    <!-- Section description -->
    <p class="grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
    officia deserunt mollit est laborum.</p>

    <!-- Grid row -->
    <div class="row text-center">

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
        <!--Featured image-->
        <div class="view overlay rounded z-depth-1">
            <video autoplay controls muted plays-inline width="250px" height="250px">
                <source src="videos/compressed lessons.mp4" type="video/mp4">
            </video>
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>
        <!--Excerpt-->
        <div class="card-body pb-0">
        <h4 class="font-weight-bold my-3">Title of the news</h4>
        <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
            eveniet ut et voluptates repudiandae.
        </p>
        <button style="width: 100%;" type="button" class="btn banner-btn btn-dark">Coming Soon...</button>
        <!-- <a class="btn btn-indigo btn-sm"><i class="fas fa-clone left"></i> View project</a> -->
        </div>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
        <!--Featured image-->
        <div class="view overlay rounded z-depth-1">
        <img src="https://mdbootstrap.com/img/Photos/Others/project4.jpg" class="img-fluid" alt="Sample project image">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>
        <!--Excerpt-->
        <div class="card-body pb-0">
        <h4 class="font-weight-bold my-3">Title of the news</h4>
        <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
            eveniet ut et voluptates repudiandae.
        </p>
        <a class="btn btn-indigo btn-sm"><i class="fas fa-clone left"></i> View project</a>
        </div>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6">
        <!--Featured image-->
        <div class="view overlay rounded z-depth-1">
        <img src="https://mdbootstrap.com/img/Photos/Others/images/88.jpg" class="img-fluid" alt="Sample project image">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>
        <!--Excerpt-->
        <div class="card-body pb-0">
        <h4 class="font-weight-bold my-3">Title of the news</h4>
        <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
            eveniet ut et voluptates repudiandae.
        </p>
        <a class="btn btn-indigo btn-sm"><i class="fas fa-clone left"></i> View project</a>
        </div>
    </div>
  <!-- Grid column -->

    

    <div class="container video-container">
        <div class="row">

            <div class="col-md-3">
                <div class="video-border">
                    <div class="video">
                        <video autoplay controls class="" muted plays-inline width="250px" height="250px">
                            <source src="videos/compressed lessons.mp4" type="video/mp4">
                        </video>
                    </div>
                    <p>Lessons - Jay Tunne (Freestyle)</p>
                    <button style="width: 100%;" type="button" class="btn banner-btn btn-dark">Coming Soon...</button>
                        
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">June 14th, 2019</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="video-border">
                    <div class="video">
                        <video autoplay controls class="" muted plays-inline width="250px" height="250px">
                            <source src="videos/make it out compressed.mp4" type="video/mp4">
                        </video>
                    </div>
                    <p>Make It Out - Jay Finesse ft. Bally Durant (Offcial Music Video)</p>
                    <button style="width: 100%;" type="button" class="btn banner-btn btn-dark"><a style="color: #fff" href="https://www.youtube.com/watch?v=hdUEumBsY9o"><i style="color: red" class="fab fa-2x fa-youtube"></i></a></button>
                        
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Apr 25th, 2019</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="video-border">
                    <div class="video">
                        <video autoplay controls class="" muted plays-inline width="250px" height="250px">
                            <source src="videos/young & wild.mp4" type="video/mp4">
                        </video>
                    </div>
                    <p>QM Von - Young & Wild (Official Music Video)</p>
                    <button style="width: 100%;" type="button" class="btn banner-btn btn-dark"><a style="color: #fff" href="https://www.youtube.com/channel/UCMA2n1omkzh68Z6ZXM_12yg"><i style="color: red" class="fab fa-2x fa-youtube"></i></a></button>
                        
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Feb 12th, 2019</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="video-border">
                    <div class="video">
                        <video autoplay controls class="" muted plays-inline width="250px" height="250px">
                            <source src="videos/HBD 19.mp4" type="video/mp4">
                        </video>
                    </div>
                    <p>This is a happy birthday video we made for a rapper and close friend of ours.</p>
                    <button style="width: 100%;" type="button" class="btn banner-btn btn-dark"><a style="color: #fff" href="https://www.youtube.com/channel/UCMA2n1omkzh68Z6ZXM_12yg"><i style="color: red" class="fab fa-2x fa-youtube"></i></a></button>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Jan 10th, 2019</small>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection