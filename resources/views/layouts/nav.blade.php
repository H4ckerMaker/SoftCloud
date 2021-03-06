<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css" />
    <link
      type="text/css"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
  </head>
  <body class="gradient">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
      <div class="container p-3">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}"><img src="img/logo.png" alt="logo" width="70" height="40"><div class="ml-2" id="brandName">Soft Cloud</div></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item ml-lg-4">
              <a class="nav-link" href="#">Info</a>
            </li>
          </ul>
          @guest
          <a class="btn btn-primary btn-lg ml-lg-4" href="{{ route('login') }}" id="loginBtn">Log-In</a>
          @else
          <span class="ml-lg-4">{{ Auth::user()->name }}</span>
          <div class="btn-group btn-lg">
            <button type="button" class="btn btn-primary" id="loginBtn"><svg xmlns="http://www.w3.org/2000/svg"
                    width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg></button>
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="loginBtn"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('account') }}">Profilo</a>
                <a class="dropdown-item" href="#">Impostazioni</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log-out</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                  @csrf
                </form>
            </div>
          </div>
          @endguest
        </div>
      </div>
    </nav>
    @yield('content')
    <script src="js/bootstrap.min.js"></script>
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>