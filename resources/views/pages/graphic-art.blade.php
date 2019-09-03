@extends('layouts.secondary')

@section('styles')
    <style>
        .graphic {
            margin: 200px auto;
            /* height: 86vh; */
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
                <div class="col-md-3">
                    <div class="card">
                        <a href="img/Dwayne Protrait.PNG">
                            <img src="img/Dwayne Protrait.PNG" alt="Munro Visuals Media Protrait" class="card-img-top"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="img/Unbreakable.JPG">
                            <img src="img/Unbreakable.JPG" alt="Munro Viusals Media Graphic Art" class="card-img-top"/>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <a href="img/MVM Anime.JPG">
                            <img src="img/MVM Anime.JPG" alt="Munro Viusals Media Anime" class="card-img-top"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="img/X.JPG">
                            <img src="img/X.JPG" alt="Munro Viusals Media XXXTentacion" class="card-img-top"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="img/Heavenly Featurez.JPG">
                            <img src="img/Heavenly Featurez.JPG" alt="Munro Viusals Media Graphic Art" class="card-img-top"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="img/Pilar Portrait.PNG">
                            <img src="img/Pilar Portrait.PNG" alt="Munro Viusals Media Graphic Art" class="card-img-top"/>
                        </a>
                    </div>
                </div>
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