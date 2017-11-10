<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MoViCo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        @include('inc.navbar')

        <div class="container">
            <div class="row">
                <div class="md-col-12 content">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>