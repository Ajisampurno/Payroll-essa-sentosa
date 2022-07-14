<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="shortcut icon" href="/img/svg/logo.svg" type="image/x-icon">
        <!-- Custom styles -->
        <link rel="stylesheet" href="/css/style.min.css">
        <title>ES | {{ $title }}</title>
    
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        
    </head>
    <body>
        <div class="row justify-content-center m-5">
            <div class="col-md-7 m-5">
                <div class="card ">
                    
                        <img class="rounded mx-auto d-block w-50 mt-5" src="/img/logo/logo.png" alt="">
                        @if (Route::has('login'))
                            <div class="d-flex justify-content-center pt-5 pb-5">
                                <button class="btn btn-primary m-2">
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a href="{{ route('login') }}">Log in</a>
                                </button>
                                <button class="btn btn-primary m-2">
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif
                                    @endauth
                                </button>
                            </div>
                        @endif
                    
                </div>
            </div>
        </div>

    </body>
</html>
