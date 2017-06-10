<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Page Title -->
    <title>NEKANEKA</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}" />
    <!-- mystyle -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/nekaneka.css') }}" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}" />
    <!-- App Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" />

    <!-- App CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/components.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/icons.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/pages.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/menu.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/responsive.css') }}"/>

    <script src="assets/js/modernizr.min.js"></script>
  </head>

  <body>
  <!-- Navigation Bar (Top) -->
    <nav class="navbar navbar-top navbar-inverse navbar-fixed-top">
      <div class="container">
        <ul class="nav navbar-nav">
          <!-- Currency (Left) -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">USD
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">USD</a></li>
              <li><a href="#">IDR</a></li>
            </ul>
          </li>
      
          <!-- Language (Right) -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">English
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Bahasa</a></li>
              <li><a href="#">English</a></li>
            </ul>
          </li>
        </ul>
@if (Auth::guest())
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> (2) /</a></li>
          <li><a href="/login"><span class="glyphicon glyphicon-lock"></span> Sign In /</a></li>
          <li><a href="/register"><span class="glyphicon glyphicon-edit"></span> Register</a></li>
        </ul>
@elseif(Auth::user())
      LOGIN
        <a href="{{ url('/logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST">
        {{ csrf_field() }}
        </form>
@endif
      </div>
    </nav>

  <!-- Navigation Bar Menu -->
    <nav class="navbar navbar-menu navbar-inverse">
      <div class="container container-menu">
        <ul class="nav navbar-nav navbar-right">
          <li class="navbar-padding">
            <a class="home" id="home" role="button" href="{{url('/containerindexproto')}}">HOME</a>
          </li>
          <li class="navbar-padding">
            <a href="#">DESTINATIONS</a>
          </li> 
          <li class="navbar-padding">
            <a href="#">TRAVEL STYLES</a>
          </li> 
          <li class="navbar-padding">
            <a href="#">SPECIALS</a>
          </li>
          <li class="navbar-padding">
            <a href="#">BLOG</a>
          </li> 
          <li>
            <a href="#">CONTACT</a>
          </li> 
        </ul>
      </div>
    </nav>