<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

   

    <!-- Bootstrap core CSS -->
    <link href="landpage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="landpage/assets/css/fontawesome.css">
    <link rel="stylesheet" href="landpage/assets/css/templatemo-snapx-photography.css">
    <link rel="stylesheet" href="landpage/assets/css/owl.css">
    <link rel="stylesheet" href="landpage/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    
    
<!--

TemplateMo 576 SnapX Photography

https://templatemo.com/tm-576-snapx-photography

-->
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/securetech" class="logo"> 
                        <img src="landpage/assets/images/securetech-logo-4.png" alt="SnapX Photography Template">
                        
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/securetech" class="active">Home</a></li>
                        <!-- <li><a href="/prduct">Product</a></li> -->
                        <li><a href="offerservice">Services</a></li>
                        <li><a href="/about-us">About us</a></li>
                        <li><a href="/contact-us">Contact us</a></li>
                        <!-- <li><a href="users.html">Users</a></li> -->
                     
                    <div class="border-button">
                      @guest
                      <a id="modal_trigger" href="#modal" class="sign-in-up"><i class="fa fa-user"></i> Sign In/Up</a>
                      @endguest
                      @auth 
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-user"></i>
                      {{ Auth::user()->name }}
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="/c_dashboard">Dashboard</a>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf</form> 
                      </div>
                    </div>
                      @endauth
                    </div>
                    <!-- <a class='menu-trigger'>
                        <span>Menu</span>
                    </a> -->
                    </ul>  

                   
                      <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <!-- <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a> -->

                <!-- <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a> -->
            </div>

            <div class="centeredText">
                <span></span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form action="{{ route('login') }}" method="POST">
            @csrf
              <div class="">
                    <label for="email" class="">{{ __('Email Address') }}</label>
                    <!-- <label>Email / Username</label> -->
                    <!-- <input name="username" type="text" id="username" /> -->

                    <div class="">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                        @enderror
                    </div>
              </div>
              <br />

              <div class="">
                <label for="password" class="">{{ __('Password') }}</label>
                <!-- <label>Password</label> -->
                <!-- <input name="password" type="password" id="password" /> -->
                <div class="">
                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                          <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                </div>
              </div>
              <br />
              


                <!-- <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div> -->

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red">{{ __('Login') }}</button></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form method="POST" action="{{ route('register') }}">
              @csrf
                <label for="name" class="">{{ __('Full Name') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Fullname">
                @error('name')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                @enderror
       

                <label for="phone" class="">Phone</label>
                <input id="phone" type='number' class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Enter Phone Number">
                @error('phone')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                @enderror
    

                <label for="address" class="">{{ __('Address') }}</label>
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus placeholder="Enter Address">
                @error('address')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                @enderror
         
                <label for="email" class="">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email">
                @error('email')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                @enderror
            

                <label for="password" class="">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
      

                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-Enter Password">
            

             

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red"> {{ __('Register') }}</button></div>
                </div>
            </form>
        </div>        
    </section>
  </div>
    <div class="container">
         @yield('content')
    </div>



    
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 <a href="#">Securetech</a> All rights reserved. 
          
          
        </div>
      </div>
    </div>
  </footer>


  
  <script src="landpage/vendor/jquery/jquery.min.js"></script>
  <script src="landpage/vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="landpage/assets/js/isotope.min.js"></script>
  <script src="landpage/assets/js/owl-carousel.js"></script>
  <script src="landpage/assets/js/wow.js"></script>
  <script src="landpage/assets/js/tabs.js"></script>
  <script src="landpage/assets/js/popup.js"></script>
  <script src="landpage/assets/js/custom.js"></script>


  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

  </body>
</html>