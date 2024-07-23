<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
        
        <title>{{page_title($title ?? null) }} </title>

    </head>
    <body class="py-6 flex flex-col bg-blue-200 justify-between min-h-screen items-center" >
        <main role="main" class="flex flex-col justify-center items-center">

            @yield ('content')

        </main>
        
        {{--{{dump(config("database.connections.sqlite.driver")) }}--}}
            
        
    @include("layouts/partials/_footer")
    </body>
</html>
