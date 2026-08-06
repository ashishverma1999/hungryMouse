<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Hungry Mouse | Cloud Kitchen • On The Move</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset(\'assets/img/gallery/hungry mouse.png\') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset(\'assets/img/gallery/hungry mouse.png\') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset(\'assets/img/gallery/hungry mouse.png\') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(\'assets/img/gallery/hungry mouse.png\') }}">
    <link rel="manifest" href="{{ asset(\'assets/img/favicons/manifest.json\') }}">
    <meta name="msapplication-TileImage" content="assets/img/gallery/hungry mouse.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset(\'assets/css/theme.css\') }}" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      
<x-navbar />
    @yield('content')
<x-footer />
</main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset(\'vendors/@popperjs/popper.min.js\') }}"></script>
    <script src="{{ asset(\'vendors/bootstrap/bootstrap.min.js\') }}"></script>
    <script src="{{ asset(\'vendors/is/is.min.js\') }}"></script>
    <script src="{{ asset(\'vendors/fontawesome/all.min.js\') }}"></script>
    <script src="{{ asset(\'assets/js/theme.js\') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&amp;display=swap" rel="stylesheet">
  </body>

</html>