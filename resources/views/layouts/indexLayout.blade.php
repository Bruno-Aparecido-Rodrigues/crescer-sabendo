<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        @vite('resources/css/app.css')

        <style>
            @layer utilities {
                .w-container{
                    width: 66rem;
                }
            }
        </style>
    </head>
    <body class="bg-white">

        @include("components.purple.header")
        @yield('content')
        @include('components.purple.iconCards')
        @include('components.purple.aboutus')
        @include('components.purple.courses')
        @yield('dados')
        @include('components.purple.sponsors')
        @include("components.purple.contactus")
        @include("components.purple.footer")

    </body>
</html>

