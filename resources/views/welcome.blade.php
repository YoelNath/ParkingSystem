<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        @include('layouts.app')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center mt-2">Parking Entrance</h1></div>
        
                            <div class="container con-test border border-light py-4">

                        <form action="{{url('/parkir')}}" method="post" >
                            @csrf
                            <div class="form-group mb-3 ">
                              <label for="police_num" class="mb-1">Enter Police Number</label>
                              <input name="police_num" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Police Number">
                              
                            </div>
                            
                            <button type="submit" class="btn btn-primary" >Submit</button>
                        </form>
                
                   
                        @if ($errors->any())
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $errors->first() }}
                        </div>
                
                        @elseif(session('uniq'))
                        <div class="alert alert-info mt-2" role="alert">
                            Unique ID Generated
                        </div>
                    @endif
                
                
    
           
                
                    
                        
                    </div>
                </div>
                
            </div>
        </div>
     

{{--     
    <form class="m-5" action="{{url('/exit')}}" method="post" >
        @csrf
        <div class="form-group mb-3 ">
          <label for="unique_code" class="mb-1">Enter Unique Code to exit</label>
          <input name="unique_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unique Code">
          
        </div>
        
        <button type="submit" class="btn btn-secondary">Exit</button>
    </form>  --}}
    </div>
    </body>
</html>
