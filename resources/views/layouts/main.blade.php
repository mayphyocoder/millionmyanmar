<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Million Myanmar Co.,Ltd</title>
    <meta name="keywords" content="Million Myanmar Co.,Ltd" />
    <meta name="author" content="Million Myanmar Co.,Ltd" />
    <meta name="robots" content="Million Myanmar Co.,Ltd" />
    <meta name="description" content="Million Myanmar Co.,Ltd" />
    <link rel="shortcut icon" href="{{ asset('assets/data/logo.jpg') }}" />
    <meta property="og:image" content="{{ asset('assets/data/logo.jpg') }}" />
    
    <meta property="og:title" content="Million Myanmar Co.,Ltd" />
    <meta property="og:url" content="https://millionmyanmar.com/" />
    <meta property="og:site_name" content="Million Myanmar Co.,Ltd" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link rel="icon" href="{{ asset('assets/data/logo.jpg') }}" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

    <div class="page-wrapper">
        @include('layouts.menu')
        @if (URL::current() == route('welcome'))
            @include('layouts.slider')
        @endif
        
        
        @yield('content')
        @include('layouts.footer')
    </div>



    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>