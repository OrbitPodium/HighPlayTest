<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="keywords" content="{{setting('site.keywords')}}">

    <title>{{setting('site.title')}} :: @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/business-casual.css')}}" rel="stylesheet">
    @yield('css')

  </head>

  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item @if($active == 'home') active @endif px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item @if($active == 'about') active @endif px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{route('about')}}">Sobre Nós</a>
            </li>
            <li class="nav-item @if($active == 'team') active @endif px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{route('team')}}">Equipa</a>
            </li>
            <li class="nav-item @if($active == 'contact') active @endif px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{route('contact')}}">Contactos</a>
            </li>
            @if(Auth::user())
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{route('voyager.dashboard')}}">{{Auth::user()->name}}</a>
            </li>
            @else
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{route('voyager.dashboard')}}">Área Cliente</a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; High Play Test {{date('Y')}}</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    @yield('js')

  </body>

</html>
