@extends('layouts.app')
@section('title','Detail Travel')
@section('content')
<main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>Raja Ampat</h1>
                            <p>Indonesia</p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="frontends/images/raja ampat details.jpg" class="xzoom" id="xzoom-default" Xoriginal="frontends/images/raja ampat details.jpg" width="640px" alt="">
                                </div>
                                <div class="xzoom-thumbs">
                                    <a href="frontends/images/details.jpg">
                                        <img src="frontends/images/details.jpg" class="xzoom-gallery" width="128" Xpreview="frontends/images/details.jpg" alt="">
                                    </a>
                                    <a href="frontends/images/details.jpg">
                                        <img src="frontends/images/details.jpg" class="xzoom-gallery" width="128" Xpreview="frontends/images/details.jpg" alt="">
                                    </a>
                                    <a href="frontends/images/details.jpg">
                                        <img src="frontends/images/details.jpg" class="xzoom-gallery" width="128" Xpreview="frontends/images/details.jpg" alt="">
                                    </a>
                                    <a href="frontends/images/details.jpg">
                                        <img src="frontends/images/details.jpg" class="xzoom-gallery" width="128" Xpreview="frontends/images/details.jpg" alt="">
                                    </a>
                                    <a href="frontends/images/details.jpg">
                                        <img src="frontends/images/details.jpg" class="xzoom-gallery" width="128" Xpreview="frontends/images/details.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <h2>Tentang Wisata</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit porro quas natus id hic nobis corrupti, facere dolores accusamus quae modi vero odit harum fugiat ut totam quidem atque voluptatem.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsa quibusdam vero veniam nihil, natus aspernatur magni pariatur? Exercitationem, non unde veniam assumenda temporibus vitae perspiciatis odio labore voluptatum animi?</p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <img src="frontends/images/icon schedule.png" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Event</h3>
                                        <p>Tari Gendang Belek</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="frontends/images/icon food.png" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>Lebui</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="frontends/images/icon language.png" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>
                                Members are going
                            </h2>
                            <div class="members my-2">
                                <img src="frontends/images/Testi 1.png" width="40px" class="member-image mr-1" alt="">
                                <img src="frontends/images/Testi 1.png" width="40px" class="member-image mr-1" alt="">
                                <img src="frontends/images/Testi 1.png" width="40px" class="member-image mr-1" alt="">
                                <img src="frontends/images/Testi 1.png" width="40px" class="member-image mr-1" alt="">
                                <img src="frontends/images/Testi 1.png" width="40px" class="member-image mr-1" alt="">
                                <img src="frontends/images/Testi 1.png" width="40px" class="member-image mr-1" alt="">
                            </div>
                            <hr>
                            <h2>Trip Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50%" class="text-right">
                                        32 Aug, 2020
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">
                                        4D 3N
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-right">
                                        Open Trip
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">
                                        $80,00 / person
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            <a href="{{route('checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">
                                Join Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('prepend-style')
    <link rel="stylesheet" href="{{url('frontends/libraries/xzoom/xzoom.css')}}">
@endpush
@push('addon-script')
<script src="{{url('frontends/libraries/xzoom/xzoom.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth:500,
                title:false,
                tint:"#333",
                Xoffset:15
            });
        });
    </script>
@endpush