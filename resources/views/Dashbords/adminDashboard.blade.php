@extends('welcome')

@section('content')
    <!-- header -->
    <header class="hero">

    @section('content-nav')
        @extends('navbar.user.userprofilenav')
    @endsection

</header>

<section>
    <div class="container search_container">
        <div class="row search_row">

            <form action="{{ url('user-search') }}" method="GET">


                <div class="input-group mb-3 form-outline ">
                    <input id="text" name='query' type="search" id="form1" class="btn-search form-control"
                        placeholder="keywords" />
                    <button id="search-button" type="submit"
                        class="btn btn-search btn-search-btn btn-primary">search</button>
                </div>

                <div class="row form-outline">
                    <div class="col">
                        <input type="text" class="form-control" name="town" placeholder="Home town">
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" name="age" placeholder="Age">
                    </div>
                </div>


            </form>

        </div>
    </div>

    <div class="container body-container ">
        <div class="row service_conteiner profile_row">
            {{-- rEGISTER FORM --}}
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            @if (session('status-1'))
                <h6 class="alert alert-danger">{{ session('status-1') }}</h6>
            @endif

            @foreach ($AllUsers as $admin)
                <!-- single profile -->
                <!-- profile list -->


                <!-- profile one -->
                <div class="profile_container col-lg-3 col-md-4 col-sm-6">
                    <div class="inner_conteiner">
                        <!-- profile pic -->
                        <div class="profile">
                            <div class="inner_profile profile_pic">
                                <img src="{{ asset('images/users/' . $admin->profile_pic) }}" alt="profileImg">
                            </div>
                        </div>

                        <!-- profile name / age -->
                        <div class="inner_profile profile_age">
                            <h6>{{ $admin->first_name }}</h6>
                            <h6>{{ $admin->last_name }}</h6>

                            {{-- <p>age</p> --}}
                        </div>

                        {{-- genarate age --}}

                        @php
                            // Calculate the age based on the date of birth

                            $currentYear = now()->year;
                            $birthYear = $admin->date_of_birth;

                            $age = $currentYear - $birthYear;
                        @endphp


                        <!-- profile details -->
                        <div class="profile_details">
                            <!-- name -->

                            <ul>
                                <li>Age is {{ $age }}</li>
                                <li>{{ $admin->home_town }}</li>
                                <li>{{ $admin->mobile_number }}</li>


                            </ul>
                        </div>

                        <!-- button -->
                        <div class="prfile_btn">


                            <div class="profile_btn_btn">
                                <a href="{{ generateWhatsAppUrl($admin->whatsapp_number) }}"><i
                                        class="whtbtn fa-brands fa-whatsapp" style="color: #01a332;"></i></a>

                            </div>
                            <div class="profile_btn_btn">
                                <a href="{{ url('update-user/' . $admin->id) }}"><i class="whtbtn fa-regular fa-user"
                                        style="color: #0a3785;"></i></a>
                            </div>
                            <div class="profile_btn_btn">
                                <a href="{{ url('pdf-genarater', $admin->id) }}"><i
                                        class="whtbtn fa-regular fa-file-pdf" style="color: #b80000;"></i></a>
                            </div>
                            {{-- <div class="prfile_btn_btn btn_view"><button type="button" class=" btn-btn btn btn-success"><a href="{{ generateWhatsAppUrl($admin->mobileNumber) }}" class="btn btn-success">WhatsApp</a></button></div>
                                    <div class="prfile_btn_btn btn_whatsapp"><button type="button" class="btn-btn btn btn-warning">view</button></div>
                                    <div class="prfile_btn_btn btn_pdf"><button type="button" class="btn-btn  btn btn-primary">print</button></div> --}}
                        </div>

                    </div>

                </div>
            @endforeach
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

    .prfile_btn {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 5px;
    }

    .profile_btn_btn {
        display: flex;
        flex: 1;
        justify-content: center;
        align-items: center;
    }

    .whtbtn {
        font-size: 35px;

    }

    .search_container {
        margin-top: 50px;
        margin-bottom: 15px;
    }

    .search_row {
        position: relative;

    }

    .input-group {
        /* width: 60vw; */
        right: 0;
    }

    .btn-search {
        font-size: 15px;
        height: 35px;
        display: flex;
    }

    .btn-search-btn {
        background-color: #3f4958;
    }

    .search-bar-1 {
        margin-right: 10px;

    }

    .form-outline {
        margin-bottom: 10px;
    }
</style>
@endsection
