<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>API E-Pasien | Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link rel="icon" type="img" href="{{ asset('img/logo-epasien-1.png')}}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
  </head>
  <body style="background-image: url({{ asset('img/laravel-admin.png')}}); background-color:#c0c0c0;">

    <div class="container-xxl">
        @include('HeaderTop')
        <div class="card-group" style="margin-top:80px; margin-bottom:125px;">  
            @include('about')
            @include('pasien')
            @include('antrian')
            @include('konsul')
            @include('obat')
            @include('resep')
            @include('laporan')
        </div>       
    </div>

  </body>

</html>