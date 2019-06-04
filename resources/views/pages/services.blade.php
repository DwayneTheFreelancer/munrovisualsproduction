@extends('layouts.secondary')

@section('styles')
<style>
    .services-banner {
        height: 400px;
        background: url('/img/services2.jpg') center no-repeat;
        background-size: cover;
        background-height: 400px;
    }

    .services-banner-head {
        padding-top: 40px;
        color: #fff;
    }

    .services-container {
        margin: 100px auto 100px auto;
    }

    .book-service {
        margin: 100px auto 300px auto;
    }
</style>
@endsection

@section('content')
    <section class="services-banner jumbotron text-center">
        <div class="container">
            <h1 class="services-banner-head jumbotron-heading">CHECK OUT OUR SERVICES</h1>
        </div>
    </section>

    <div class="container services-info">
        <h2 style="color: red" class="text-center">2D & 3D ANIMATIONS COMING SOON!</h2>
        <h2 class="text-center">Our Services Cover Music Videos, Ads For Small Businesses, And Special Occasions</h2>
    </div>

    <div class="container services-container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/cameraman.jpg" alt=""width="100%" height="400px">
            </div>
            <div class="col-md-6">
                <h2>Pricing Structure</h2>
                <hr>
                <h3>Standard Package: $250 + travel fee</h3>
                <ul>
                    <li>DSLR Camera 1080 60p</li>
                    <li>Stablizer</li>
                    <li><h2>$50 Discount For Promo</h2></li>
                </ul>
                <h3>Gold Package: $350 + travel fee</h3>
                <ul>
                    <li>Standard Package + Lighting Attachment</li>
                    <li>Green Screen (Optional)</li>
                    <li><h2>$50 Discount For Promo</h2></li>
                </ul>
                <h3>Platinum Package: $500 + travel fee</h3>
                <ul>
                    <li>Drone</li>
                    <li>4k Resolution</li>
                    <li>Green Screen (Optional)</li>
                    <li><h2>$100 Discount For Promo</h2></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container book-service">
        <h1 class="text-center">Book A Video Shoot</h1>
        <!-- <form action="/services" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">First Name*</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Last Name*</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address*</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Phone Number</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">How Did You Hear About Us?*</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>YouTube</option>
                    <option>FaceBook</option>
                    <option>Instagram</option>
                    <option>Google Search</option>
                    <option>Refered By Friend</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Subject*</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Tell Us Your Video Idea*</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form> -->
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdBHV0j59Hrcqo8z5rrcbAeO1CcAV4UxMgff95WO3mEWtKEiA/viewform?embedded=true" width="100%" height="1346" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
    </div>
@endsection