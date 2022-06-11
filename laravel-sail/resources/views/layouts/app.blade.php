<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}" defer></script>
    </head>
    <body>
        <div>
            <div>
                @include('layouts.nav')
            </div>
            
            <div>
                @include('layouts.notify')
                @yield('content')
            </div> 
        </div>               
        <footer>
            <div>
                @include('layouts.footer')
            </div>
        </footer>
    </body>
    
</html>