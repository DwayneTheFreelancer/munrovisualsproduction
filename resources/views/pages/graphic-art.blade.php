@extends('layouts.secondary')

@section('styles')
    <style>
        .graphic {
            margin: 200px 0 0px 0;
            height: 86vh;
        }

        .graphic .card img {
            width: 100%;
            height: 300px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid graphic">
        <div class="baguetteBoxOne gallery">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <a href="img/MVM Logo.jpg">
                            <img src="img/MVM Logo.jpg" alt="Munro Viusals Media Logo" class="card-img-top"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="img/Lance Cover.JPG">
                            <img src="img/Lance Cover.JPG" alt="Baby Prince Album Cover" class="card-img-top"/>
                        </a>
                    </div>
                </div>
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