@extends('layouts.app')

@section('title')
    Travellion
@endsection
@section('content')
<header class="text-center">
        <h1>Your Adventure Travel <br> Expert In Indonesia</h1>
        <p>You will see beautiful <br> moment you never seen before</p>
        <a href="{{route('detail')}}" class="btn btn-get-started px-4 mt-2">Get Started</a>
    </header>
    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 stats-detail">
                    <h2>10K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 stats-detail">
                    <h2>10</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 stats-detail">
                    <h2>15</h2>
                    <p>Partners</p>
                </div>
                <div class="col-3 stats-detail">
                    <h2>1K</h2>
                    <p>Hotels</p>
                </div>
            </section>
        </div>
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col-3 text-left section-popular-heading">
                        <h2>Wisata Populer</h2>
                        <p>We offer the perfect variety of experiences to satisfy</p>
                    </div>
                    <div class="col"></div>
                    <div class="col-md-2 col-sm-3 col-lg-2 section-popular-content">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontends/images/pulau\ padar.jpg');background-size: cover;">
                            <div class="travel-country">Indonesia</div>
                            <div class="travel-location">Pulau Padar</div>
                            <div class="travel-button mt-auto">
                                <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-lg-2 section-popular-content">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontends/images/raja\ ampat.jpg');background-size: cover;">
                            <div class="travel-country">Indonesia</div>
                            <div class="travel-location">Raja Ampat</div>
                            <div class="travel-button mt-auto">
                                <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-lg-2 section-popular-content">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontends/images/Bali.jpg');background-size: cover;">
                            <div class="travel-country">Indonesia</div>
                            <div class="travel-location">Bali</div>
                            <div class="travel-button mt-auto">
                                <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-lg-2 section-popular-content">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontends/images/lombok.jpg');background-size: cover;">
                            <div class="travel-country">Indonesia</div>
                            <div class="travel-location">Lombok</div>
                            <div class="travel-button mt-auto">
                                <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-network">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-4">
                        <img src="frontends/images/partner.png" alt="">
                    </div>
                    <div class="col-md-4 col-sm-2 text-right">
                        <h2>Our Networks</h2>
                        <p>
                            Companies are trusted us <br>
                            more than just a trip
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They're Loving Us</h2>
                        <p>moments were giving <br>them the best experience</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontends/images/Mask Group.png" alt="" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Nia</h3>
                                <p class="testimonial">
                                    "It was glorious and i could <br> not stop 
                                    to say woohooo <br> for every single 
                                    moment."
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To Raja Ampat
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontends/images/Testi 1.png" alt="" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Tia</h3>
                                <p class="testimonial">
                                    "It was glorious and i could <br> not stop 
                                    to say woohooo <br> for every single 
                                    moment."
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To Raja Ampat
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontends/images/testi 2.png" alt="" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Kyra</h3>
                                <p class="testimonial">
                                    "It was glorious and i could <br> not stop 
                                    to say woohooo <br> for every single 
                                    moment."
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To Raja Ampat
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{route('detail')}}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection