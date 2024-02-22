<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body class="antialiased">
        @include('layouts.app')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center mt-2">Parking Exit</h1></div>
        
                            <div class="container con-test border border-light py-4">

                                <form  action="{{url('/exits')}}" method="post" >
                                    @csrf
                                    <div class="form-group mb-3 ">
                                        <label for="unique_code" class="mb-1">Enter Unique Code to exit</label>
                                        <input name="unique_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unique Code">
                                        
                                      </div>
                                      
                                      <button type="submit" class="btn btn-secondary">Exit</button>
                                </form>
                
                                @if ($errors->any())
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{ $errors->first() }}
                                </div>
                            @endif
                    
                        
                    </div>
                </div>
                
            </div>
        </div>
     
   
            

   
    </body>
</html>
