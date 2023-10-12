@extends('welcome')
@section('content')

    <!-- header -->
    <header class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-6 col-xs-12">
                @section('content-nav')
                    @extends('navbar.mainnavRegistation')
                @endsection
                <!-- <a href="#" class="menu"><img src="assets/menu.png"></a> -->
                <div class="hero-text">
                    <h1><span>Hi, Join</span><br>The Crew..</h1>
                    <h3>casting registation</h3>
                    <a href="#register" class="btn btn-lg  btn-log">Register</a>

                </div>
            </div>
        </div>
    </div>
</header>

<!-- login box -->
<section class="case-study" id="register">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="sub-heading">Exclusively</h4>
                <h1 class="heading purple"><span class="purple">register</span> for <br>Star your carrer</h1>
                <!-- Swiper -->
                <div class="swiper-container client-swiper">
                    {{-- rEGISTER FORM --}}
                    @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif
                    @if (session('status-1'))
                        <h6 class="alert alert-danger">{{ session('status-1') }}</h6>
                    @endif

                    <div class="container body-container">
                        <!-- registation form -->
                        <form class="row g-3" method="POST" action="{{ url('add-users') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <p class="reg-txt">Registation Form</p>

                            <!-- select profile image -->
                            <div class="registation-form form-contact-information profile-img row g-3">
                                <img src="../images/web/profilePic.jpg" alt="" id="img-id">
                                <div class="col-md-6 div-inner">
                                    <label for="formFileSm" class="form-label">Input profile picture</label>
                                    <input class="form-control form-control-sm" id="formFileSm" type="file"
                                        name="profile_pic">
                                </div>
                            </div>
                            <hr>

                            <!-- personal details -->
                            <div class="registation-form form-name row g-3">
                                <label class="name-lable">Contact Information</label>
                                <!-- first name -->
                                <div class="col-md-4 fname">
                                    <label for="inputEmail4" class="form-label">First name</label>
                                    <input type="text" class="form-control" placeholder="First name"
                                        aria-label="First name" name="first_name" required>
                                </div>

                                <!-- last name -->
                                <div class="col-md-4 lname">
                                    <label for="inputEmail4" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last name"
                                        aria-label="Last name" name="last_name" required>
                                </div>

                                <!-- National id -->
                                <div class="col-md-4 userName">
                                    <label for="validationCustomUsername" class="form-label">National id</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" id="validationCustomUsername"
                                            aria-describedby="inputGroupPrepend" name="personal_ID" required>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>
                                <!-- gender -->
                                <div class="profile-img col-md-6 gender">

                                    <div class="form-check col-md-6">
                                        <input class="form-check-input" value="male" type="radio" name="gender"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            male
                                        </label>
                                    </div>
                                    <div class="form-check col-md-6">
                                        <input class="form-check-input" value="female" type="radio" name="gender"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            female
                                        </label>
                                    </div>
                                </div>

                                <!-- date of birth  -->
                                <div class="col-md-6 dateOfBirth">
                                    <label for="validationCustom02" class="form-label">Date of birth</label>
                                    <input type="text" class="form-control" id="birthday" placeholder="yyyy"
                                        name="date_of_birth" required>
                                    <input type="text" class="form-control" id="birthday" placeholder="mm"
                                        name="date_of_birth_month" required>
                                    <input type="text" class="form-control" id="birthday" placeholder="dd"
                                        name="date_of_birth_date" required>
                                    <div class="valid-feedback">

                                    </div>
                                </div>


                                <!-- mobile number -->
                                <div class="col-md-6">
                                    <label class="form-label">Contact number:</label>
                                    <input class="form-control" id="phone" type="tel" name="mobile_number"
                                        pattern="+94[0-9]{2}[0-9]{4}[0-9]{3}" />

                                </div>
                                <!-- whatsapp number -->
                                <div class="col-md-6">
                                    <label class="form-label">Whatsapp number:</label>
                                    <input class="form-control" id="phone" type="tel" name="whatsapp_number"
                                        pattern="+94[0-9]{2}[0-9]{4}[0-9]{3}" placeholder="0714567871" required />

                                </div>
                                <!-- email -->
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="email" required>
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                        else.</div>
                                </div>

                                <!-- home town -->
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Home town</label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                        placeholder="Home town" name="home_town" required>
                                </div>
                                <hr>
                            </div>

                            {{-- images --}}
                            <div class="registation-form form-name row g-3">
                                <label class="name-lable">Photos</label>

                                {{-- image 1 --}}
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 fname">
                                    <label for="inputEmail4" class="form-label">image 1</label>
                                    <img src="../images/web/profilePic.jpg" alt="" id="img-id-1">
                                    <div class="col-md-6 div-inner">
                                        <label for="formFileSm" class="form-label">Input profile picture</label>
                                        <input class="form-control form-control-sm" id="formFileSm-1" type="file"
                                            name="image_1">
                                    </div>
                                </div>

                                <!-- image 2 -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 fname">
                                    <label for="inputEmail4" class="form-label">image 2</label>
                                    <img src="../images/web/profilePic.jpg" alt="" id="img-id-2">
                                    <div class="col-md-6 div-inner">
                                        <label for="formFileSm" class="form-label">Input profile picture</label>
                                        <input class="form-control form-control-sm" id="formFileSm-2" type="file"
                                            name="image_2">
                                    </div>
                                </div>

                                <hr>

                            </div>


                            <!-- sizing -->
                            <div class="registation-form form-sizing row g-3">
                                <label class="name-lable">Sizing</label>
                                <!-- height -->
                                <div class="col-lg-4 col-md-4 fname">
                                    <label for="inputEmail4" class="form-label">Height</label>
                                    <input type="text" class="form-control" placeholder="Height"
                                        aria-label="Height" name="height">
                                </div>

                                <!-- hair color -->
                                <div class="col-lg-4 col-md-4 fname">
                                    <label for="inputEmail4" class="form-label">Hair Color</label>
                                    <input type="text" class="form-control" placeholder="Hair Color"
                                        aria-label="Hair Color" name="hair_color">
                                </div>

                                <!-- eye color -->
                                <div class="col-lg-4 col-md-4 fname">
                                    <label for="inputEmail4" class="form-label">Eye color</label>
                                    <input type="text" class="form-control" placeholder="Eye color"
                                        aria-label="Eye color" name="eye_color">
                                </div>

                                <!-- shoe size -->
                                <div class="col-lg-6 col-md-6 fname">
                                    <label for="inputEmail4" class="form-label">Shoe size</label>
                                    <input type="text" class="form-control" placeholder="Shoe size"
                                        aria-label="Shoe size" name="shoe_size">
                                </div>

                                <!-- pants size -->
                                <div class="col-lg-6 col-md-6 fname">
                                    <label for="inputEmail4" class="form-label">Pants size</label>
                                    <input type="text" class="form-control" placeholder="Pants size"
                                        aria-label="Pants size" name="pants_size">
                                </div>

                                <!-- top size -->
                                <div class="col-lg-6 col-md-6 fname">
                                    <label for="inputEmail4" class="form-label">Top size</label>
                                    <input type="text" class="form-control" placeholder="Top size"
                                        aria-label="Top size" name="top_size">
                                </div>

                                <!-- dress size -->
                                <div class="col-lg-6 col-md-6 fname">
                                    <label for="inputEmail4" class="form-label">Dress size</label>
                                    <input type="text" class="form-control" placeholder="Dress size"
                                        aria-label="Dress size" name="dress_size">
                                </div>
                                <hr>
                            </div>

                            <!-- skills -->
                            <div class="registation-form form-skills row g-3">
                                <div class="div">
                                    <label class="name-lable">Skills</label>

                                </div>

                                <!-- Action experience -->
                                <div class="col-lg-12 col-md-12 skill-form">
                                    <div class="div-skil">
                                        <label for="name-lable floatingTextarea">Action Exprience (If Any)</label>
                                    </div>
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="action_experience"></textarea>

                                </div>

                                <!-- Special skils -->
                                <div class="col-lg-12 col-md-12 skill-form">
                                    <div class="div-skil"> <label for="name-lable floatingTextarea">Special
                                            skills</label></div>
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="special_skills"></textarea>

                                </div>

                                <!-- Ads/films/tv show -->
                                <div class="col-lg-12 col-md-12 skill-form">
                                    <div class="div-skil">
                                        <label for="name-lable floatingTextarea">Ads / Films / TV Shows done in past
                                            two years(please enter
                                            companies /Advertisers here)</label>
                                    </div>

                                    <textarea class="form-control" placeholder="add here" id="floatingTextarea" name="ads_films_tv_shows"></textarea>

                                </div>
                                <hr>
                            </div>

                            <!-- Social Media names -->
                            <div class="registation-form form-social-media row g-3">
                                <label class="name-lable">Social Media</label>

                                <!-- face book -->
                                <div class="social col-lg-6 col-md-6">
                                    <i class="icon-sc fa-brands fa-facebook" style="color: #005af5;"></i>
                                    <input type="text" class="form-control" placeholder="face book"
                                        aria-label="face book" name="facebook">
                                </div>
                                <!-- instagram -->
                                <div class="social col-lg-6 col-md-6">
                                    <i class="icon-sc fa-brands fa-instagram" style="color: #d60000;"></i>
                                    <input type="text" class="form-control" placeholder="Instagram"
                                        aria-label="face book" name="instagram">
                                </div>
                                <!-- tik tok -->
                                <div class="social col-lg-6 col-md-6">
                                    <i class="icon-sc fa-brands fa-tiktok"></i>
                                    <input type="text" class="form-control" placeholder="Tik Tok"
                                        aria-label="face book" name="tiktok">
                                </div>
                                <!-- you tube -->
                                <div class="social col-lg-6 col-md-6">
                                    <i class="icon-sc fa-brands fa-youtube" style="color: #b30000;"></i>
                                    <input type="text" class="form-control" placeholder="You Tube"
                                        aria-label="face book" name="youtube">
                                </div>
                                <hr>
                            </div>

                            <!-- Remarks -->
                            <div class="registation-form form-social-media row g-3">
                                <label class="name-lable">Remark</label>

                                <!-- Action experience -->
                                <div class="col-lg-12 col-md-12 form-floating">
                                    <label for="name-lable floatingTextarea">Remark</label>
                                    <textarea class="form-control" placeholder="" id="floatingTextarea" name="remark"></textarea>

                                </div>
                                <hr>
                            </div>

                            <!-- button/password -->
                            <div class="registation-form form-social-media row g-3">
                                <!-- password -->
                                <div class="col-lg-6 col-md-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password" name="password" required>
                                </div>
                                <!-- confirm password -->
                                <div class="col-lg-6 col-md-6">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Re-Enter your Password" name="password" required>
                                </div>
                                <!-- button -->

                                <button type="submit" class="btn btn-lg btn-log">Submit</button>

                                <hr>
                            </div>
                        </form>
                    </div>

                    <p class="text-left"><a href="{{ url('login-form') }}">Login &#8594;</a></p>


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
                <a href="#register" class="btn btn-lg btn-log">Get in touch now</a>
            </div>
        </div>
    </div>
</section>


@endsection


@section('script')
<style>
    .btn-log {
        background-color: #320958 !important;
        border: 0px solid purple;
        color: white;
        /* margin: 20px; */
    }

    .skill-form {
        padding: 10px !important;
        border-radius: 20px;
    }

    .icon-sc {
        font-size: 30px;
        padding: 5px 15px 5px 10px;
        text-align: center;
    }

    .social {
        display: flex;
    }

    header.hero {
        background: url(../images/web/interested-woman-posing-sunglasses.jpg) no-repeat center center fixed;
        -webkit-background-size:cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        color: #fff;
        padding-bottom: 80px;
    }
</style>
@endsection
