<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title',config("app.name")) </title>

    </head>
    <body >
        
        @yield ('content')
        {{--{{dump(config("database.connections.sqlite.driver")) }}--}}
            
        

        <footer>
            <p>
                &copy; Copyright {{date('Y')}} 
                @yield("cop")
                @if (!Route::is ("about"))
                    <a href=" {{route("about") }} ">A propos de nous</a>
                @endif

            </a></p>
        </footer>
    </body>
</html>
