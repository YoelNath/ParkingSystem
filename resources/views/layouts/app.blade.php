<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('resources\css\app.css') }}" rel="stylesheet" type="text/css" >
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>@yield('title')</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Park</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/exit">Exit now</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
     
          
  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
     
          
  
          </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin">Admin</a>
       
            
    
            </li>
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