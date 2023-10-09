
@extends('pages.app')
@section('content-nav')
    @include('navbar.regnav')
@endsection
@section('content')
    <!-- Create an HTML table to display the data -->
    <section>
        <div class="container search_container">
            <div class="row search_row">

                <form action="{{ url('admin-search') }}" method="GET">
                    <div class="input-group mb-3 form-outline ">
                        <input id="text" name='query' type="search" id="form1" class="btn-search form-control" placeholder="keywords"/>
                        <button id="search-button" type="submit" class="btn btn-search btn-search-btn btn-primary">search</button>
                      </div>

                </form>

              </div>
        </div>

        <div class="container body-container ">
            <div class="row service_conteiner profile_row">

                @foreach ($adminData as $admin)
                    <!-- single profile -->
                    <!-- profile list -->


                        <!-- profile one -->
                        <div class="profile_container col-lg-3 col-md-4 col-sm-6">
                            <div class="inner_conteiner">
                                <!-- profile pic -->
                                <div class="profile">
                                    <div class="inner_profile profile_pic">
                                        <img src="{{ asset('images/' . $admin->profileImage) }}" alt="profileImg">
                                    </div>
                                </div>

                                <!-- profile name / age -->
                                <div class="inner_profile profile_age">
                                    <h6>{{ $admin->firstName }}</h6>
                                    {{-- <p>age</p> --}}
                                </div>

                                <!-- profile details -->
                                <div class="profile_details">
                                    <!-- name -->

                                    <ul>
                                        <li>{{ $admin->lastName }}</li>
                                        <li>{{ $admin->email }}</li>
                                        <li>{{ $admin->mobileNumber }}</li>

                                    </ul>
                                </div>

                                <!-- button -->
                                <div class="prfile_btn">


                                    <div class="profile_btn_btn">
                                        <a href="{{ generateWhatsAppUrl($admin->mobileNumber) }}"><i class="whtbtn fa-brands fa-whatsapp" style="color: #01a332;"></i></a>

                                    </div>
                                    <div class="profile_btn_btn">
                                        <a href="{{ url('update-admin/'.$admin->id) }}"><i class="whtbtn fa-regular fa-user" style="color: #0a3785;"></i></a>
                                    </div>
                                    <div class="profile_btn_btn">
                                        <a href=""><i class="whtbtn fa-regular fa-file-pdf" style="color: #b80000;"></i></a>
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

@push('css')
    <style>
        .prfile_btn{
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 5px;
    }

    .profile_btn_btn{
        display: flex;
        flex: 1;
        justify-content: center;
        align-items: center;
    }

    .whtbtn{
        font-size: 35px;

    }
    .search_container{
        margin-top:50px;
        margin-bottom:15px;
    }
    .search_row{
        position: relative;

    }
    .input-group{
        /* width: 60vw; */
        right: 0;
    }

    .btn-search{
        font-size: 15px;
        height: 35px;
        display: flex;
    }
    .btn-search-btn{
        background-color: #3f4958;
    }
    </style>


@endpush
