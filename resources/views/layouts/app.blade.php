<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./park/app.css">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>@yield('title')</title>
</head>
<body>

  <nav class="navbar nav-test navbar-expand-lg mb-5 px-5 ">
    <div class="container-fluid py-2">
      <a class="navbar-brand" href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item mx-3">
            <a class="nav-link{{ request()->is('/') ? ' active border-bottom border-primary' : '' }}" href="/">Park</a>
        </li>
        <li class="nav-item mx-3">
            <a class="nav-link{{ request()->is('exit') ? ' active border-bottom border-primary' : '' }}" href="/exit">Exit now</a>
        </li>
        <li class="nav-item mx-3">
            <a class="nav-link{{ request()->is('login','home') ? ' active border-bottom border-primary' : '' }}" href="/login">Login</a>
        </li>
        @if (auth()->check())
        <li class="nav-item mx-3">
            <a class="nav-link{{ request()->is('admin') ? ' active border-bottom border-primary' : '' }}" href="/admin">Admin</a>
        </li>
        @else
        <li class="nav-item mx-3">
            <a class="nav-link{{ request()->is('register') ? ' active border-bottom border-primary' : '' }}" href="/register">Register</a>
        </li>      
          @endif
            @if (session('uniq'))
            <li class="nav-item">
              <a class="nav-link">Uniqcode: {{ session('uniq') }}</a> 
       
            
    
            </li>
            @endif

          
         
        </ul>

      </div>
    </div>
  </nav>
  </nav>



  @yield('content')
</body>
</html>