@extends('welcome')

@section('content')
    <!-- header -->
    <header class="hero">

    @section('content-nav')
        @extends('navbar.user.userprofilenav')
    @endsection

</header>

<!-- login box -->
<section class="case-study" id="register">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="heading purple"><span class="purple">{{ $adminData->first_name }} {{ $adminData->last_name }}
                </h1>
                <!-- Swiper -->
                <div class="swiper-container client-swiper">
                    {{-- rEGISTER FORM --}}
                    @if (session('status'))
                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                    @endif


                    <div class="container body-container">
                        <!-- registation form -->
                        <form class="row g-3" method="POST" action="{{ url('update-users-done/' . $adminData->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- select profile image -->
                            <div class="registation-form form-contact-information profile-img row g-3">
                                <img src="{{ asset('images/users/' . $adminData->profile_pic) }}" alt="profileImg"
                                    id="img-id">
                                <div class="col-md-6 div-inner">
                                    <label for="formFileSm" class="form-label">Input profile picture</label>
                                    <input class="form-control form-control-sm" id="formFileSm" type="file"
                                        name="profile_pic">
                                </div>
                            </div>
                            <hr>
                            {{-- images --}}
                            <div class="registation-form form-name row g-3">
                                <label class="name-lable">Photos</label>

                                {{-- image 1 --}}
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 fname">
                                    <img src="{{ asset('images/user-img-1/' . $adminData->image_1) }}" alt="codeLonk"
                                        id="img-id-1">
                                    <div class="col-md-6 div-inner">
                                        <label for="formFileSm" class="form-label">change your first picture</label>
                                        <input class="form-control form-control-sm" id="formFileSm-1" type="file"
                                            name="image_1">
                                    </div>
                                </div>

                                <!-- image 2 -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 fname">
                                    <img src="{{ asset('images/user-img-2/' . $adminData->image_2) }}" alt="codeLink"
                                        id="img-id-2">
                                    <div class="col-md-6 div-inner">
                                        <label for="formFileSm" class="form-label">change your 2nd picture</label>
                                        <input class="form-control form-control-sm" id="formFileSm-2" type="file"
                                            name="image_2">
                                    </div>
                                </div>

                                <hr>

                            </div>


                            <!-- personal details -->
                            <div class="registation-form form-name row g-3">
                                <label class="name-lable">Contact Information</label>
                                <!-- first name -->
                                <div class="col-md-4 fname">
                                    <label for="inputEmail4" class="form-label">First name</label>
                                    <input type="text" class="form-control" value="{{ $adminData->first_name }}"
                                        aria-label="First name" name="first_name" required>
                                </div>

                                <!-- last name -->
                                <div class="col-md-4 lname">
                                    <label for="inputEmail4" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" value="{{ $adminData->last_name }}"
                                        aria-label="Last name" name="last_name" required>
                                </div>

                                <!-- National id -->
                                <div class="col-md-4 userName">
                                    <label for="validationCustomUsername" class="form-label">National id</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" value="{{ $adminData->personal_ID }}"
                                            name="personal_ID" required>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                </div>


                                <!-- date of birth  -->
                                <div class="col-md-6 dateOfBirth">
                                    <label for="validationCustom02" class="form-label">Date of birth</label>
                                    <input type="text" class="form-control" id="birthday"
                                        value="{{ $adminData->date_of_birth }}" name="date_of_birth" required>
                                    <input type="text" class="form-control" id="birthday"
                                        value="{{ $adminData->date_of_birth_month }}" name="date_of_birth_month"
                                        required>
                                    <input type="text" class="form-control" id="birthday"
                                        value="{{ $adminData->date_of_birth_date }}" name="date_of_birth_date"
                                        required>
                                    <div class="valid-feedback">

                                    </div>
                                </div>


                                {{-- genarate age --}}

                                @php
                                    // Calculate the age based on the date of birth

                                    $currentYear = now()->year;
                                    $birthYear = $adminData->date_of_birth;

                                    $age = $currentYear - $birthYear;
                                @endphp

                                <!-- age -->
                                <div class="col-md-6 age">
                                    <label for="validationCustom02" class="form-label">Age</label>
                                    <input type="text" class="form-control" id="age"
                                        value="{{ $age }}" name="age">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>

                                <!-- mobile number -->
                                <div class="col-md-6">
                                    <label class="form-label">Contact number:</label>
                                    <input class="form-control" id="phone" type="tel"
                                        value="{{ $adminData->mobile_number }}" name="mobile_number"
                                        pattern="+94[0-9]{2}[0-9]{4}[0-9]{3}" />

                                </div>

                                <!-- whatsapp number -->
                                <div class="col-md-6">
                                    <label class="form-label">Whatsapp number:</label>
                                    <input class="form-control" id="phone" type="tel" name="whatsapp_number"
                                        pattern="+94[0-9]{2}[0-9]{4}[0-9]{3}"
                                        value="{{ $adminData->whatsapp_number }}" required />

                                </div>
                                <!-- email -->
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="email" value="{{ $adminData->email }}"
                                        required>
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                        else.</div>
                                </div>

                                <!-- home town -->
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Current City</label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                        value="{{ $adminData->home_town }}" name="home_town" required>
                                </div>

                                <!-- Address -->
                                <div class="col-lg-12">
                                    <label for="exampleInputEmail1" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                        value="{{ $adminData->address }}" name="address" required>
                                </div>
                                <hr>
                            </div>

                            <!-- sizing -->
                            <div class="registation-form form-sizing row g-3">
                                <label class="name-lable">Sizing</label>
                                <!-- height -->
                                <div class="col-lg-4 col-md-4 fname">
                                    <label for="inputEmail4" class="form-label">Height</label>
                                    <input type="text" class="form-control" value="{{ $adminData->height }}"
                                        aria-label="Height" name="height">
                                </div>

                                <!-- hair color -->
                                <div class="col-lg-4 col-md-4 fname">
                                    <label for="inputEmail4" class="form-label">Hair Color</label>
                                    <input type="text" class="form-control" value="{{ $adminData->hair_color }}"
                                        aria-label="Hair Color" name="hair_color">
                                </div>

                                <!-- eye color -->
                                <div class="col-lg-4 col-md-4 fname">
                                    <label for="inputEmail4" class="form-label">Eye color</label>
                                    <input type="text" class="form-control" value="{{ $adminData->eye_color }}"
                                        aria-label="Eye color" name="eye_color">
                                </div>

                                <!-- shoe size -->
                                <div class="col-lg-6 col-md-6 fname">
                                    <label for="inputEmail4" class="form-label">Shoe size</label>
                                    <input type="text" class="form-control" value="{{ $adminData->shoe_size }}"
                                        aria-label="Shoe size" name="shoe_size">
                                </div>

                                <!-- pants size -->
                                <div class="col-lg-6 col-md-6 fname">
                                    <label for="inputEmail4" class="form-label">Pants size</label>
                                    <input type="text" class="form-control" value="{{ $adminData->pants_size }}"
                                        aria-label="Pants size" name="pants_size">
                                </div>

                                <!-- top size -->
                                <div class="col-lg-6 col-md-6 fname">
                                    <label for="inputEmail4" class="form-label">Top size</label>
                                    <input type="text" class="form-control" value="{{ $adminData->top_size }}"
                                        aria-label="Top size" name="top_size">
                                </div>

                                <!-- dress size -->
                                <div class="col-lg-6 col-md-6 fname">
                                    <label for="inputEmail4" class="form-label">Dress size</label>
                                    <input type="text" class="form-control" value="{{ $adminData->dress_size }}"
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
                                    <input type="text" class="form-control"
                                        value="{{ $adminData->action_experience }}" id="floatingTextarea"
                                        name="action_experience">

                                </div>

                                <!-- Special skils -->
                                <div class="col-lg-12 col-md-12 skill-form">
                                    <div class="div-skil"> <label for="name-lable floatingTextarea">Special
                                            skills</label></div>
                                    <input type="text" class="form-control"
                                        value="{{ $adminData->special_skills }}" id="floatingTextarea"
                                        name="special_skills">

                                </div>

                                <!-- Ads/films/tv show -->
                                <div class="col-lg-12 col-md-12 skill-form">
                                    <div class="div-skil">
                                        <label for="name-lable floatingTextarea">Ads / Films / TV Shows done in past
                                            two years(please enter
                                            companies /Advertisers here)</label>
                                    </div>

                                    <input type="text" class="form-control"
                                        value="{{ $adminData->ads_films_tv_shows }}" name="ads_films_tv_shows">

                                </div>
                                <hr>
                            </div>

                            <!-- Social Media names -->
                            <div class="registation-form form-social-media row g-3">
                                <label class="name-lable">Social Media</label>

                                <!-- face book -->
                                <div class="social col-lg-6 col-md-6">
                                    <i class="icon-sc fa-brands fa-facebook" style="color: #005af5;"></i>
                                    <input type="text" class="form-control" value="{{ $adminData->facebook }}"
                                        aria-label="face book" name="facebook">
                                </div>
                                <!-- instagram -->
                                <div class="social col-lg-6 col-md-6">
                                    <i class="icon-sc fa-brands fa-instagram" style="color: #d60000;"></i>
                                    <input type="text" class="form-control" value="{{ $adminData->instagram }}"
                                        aria-label="face book" name="instagram">
                                </div>
                                <!-- tik tok -->
                                <div class="social col-lg-6 col-md-6">
                                    <i class="icon-sc fa-brands fa-tiktok"></i>
                                    <input type="text" class="form-control" value="{{ $adminData->tiktok }}"
                                        aria-label="face book" name="tiktok">
                                </div>
                                <!-- you tube -->
                                <div class="social col-lg-6 col-md-6">
                                    <i class="icon-sc fa-brands fa-youtube" style="color: #b30000;"></i>
                                    <input type="text" class="form-control" value="{{ $adminData->youtube }}"
                                        aria-label="face book" name="youtube">
                                </div>
                                <hr>
                            </div>


                            <!-- button/password -->
                            <div class="registation-form form-social-media row g-3">
                                <!-- password -->
                                <div class="col-lg-6 col-md-6">
                                    <label for="exampleInputPassword1">New Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="New Password" name="password" required>
                                </div>
                                <!-- confirm password -->
                                <div class="col-lg-6 col-md-6">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Re-Enter your Password" name="password" required>
                                </div>
                                <!-- button -->
                                <div class="container">
                                    <div class="row">
                                        <div class="btn-container">
                                            <a href=""></a>
                                            <button type="submit" class="btn btn-primary btn-log">update</button>
                                            <button type="" class="btn btn-primary btn-log btn-log-delete"><a
                                                    href="{{ url('delet-user-from-user/' . $adminData->id) }}">delete</a></button>

                                        </div>

                                    </div>
                                </div>


                                <hr>
                            </div>
                        </form>
                    </div>

                    <p class="text-left"><a href="{{ url('logout') }}">Logout &#8594;</a></p>


                </div>
                <!-- Add Arrows -->

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
        margin: 20px;
        width: 150px;
    }

    .btn-log-delete {
        background-color: #58093A !important;
    }

    .login-form {
        width: 70vw;
        margin: 0 auto;

    }

    .form-group {
        padding: 10px;
    }

    .text-left {
        padding-top: 30px;
    }

    .btn-container {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    header.hero {
        background: url(../images/web/interested-woman-posing-sunglasses.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        color: #fff;
        padding-bottom: 80px;
    }
</style>
@endsection
