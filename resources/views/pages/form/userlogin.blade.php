@extends('pages.home.homePage')

@section('form')
    {{-- registatin form --}}
    <div class="containerr">
        <div class="row">
            <div class="login-form">
                <form>
                    <div class="form-group">

                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">

                    </div>
                    <div class="form-group">

                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-lg btn-log">login</button>
                </form>
            </div>


        </div>
    </div>
@endsection
