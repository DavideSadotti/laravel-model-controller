<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
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

            <div class="content">
                
                <ul>
                    @foreach ($movies as $movie)
                        <li>Titolo Film: {{$movie->title}}</li>
                        <li>Distribuzione: {{$movie->author}}</li>
                        <li>Genere: {{$movie->genre}}</li>
                        <li>Trama: {{$movie->plot}}<br><br><br></li>
                    @endforeach
                </ul>

            </div>
        </div>
    </body>
</html>
