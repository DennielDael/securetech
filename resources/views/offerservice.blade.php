@extends('layouts.pages')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Servicesoffer</title>


</head>

<body>
<!-- <section class="contact-us">
    <div class="container">
    <h3>Our Services Offer</h3>
    <br>
      <div class="row">
        <div class="col-lg-4">
          <div class="info-item">
            <i class="fa fa-video-camera"></i>
            <h4>CCTV Installation</h4>
            <span><a href="#" data-toggle="modal" data-target="#cctvinstallation" class=" small-box-footer">View Details</a></span>
          </div>  
        </div>

        <div class="col-lg-4">
          <div class="info-item">
            <i class="fa fa-fire"></i>
            <h4>Fire Alarm System</h4>
            <span><a href="#">View Details</a></a></span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="info-item">
            <i class="fa fa-microchip"></i>
            <h4>Access System</h4>
            <span><a href="#">View Details</a></a></span>
          </div>
        </div>
              <br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="col-lg-4">
          <div class="info-item">
            <i class="fa fa-map-marked"></i>
            <h4>Burglar Instructions system</h4>
            <span><a href="#">View Details</a></a></span>
          </div>
        </div>
      </div>
    </div>
</section> -->

<section class="contact-us">
    <div class="container">
      <h3>Our Services Offer</h3>
      <br>
        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-4">
                    <div class="info-item">
                      <i class="fa fa-video-camera"></i>
                      <h4>{{$service->service_name }}</h4>
                      <span><a href=""  data-toggle="modal" data-target="#cctvinstallation{{$service->id}}"  class=" small-box-footer">View Details</a></span>
                    </div>  
                </div>
            @endforeach
        </div>
    </div>
</section>

@foreach($services as $service)
<div class="modal fade" id="cctvinstallation{{$service->id}}">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">{{$service->service_name }}</h4>
            </div>
            <div class="modal-body">
              <table class="table table-bordered">
                <h5 class="text-center">PRICE QUOTATION</h5>
                    <thead>
                      <tr> 
                        <th>SERVICES NAME</th>
                        <th>CODE</th>
                        <th>SPECIFICATION/ DESCRIPTION</th>
                       
                        <th>UNIT PRICE</th>
                        <th>PRICE</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$service->service_name }}</td>
                        <td>{{$service->code_name }}</td>
                        <td>{{$service->specification_description }}</td>
                        <td>{{$service->unit_price }}</td>
                        <td>{{$service->price }}</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="modal-footer justify">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="/surveyform"><button type="button" class="btn btn-primary">Request Survey</button></a>
              <a href="/bookingform"><button type="button" class="btn btn-primary">Request Booking</button></a>
            </div>
          </div>
      </div>
  </div>
@endforeach


 
  















  