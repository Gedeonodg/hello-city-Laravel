<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
        <title>@yield('title',config("app.name")) </title>

    </head>
    <body class="py-6 flex flex-col bg-blue-200 justify-between min-h-screen items-center" >
        <main role="main" class="flex flex-col justify-center items-center">

            @yield ('content')

        </main>
        
        {{--{{dump(config("database.connections.sqlite.driver")) }}--}}
            
        

        <footer>
            <p class="text-gray-600">
                &copy; Copyright {{date('Y')}} 
                @yield("cop")
                @if (!Route::is ("about"))
                    <a href=" {{route("about") }}" class="text-indigo-800 underline ">A propos de nous</a>
                @endif

            </a></p>
        </footer>
    </body>
</html>
