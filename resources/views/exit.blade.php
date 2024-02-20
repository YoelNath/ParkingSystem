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
                <h1 class="my-4 text-center border-bottom border-primary">Parking Exit</h1>
                <form  action="{{url('/exits')}}" method="post" >
                    @csrf
                    <div class="form-group mb-3 ">
                        <label for="unique_code" class="mb-1">Enter Unique Code to exit</label>
                        <input name="unique_code" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unique Code">
                        
                      </div>
                      
                      <button type="submit" class="btn btn-secondary">Exit</button>
                </form>
            
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif
    </div>
    </body>
</html>
