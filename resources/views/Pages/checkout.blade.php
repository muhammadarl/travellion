@extends('layouts.checkout')
@section('title','Checkout')

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
                                <li class="breadcrumb-item">
                                    Details
                                </li>
                                <li class="breadcrumb-item active">
                                    Checkout
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>Who's Going?</h1>
                            <p>Trip To Raja Ampat, Indonesia</p>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>Passport</td>
                                            <td>Visa</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="{{url('frontends/images/Testi 1.png')}}" alt=""></td>
                                            <td class="align-middle">Nia</td>
                                            <td class="align-middle">JPN</td>
                                            <td class="align-middle">N/A</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <a href="#"><img src="frontends/images/icon-x.png" alt=""></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="{{url('frontends/images/Testi 2.png')}}" alt=""></td>
                                            <td class="align-middle">Tya</td>
                                            <td class="align-middle">IDN</td>
                                            <td class="align-middle">N/A</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <a href="#"><img src="frontends/images/icon-x.png" alt=""></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form action="" class="form-inline">
                                    <label for="inputUsername" class="sr-only">Name</label>
                                    <input type="text" name="inputUsername" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Username">
                                    <label for="inputVisa" class="sr-only">Visa</label>
                                    <select name="inputVisa" class="custom-select mb-2 mr-sm-2" id="inputVisa">
                                        <option value="VISA" selected>Visa</option>
                                        <option value="30Days">30 Days</option>
                                        <option value="N/A">N/A</option>
                                    </select>
                                    <label for="doepassport" class="sr-only">DOE PASSPORT</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker" id="doepassport" placeholder="DOE PASSPORT">
                                    </div>
                                    <button class="btn btn-add-now mb-2 px-4"> Add Now</button>
                                </form>
                                <h3 class="mt-2 mb-0">Note</h3>
                                <p class="disclaimer mb-0">
                                    You're only able to invite member that has registered in travellion
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Checkout Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Member</th>
                                    <td width="50%" class="text-right">
                                        2 Person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Additional Visa</th>
                                    <td width="50%" class="text-right">
                                        $190.00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Trip Price</th>
                                    <td width="50%" class="text-right">
                                        $ 80,00/Person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Sub Total</th>
                                    <td width="50%" class="text-right">
                                        $280,00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total (+unique)</th>
                                    <td width="50%" class="text-right text-total">
                                        <span class="text-red">$279,</span>
                                        <span class="text-orange">10</span>
                                    </td>
                                </tr>
                            </table>
                            <hr/>
                            <h2>Payment Instructions</h2>
                            <p class="payment-instruction">Please complete your payment before continue to the wonderful trip</p>
                            <div class="bank">
                                <div class="bank-item pb-3">
                                    <img src="{{url('frontends/images/bank bca.png')}}" width="50px" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>PT Travellion</h3>
                                        <p>0881 8829 8800
                                            <br> Bank Central Asia
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                    <img src="{{url('frontends/images/bni.png')}}" alt="" width="50px" class="bank-image">
                                    <div class="description">
                                        <h3>PT Travellion</h3>
                                        <p>0881 8829 8800
                                            <br> Bank Nasional Indonesia
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="join-container">
                            <a href="{{route('checkout-success')}}" class="btn btn-block btn-join-now mt-3 py-2">
                                I Have Made Payment
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="#" class="text-muted"> Cancel Booking</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('prepend-style')
    <link rel="stylesheet" href="{{url('frontends/libraries/gijgo/css/gijgo.min.css')}}">
@endpush
@push('addon-script')
<script src="{{url('frontends/libraries/gijgo/js/gijgo.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons:{
                    rightIcon:'<img src="{{url('frontends/images/calendar-icon.png')}}" width="18"/>'
                }
            })
        });
    </script>
@endpush