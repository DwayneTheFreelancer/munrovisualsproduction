@extends('layouts.secondary')

@section('styles')
    <style>
        .photography {
            margin: 100px 0 0 0;
            height: 86vh;
        }

        .photography .card img {
            width: 100%;
            height: 300px;
        }
    </style>
@endsection

@section('content')

    // Setup display with baguetteBox to give an instagram like display
    <div class="container-fluid photography">
        <div class="baguetteBoxOne gallery">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <a href="img/Prom Pic 3.png">
                            <img src="img/Prom Pic 3.png" alt="2019 Prom Picture" class="card-img-top"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        window.onload = function() {
            baguetteBox.run('.baguetteBoxOne', {
                captions: function(element) {
                    return element.getElementsByTagName('img')[0].alt;
                }
            });
        }
    </script>
@endsection