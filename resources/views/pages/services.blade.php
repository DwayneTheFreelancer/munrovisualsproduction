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
        margin: 100px auto 100px auto;
    }

    .service-plans {
        width: 100%;
        height: 200px;
        margin: 0px 0 350px 0;
    }

    .art-request {
        width: 100%;
        height: 200px;
        margin: 0px auto 250px auto;
    }
</style>
@endsection

@section('content')
    <section class="services-banner jumbotron text-center">
        <div class="container">
            <h1 class="services-banner-head jumbotron-heading">CHECK OUT OUR SERVICES</h1>
        </div>
    </section>

    <div class="container book-service">
        <h1 class="text-center">Book A Video Shoot</h1>
        <h2 style="color: red"><center>Due to the problems with payments for past videos ALL BOOKINGS WILL REQUIRE 50% DOWN PAYMENT AND WON'T BE RELEASED UNTIL OTHER 50% OF PAYMENT IS RECIEVED NO EXCEPTIONS</center></h2>
        <h3 class="text-center">Locations we shoot in NY: Brooklyn, Manhattan, Queens NO OTHER LOCATIONS YET</h3>
    </div>

        <div class="container-fluid service-plans">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Basic Package Price: $250</h5>
                            <ul>
                                <li>Time 2hrs per day + up to 2 days to shoot scenes</li>
                                <li>Travel fee: $20 included + tax</li>
                                <li>Camera 1080 60p HD + Stablizer</li>
                                <li>Professional Software Editing</li>
                            </ul>
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="C4QM7KMLFJ3EL">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Platinum Package Price: $350</h5>
                            <ul>
                                <li>Time 3hrs per day + up to 3 days to shoot scenes</li>
                                <li>Travel fee: $25 included + tax</li>
                                <li>Camera 1080 60p HD + Stablizer + lighting</li>
                                <li>Professional Software Editing</li>
                            </ul>
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="SEDZB83YQ72AE">
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add payment option for Graphic Art And Photography -->
        <div class="container art-request">
            <h1 class="text-center">Book Graphic Art</h1>
            <div class="row">
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-title">Graphic Art - Price: $45</h5>
                        <h5>You don't pay till after your satisfied Payments through Paypal, Zelle, or Apple Cash ONLY!</h5>
                        <p class="card-text">Tell us your vision of what you want and make sure to be very descriptive.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                        Book Graphic Art Now
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <!-- <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5> -->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <div class="modal-body">
                                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdxaBu-mnP96t6jxj9rlI-MrvaMIQwHwvqlEG6mhoLa8h-8Pw/viewform?embedded=true" width="100%" height="891" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
                                </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
