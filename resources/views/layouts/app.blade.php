<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'CenterAduanero')</title>
        @vite(['resources/css/app.css', 'resources/css/styles.css'])
    </head>
    <body class="font-DMSans">
        @include('partials.header')

        <div class="px-8">
            @yield('content')
        </div>

        @include('partials.footer')
        @yield('scripts')
    </body>
</html>
