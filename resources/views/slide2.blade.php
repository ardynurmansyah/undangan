<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Undangan Online</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.js') }}">
    <link rel="styesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.carousel.js') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
</head>
<body>
<nav id="menu" class="navbar navbar-expand-lg navbar-light" style="padding-top: 15px; transition-duration: 0.6s; box-shadow: 0 5px 12px -8px rgba(0, 0, 0,0.9); background-color: #fff; ">
      <a class="navbar-brand" href="#">Undangan Pernikahan Digital</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link navigasi" href="{{url ('index')}}">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navigasi" href="{{url('slide')}}">Demo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navigasi" href="{{ route('login')}}">Masuk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navigasi" href="{{ route('register')}}">Daftar</a>
          </li>
        </ul>
      </div>
    </nav>
 
    <div class="row justify-content-center">
      <div class="col-md-6">
        <ul class="nav nav-pills nav-fill">
              <li class="nav-item">
                    <a class="nav-link" data-target="#demo" data-slide-to="0" class="active"  onclick="currentSlide(1)" href="#" >	&#127968;Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-target="#demo" data-slide-to="1" onclick="currentSlide(2)" href="#">&#8987;Akad&Resepsi</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link"  href="#">Lokasi</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " data-target="#demo" data-slide-to="2" onclick="currentSlide(3)" href="#">Tentang kami </a>
              </li>
          </ul>
          <div class="container">
          <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/4.jpg')}}" alt="" width="100%" height="20%">
  </div>
  <div class="carousel-item">
      <img src="{{ asset('img/28.jpg')}}" alt="" width="100%" height="20%">
  </div>
  <div class="carousel-item">
      <img src="{{ asset('img/15.jpg')}}" alt="" width="100%"  height="20%">
  </div>
  </div>
  </div>
  </div>
</body>
</html>