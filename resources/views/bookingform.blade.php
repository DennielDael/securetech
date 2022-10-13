@extends('layouts.pages')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Booking Form</title>

  <!-- Google Font: Source Sans Pro -->

</head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="import/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="import/assets/css/style.min.css">
    <br><br><br>

<div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
<body>
<section>
<div class="checkout-section">
        <div class="container">
        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                          
            
            <!-- Start User Details Checkout Form -->
            <div class="checkout_form" data-aos="fade-up" data-aos-delay="400">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form name="bookingform" id="bookingform" action="{{url('booking-form') }}" method="post">
                            @csrf   
                            <h3>Booking Form</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>Full Name <span>*</span></label>
                                        <input type="text" id="fullname" name="fullname" class="form-control" value="{{ auth()->user()->name }}">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="default-form-box">
                                        <label>Phone<span>*</span></label>
                                        <input type="text" id="phone" name="phone" class="form-control" value="{{ auth()->user()->phone }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label> Email  <span>*</span></label>
                                        <input type="text" id="email" name="email" class="form-control" value="{{ auth()->user()->email}}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="default-form-box">
                                        <label>Address</Address></label>
                                        <input type="text" id="address" name="address" class="form-control" value="{{ auth()->user()->address}}">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-md btn-black-default-hover" type="submit">CONFIRM BOOK</button>
                        </form>
                    </div>




                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <h3>Your Services</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="">Items</th>
                                            <th class="">quantity</th>
                                            <th class="">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> Dahua 4 Channel DVR with Audio CCTV Package<strong></strong></td>
                                            <td></td>
                                            <td> 23,000</td>
                                        </tr>
                                        <tr>
                                            <td> 2MP Bullet Camera<strong> </strong></td>
                                            <td>1</div>
                                            </td>
                                            
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td> 2MP bullet Camera<strong></strong></td>
                                            <td>1</td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td> 2MP Dome Camera<strong></strong></td>
                                            <td>1</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <tr>
                                            <td> 2MP Dome Camera <strong></strong></td>
                                            <td>1</td>
                                            <td></td>
                                        
                                        <tr>
                                            <td> Wire 20m each camera / junction box / screws / and cable tie<strong></strong></td>
                                            <td>  </td>
                                            <td> FREE </td>
                                        </tr>
                                        <tr>
                                            <td> 20 inches LED Monitor <strong> × 1</strong></td>
                                            <td> </td>
                                            <td> FREE</td>
                                        </tr>
                                        <tr>
                                            <td>SUBTOTAL</th>
                                            <td></td>
                                            <td>P23,000</td>
                                        </tr>
                                        <tr>
                                            <td>VAT 12%</th>
                                            <td>-</td>
                                            <td></td>
                                        </tr>
                                        <tr class="order_total">
                                            <td>TOTAL COST</th>
                                            <td></td>
                                            <td><strong>P23,000</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- Start User Drt User Details Checkout Form -->
        </div>
</section>

        
<!-- <script src="import/assets/js/vendor/vendor.min.js"></script> -->
<!-- <script src="import/assets/js/plugins/plugins.min.js"></script> -->

    <!-- Main JS -->
<!-- <script src="import/ssets/js/main.js"></script> -->

    