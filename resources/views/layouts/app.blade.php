@extends('layouts.base')

@section('style')
<style>
    body {
        padding-top: 50px;
    }
    .gap {
        padding-top: 24px;
    }
    .navbar-default .navbar-nav > li > a.user-nav{
        position: relative;
        padding-left: 48px;
    }
    .navbar-default .navbar-nav > li > a.user-nav .navbar-pic{
        position: absolute;
        top: 8px;
        left: 12px;
        border-radius: 2px;
        border: 1px solid #999;
        background: #efefef;
        padding: 2px;
        max-width: 26px;
        max-height: 26px;
    }
    @media (min-width: 768px) {
        .navbar-default .navbar-nav > li > a.user-nav .navbar-pic{
            top: 12px;
        }
    }
</style>
@yield('_style')
@endsection

@section('_content')
<nav class="navbar navbar-{{ config(
    'app.dark'
)?'inverse':'default' }} navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ root_url('/') }}">
                {{ config('app.base.name') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <!--
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Home</a></li>
            </ul>
            -->

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ root_url('/login') }}">Login</a></li>
                    <li><a href="{{ root_url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a
                            href="#"
                            class="dropdown-toggle user-nav"
                            data-toggle="dropdown"
                            role="button"
                            aria-expanded="false"
                        >
                            <img
                                class="navbar-pic"
                                src="{{ Auth::user()->img() }}"
                            >
                            {{ Auth::user()->name() }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ root_url('/profile') }}">
                                    <i class="fa fa-btn fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{ root_url('/password/change') }}">
                                    <i class="fa fa-btn fa-key"></i>
                                    Change Password
                                </a>
                            </li>
                            <li>
                                <a href="{{ root_url('/logout') }}">
                                    <i class="fa fa-btn fa-sign-out"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
@yield('content')
@endsection
</body>
</html>
