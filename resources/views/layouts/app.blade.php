<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MoViCo</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <link rel="icon" type="image/png" href="{{ url('images/icon.png') }}">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>


        @include('inc.errorMessages')

        <div class="container main">

          <!-- sidebar -->
          <aside class="sidebar" id="sidebar">
            @include('inc.sidebar')
          </aside>

          <!-- main content -->
          <section class="main-content">
              <header>
                  <div class="row">
                      <div class="col-md-12">
                          <p class="header-text"><span>Hi Tom,</span> have a nice day!</p>
                      </div>
                  </div>
              </header>
            <div class="wrapper">
              <div class="row">
                <!-- content -->
                <div class="col-md-9 content-col">
                  @yield('content')
                </div>

                <!-- right sidebar -->
                <div class="col-md-3 rightsidebar">
                  @section('rightsidebar')
                    @include('inc.rightsidebar')
                    @show
                </div>
              </div>
            </div>
          </section>

        </div>

        @include('inc.footer')
    </body>
</html>
