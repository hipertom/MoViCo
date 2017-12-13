<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MoViCo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="/css/appClean.css" rel="stylesheet">
    </head>
    <body>

        @include('inc.errorMessages')

          <!-- main content -->
          <section class="container cleanlayout">
              <div class="row">
                <!-- content -->
                <div class="col-md-12">
                  @yield('content')
                </div>
              </div>
            </div>
          </section>

        </div>

        @include('inc.footer')
    </body>
</html>
