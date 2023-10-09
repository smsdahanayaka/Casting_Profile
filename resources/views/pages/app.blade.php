<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../resources/css/dataTables.min.css">
    @include('css.style')
    @include('css.singleprofile')
    @include('css.homePage.homePageStyle')
    @stack('css')
    <title>35KM Films</title>
</head>
<body>
    <section>
        @yield('content-nav')
    </section>
    <section>
        @yield('content')
    </section>

    <section>
        @extends('footer.footer')
    </section>

    @include('js.script')
    @yield('script')
    <script src="../resources/js/jquery.dataTables.min.js"></script>
</body>
</html>
