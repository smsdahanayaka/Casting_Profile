<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>35km-Films</title>

    {{-- style --}}
    @include('css.singleProfile')
    @include('css.style')
    @include('css.homePage')
</head>
<body>
    {{-- nav-bar --}}
    <section>
        @yield('content-nav')
    </section>

    {{-- content --}}
    <section>
        @yield('content')
    </section>

    <section>
        @extends('Footer.footer')
    </section>


    {{-- script --}}
    @include('js.script')
    @yield('script')
</body>
</html>
