<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('img/icon.png')}}">

    <title>Undangan Onlen | Masuk</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
</head>
<body>
    <nav id="menu" class="navbar navbar-expand-lg navbar-dark fixed-top" style="padding-top: 15px; transition-duration: 0.6s; box-shadow: 0 5px 12px -8px rgba(0, 0, 0,0.9); background-color: #3b556f; ">
      <a class="navbar-brand" href="#">Undangan Pernikahan Digital</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link navigasi" href="{{ url ('index')}}">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navigasi" href="{{ url ('slide2')}}">Demo</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link navigasi" href="{{ route ('login')}}">Masuk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navigasi" href="{{ route ('register')}}">Daftar</a>
          </li>
        </ul>
      </div>
    </nav>

      <div class="container" style="margin-top: 100px;">
        <!-- Example row of columns -->
        <div class="row justify-content-center">
          <div class="col-md-6 pt-4 pr-4 pb-4 pl-4">
            <h4 class="_title" align="center">Masuk Sebagai Admin</h4>
            <p class="sub-title" align="center">Masukan Email dan kata sandi pada form di bawah.</p>
          </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form  action="" method="post">
                    @csrf
                    <div>
                        <label>Email</label>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="">
                    </div>
                    <div>
                        <label>Kata Sandi</label>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="">
                    </div>
                    <div class="form-group">
                        <!-- Untuk Remember -->
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success btn-block btn-md" type="submit" name="" value="Masuk">
                    </div>
                </form>
            </div>
        </div>

      </div> <!-- /container -->

    <footer class="fixed-bottom pt-4 pb-4 pl-4 pr-4 text-white" style="background: #3b556f;">
      <p class="container">&copy; Undangan Digit 2019</p>
    </footer>   

    < <script src="{{asset('js/jquery-slim.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
</html>