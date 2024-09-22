<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Admin </title>
</head>
<style>
    .shadow-sm{
        box-shadow: var(--bs-box-shadow-sm) !important;

    }
</style>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:black;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:gold;">MillionMyanamr Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding-left:120px;">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users.index')}}" style="color:gold;"> 
                            Users
                        </a>
                    </li><li class="nav-item" style="padding-left:20px;">
                        <a class="nav-link" href="{{route('adminsubscriber.index')}}" style="color:gold;"> 
                            Subscribers
                        </a>
                    </li><li class="nav-item" style="padding-left:20px;">
                        <a class="nav-link" href="{{route('adminteams.index')}}" style="color:gold;"> 
                            Teams
                        </a>
                    </li><li class="nav-item" style="padding-left:20px;">
                        <a class="nav-link" href="{{route('adminactivities.index')}}" style="color:gold;"> 
                            Activities
                        </a>
                    </li>
                    <li class="nav-item" style="padding-left:20px;">
                        <a class="nav-link" href="{{route('admincsr.index')}}" style="color:gold;">
                            CSR
                        </a>
                    </li>
                    <li class="nav-item" style="padding-left:20px;">
                        <a class="nav-link" href="#" style="color:gold;">
                            Contact
                        </a>
                    </li>


                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto" >
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown" >
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white; padding-right:50px;">
                                <i class="fa fa-user" style="color:white">
                                {{ Auth::user()->name }}
                            </i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-blue shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="">
                    Users
                </a>
                <a class="navbar-brand" href="">
                    Subscribers List
                </a>
                <a class="navbar-brand" href="">
                   Teams
                </a>
                <a class="navbar-brand" href="">
                    Activites
                 </a>
                 <a class="navbar-brand" href="">
                    CSR
                 </a>
                 <a class="navbar-brand" href="">
                    Contact
                 </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}
</body>

</html>
