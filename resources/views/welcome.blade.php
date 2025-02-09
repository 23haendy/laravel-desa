<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SuratKu</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Styles -->
        <style>
           
            .jumbotron{
                background-image: url(../img/slide3.jpg);
                background-size:cover;
                height:770px;
                text-align:center;
                
            }

            .jumbotron .display-4{
                color:black;
            }

            .jumbotron p{
                color:black;
            }

            .full-height {
                height: 5vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .display-4 {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                color: #000000;
            }

                 

            .links > a {
                color:  #000000;
                padding: 0 15px;
                font-size: 13px;
                font-weight: 600;
                text-align:center;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
        <a class="navbar-brand" href="#"></a>
        <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </div>
    </div>
</nav>
<div class="jumbotron">
  <div class="container">
    <h1 class="display-4">Never Give Up</h1>
        <hr class="my-4">
    <p class="lead">Life  is a simple</p>
    
  </div>
</div>
                
            
        </div>
    </body>
</html>
