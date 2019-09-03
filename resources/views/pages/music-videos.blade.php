@extends('layouts.secondary')

@section('styles')
    <style>
        .music-videos {
            /* height: 86vh; */
            margin: 100px auto; 
        }

        .album {
            margin: 0 auto;
        }

        .btn-group {
            width: 100%;
        }
    </style>
@endsection

@section('content')

    <div class="container music-videos">

        <div class="album py-5 bg-dark ">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <iframe width="100%" height="400px" src="https://www.youtube.com/embed/28I1omTVLiM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">Valor - Struggle</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-lg btn-outline-secondary"><a href="https://www.youtube.com/watch?v=28I1omTVLiM">Watch Video</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <iframe width="100%" height="400px" src="https://www.youtube.com/embed/zcG0v-d1H-8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">Bally Durant - YKTVz</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-lg btn-outline-secondary"><a href="https://www.youtube.com/watch?v=zcG0v-d1H-8">Watch Video</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <iframe width="100%" height="400px" src="https://www.youtube.com/embed/6ymWaP0SnkI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <p class="card-text">QM Von - Young & Wild</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-lg btn-outline-secondary"><a href="https://www.youtube.com/watch?v=6ymWaP0SnkI">Watch Video</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- Setup display with baguetteBox to give an instagram like display -->

@endsection

@section('script')

@endsection