@extends('layouts.pages')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Survey Form</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Google Font: Source Sans Pro -->

</head>
<br><br><br>
<body class="hold-transition sidebar-mini">
<div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
    <div class="wrapper">
    <!-- Main content -->
        <section class="content" >
            <div class="container-fluid">
                <div class="row">
                <!-- left column -->
                    <div class="col-3"></div>
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"> Request For CCTV Survey</h3>
                                    <!-- <img class="dahua" src="landpage/assets/images/picture-logo.png"></td><br><div class="sectech">SECURTECH SECURITY SYSTEM SERVICE
                                    <br><span>Moxcir Bldg.,Hayes St.Cor.8th St, Nazareth, Cagayan de Oro City</span><br>Request For CCTV Survey</div> -->
                                </div>
                    
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                        
                                <form name="surveyform" id="surveyform" action="{{url('survey-form') }}" method="post">   
                                    
                                    @csrf   
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" id="fullname" name="fullname" class="form-control"  value="{{ auth()->user()->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" id="company_name" name="company_name" class="form-control" placeholder="enter company name (optional)">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" id="address" name="address" class="form-control" value="{{ auth()->user()->address}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" id="description" name="description" class="form-control" placeholder="description">
                                        </div>
                                    </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary" >Submit</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



      


 