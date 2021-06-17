<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <header>
            <h1>BOOLING CLUB ITALIA</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                      <a href="/" class="nav-link" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/trips">Le nostre offerte</a>
                    </li>
                    {{-- <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> --}}
                  </ul>
            </nav>
           
        </header>
       
  @yield('main_content')
    </body>
</html>