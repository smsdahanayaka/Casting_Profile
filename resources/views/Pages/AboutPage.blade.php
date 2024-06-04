
@extends('welcome')
@section('content')

     <!-- header -->
     <header class="hero">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-6 col-xs-12">
              @section('content-nav')
                  @extends('navbar.mainnav')
              @endsection
              <!-- <a href="#" class="menu"><img src="assets/menu.png"></a> -->
              <div class="hero-text">
                <h1><span>Hi, Join</span><br>With Us..</h1>
                <h3>casting registation</h3>
                <a href="#login" class="btn btn-lg  btn-log">About</a>

              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- login box -->
      <section class="case-study" id="login">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="sub-heading">Exclusively</h4>
              <h1 class="heading purple"><span class="purple">works</span> with <br>Startups and founders</h1>
              <!-- Swiper -->
              <div class="swiper-container client-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide client-box">
                    <h3 class="text-left title">About us</h3>

                    @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>

                    @endif

                    {{-- login --}}
                    <div class="containerr">
                        <div class="row">
                            <div class="login-form">
                                {{-- about --}}

                            </div>


                        </div>
                    </div>
                    <p class="text-left"><a href="{{ url('registation-form') }}">Register &#8594;</a></p>
                  </div>
                </div>

              </div>
              <!-- Add Arrows -->

            </div>
          </div>
        </div>
      </section>


      <!-- Contact Banner -->
      <section class="contact-banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h1>Let’s talk</h1>
              <a href="#login" class="btn btn-lg btn-log">Get in touch now</a>
            </div>
          </div>
        </div>
      </section>


@endsection

@section('script')
    <style>
        .btn-log {
        background-color: #E4D2BA !important;
        border: 0px solid purple;
        font-weight: 500;
        color: #101214;
    }
    .btn-log:hover {
        background-color: #101214 !important;
        border: 0px solid purple;
        color: white;
    }

        .login-form{
            width: 70vw;
            margin: 0 auto;

        }
        .form-group{
            padding: 10px;
        }
        .text-left{
            padding-top: 30px;
        }



    </style>
@endsection
