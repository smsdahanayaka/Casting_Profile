@extends('pages.app')
@section('content-nav')
    @include('navbar.regnav')
@endsection
@section('content')
    <!-- body -->

    <div class="container body-container">

        {{-- alert --}}
        @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif

        <!-- registation form -->
        <form class="row g-3" action="{{ url('add-admin') }}" method="post" enctype="multipart/form-data">
            @csrf
            <p class="reg-txt">Admin Registation</p>
            <hr>
            <div class=" container-inner col-lg-6">
                <!-- select profile image -->
                <div class="registation-form form-contact-information profile-img row g-3">
                    <img class="imge" src="{{ asset('images/profilePic.jpg') }}" alt="" id="img-id">

                    <div class="col-md-6">
                        <label for="formFileSm" class="form-label">Input profile picture</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file" name="profileImage">
                    </div>
                </div>

            </div>
            <div class="container-inner col-lg-6">

                <!-- personal details -->
                <div class="registation-form form-name row g-3">

                    <!-- User name -->
                    <div class="col-md-6 fname">
                        <label for="inputEmail4" class="form-label">User name</label>
                        <input type="text" class="form-control" placeholder="User name" aria-label="User name"
                            name="userName">
                    </div>

                    <!-- mobile number -->
                    <div class="col-md-6">
                        <label class="form-label">Whatsapp number:</label>
                        <input name="mobileNumber" class="form-control" id="phone" type="tel" name="phone"
                            pattern="+94[0-9]{2}[0-9]{4}[0-9]{3}" placeholder="+94714567871" />

                    </div>

                    <!-- first name -->
                    <div class="col-md-6 fname">
                        <label for="inputEmail4" class="form-label">First name</label>
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name"
                            name="firstName">
                    </div>

                    <!-- last name -->
                    <div class="col-md-6 lname">
                        <label for="inputEmail4" class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name"
                            name="lastName">
                    </div>


                    <!-- email -->
                    <div class="col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input name="email" placeholder="email" type="email" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>

                    <!-- password number -->
                    <div class="col-md-6">
                        <label class="form-label">Password</label>
                        <input name="password" class="form-control" id="password" type="password" placeholder="password" />

                    </div>

                    <hr>
                    <div class="col-md-3 btn-btn">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>


        </form>


    </div>
@endsection

@push('css')
    <style>
        .imge {
            border-radius: 50%;

        }
    </style>
@endpush
