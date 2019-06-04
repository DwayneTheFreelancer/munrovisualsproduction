@extends('layouts.secondary')

@section('styles')

<style>
    .portfolio-banner {
        height: 400px;
        background: url('/img/portfolio-banner.jpg') center no-repeat;
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

    

    <div class="container video-container">
        <div class="row">

            Hello World

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