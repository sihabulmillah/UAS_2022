<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Courier New', Courier, monospace;
    }

    .navbar {
      background-color: transparent !important;
    }

    .nav-link {
      border-radius: 10px;
    }

    .jumbotron {
      color: white !important;
      position: static;
      height: 500px !important;
      background-image: url(img/gamer.jpg);
      background-size: cover;
      height: auto;
      background-position: bottom;
    }

    .icon {
      font-size: 22px;
    }

    .service {
      margin-top: -70px;
      border-radius: 15px;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, .6);
      padding: 10px;
      box-sizing: border-box;
      background-color: white;
    }

    @media (min-width:1000px) {
      .navbar {
        position: sticky;
      }

      .jumbotron {
        margin-top: -70px;
      }

      .nav-link {
        color: white !important;
      }
    }
  </style>
</head>

<body style="overflow-x: hidden">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/logo.png" width="160" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto d-flex align-items-center">
          <a class="nav-item nav-link active" href="{{ route('landing') }}"><i class="fa fa-home"></i> Home</a>
          <a class="nav-item nav-link" href="{{ route('games') }}"><i class="fa fa-gamepad"></i> Top Up Game</a>
          <a class="nav-item nav-link " href="{{ route('masuk') }}"><button type="submit" class="btn btn-warning btn-sm"><i
                class="fa fa-sign-in"></i> Masuk</button></a>
        </div>
      </div>
    </div>
  </nav>
  <div class="jumbotron">
    <div class="container pt-5">
      <h1 class="display-4">Hello, Gamers!</h1>
      <p class="lead">This is a simple landing page about games and diamond top ups...</p>
      <hr class="my-4">
      <a class="btn btn-info" href="#popular" role="button">Get Started</a>
    </div>
  </div>

  <div class="container service">
    <div class="row text-center ">
      <div class="col-md-3 col-6">
        <p class="mb-0 pt-2"><i class="icon fa fa-rocket text-danger"></i></p>
        <span class="font-weight-bold">Game Store</span>
      </div>
      <div class="col-md-3 col-6">
        <p class="mb-0 pt-2"><i class="icon fa fa-diamond text-info"></i></p>
        <span class="font-weight-bold">Diamond</span>
      </div>
      <div class="col-md-3 col-6">
        <p class="mb-0 pt-2"><i class="icon fa fa-ticket text-warning"></i></p>
        <span class="font-weight-bold">Voucher</span>
      </div>
      <div class="col-md-3 col-6">
        <p class="mb-0 pt-2"><i class="icon fa fa-television text-dark"></i></p>
        <span class="font-weight-bold">Live Stream</span>
      </div>
    </div>
  </div>

  <div class="container-fluid px-5 my-5" style="margin-top: 80px;">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-6 ">
            <h4 id="popular">Popular Game</h4>
          </div>
          <div class="col-6 text-right">
            <a href="{{ route('games') }}" style="color: black;text-decoration: none;">Lihat Semua Game</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
          @foreach ($data as $item)
          <div class="col-md-2 mt-md-0 mt-2 ">
            <div class="card text-center rounded shadow">
              <img src="{{ asset('upload') }}/{{ $item->gambar }}" class="img-fluid rounded" alt="...">
              <div class="card-body">
                <h6 class="card-title">{{ $item->nama_game }}</h6>
                <a href="{{ route('topup',$item->id) }}" class="btn btn-primary btn-sm">Top Up</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- event -->
  <div class="container-fluid px-5 my-5">
    <div class="row">
      <div class="col-md-5 justify-content-center align-items-center d-flex flex-column">
        <h4>Buktikan Kehebatan Bermain mu</h4>
        <p align="justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim
          soluta illum deleniti,
          voluptatibus inventore
          accusamus! Voluptate delectus sint sapiente illum. Iusto, nulla doloremque quam quibusdam ad facilis
          voluptatum maiores laboriosam!</p>
        <a href="{{ route('games') }}"><button type="submit" class="btn btn-warning">Tou Up Game Sekarang</button></a>
      </div>
      <div class="col-md-7" data-aos="zoom-out-left">
        <img src="img/event.jpg" class="rounded" width="100%" alt="">
      </div>
    </div>
  </div>
  <!-- footer -->
  <footer>
    <div class="container-fluid py-3 px-5" style="background-color: #13080aef;">
      <div class="row">
        <div class="col-md-3">
          <img src="img/logo.png" width="180" alt="">
          <div class="d-flex align-items-center">
            <button type="submit" class="btn btn-outline-warning mt-3">Berlangganan</button>
            <a class="nav-link" style="margin-top: 13px !important;" href="{{ route('masuk') }}"><button type="submit"
                class="btn btn-warning"><i class="fa fa-sign-in"></i>
                Masuk</button>
            </a>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-around" style="font-size: 18px;">
          <a class="nav-item nav-link active" href="#"><i class="fa fa-cookie"></i> Cookie</a>
          <a class="nav-item nav-link" href="{{ route('games') }}"><i class="fa fa-gamepad"></i> Top Up Game</a>
          <a class="nav-item nav-link" href="#"><i class="fa fa-tools"></i> Service</a>
          <a class="nav-item nav-link" href="#"><i class="fa fa-television"></i> Stream</a>
        </div>
        <div class="col-md-3 d-flex justify-content-end align-items-center p-0">
          <a class="nav-item nav-link active" href="#"><img src="img/Facebook.png" width="70" alt=""></a>
          <a class="nav-item nav-link" href="#"><img src="img/Insta.png" alt="" width="70"></a>
          <a class="nav-item nav-link" href="#"><img src="img/Call.png" width="70" alt=""></a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <script>
    AOS.init({
      duration: 700,
    });
  </script>
</body>

</html>