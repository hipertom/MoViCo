<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MoViCo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        @include('inc.header')
        @include('inc.navbar')
        @include('inc.errorMessages')

        <div class="container">
            @yield('content')
        </div>

        @include('inc.footer')
    </body>
</html>
