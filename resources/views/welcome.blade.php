<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <title>Frex Exchange</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- styles -->
        <link rel="stylesheet" type="text/css" href="css/welcome.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"><button class="w3-button w3-red  w3-xxlarge w3-round">Home</button></a>
                    @else
                        <a href="{{ route('login') }}"><button class="w3-button w3-blue w3-xxlarge  w3-round">Login</button></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><button class="w3-button w3-green w3-xxlarge w3-round">Register</button></a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
              <img  id="logo" src='build/images/logo2.png'>
                <div class="title m-b-md">
                    ForexExchange
                </div>
               <span id='exp'><strong>all your needs in one place</strong></span>

                </div>
            </div>
        </div>
    </body>
</html>
