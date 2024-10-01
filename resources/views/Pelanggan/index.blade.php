<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BATIK GANASAN SUBANG WEB</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800"
      rel="stylesheet"
    />

    <!-- Memanggil CSS dengan Laravel asset() helper -->
    <link rel="stylesheet" href="{{asset('Pelanggan/css/open-iconic-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('Pelanggan/css/animate.css') }}" />
    <link rel="stylesheet" href="{{asset('Pelanggan/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('Pelanggan/css/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('Pelanggan/css/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('Pelanggan/css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('Pelanggan/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('Pelanggan/css/bootstrap-datepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('Pelanggan/css/jquery.timepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('Pelanggan/css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('Pelanggan/css/icomoon.css')}}" />
    <link rel="stylesheet" href="{{asset('Pelanggan/css/style.css')}}" />
  </head>

  <body>
    <!-- Meng-include body.blade.php -->
    @include('pelanggan.body')
    
    <!-- Meng-include footer.blade.php -->
    @include('pelanggan.footer')
  </body>
</html>
