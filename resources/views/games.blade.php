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
  <style>
    .nav-link {
      color: black !important;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f2f3f9;">
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
  <div class="container-fluid py-4 px-4">
    <div class="row">
      <div class="col-12">
        <h6> > Game</h6>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-3">
        <select name="" id="" class="custom-select">
          <option hidden>All Game</option>
          @foreach ($data as $item)
          <option value="">{{ $item['nama_game'] }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-4">
        <input type="text" class="form-control" placeholder="Cari Game">
      </div>
      <div class="col-2 p-0">
        <button type="sumbit" class="btn btn-warning"><i class="fa fa-search"></i></button>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row px-2">
      @foreach ($data as $item)
      <div class="col-md-2 mt-4">
        <div class="card text-center">
          <img src="{{ asset('upload') }}/{{ $item['gambar'] }}" alt="...">
          <div class="card-body">
            <h6 class="card-title">{{ $item['nama_game'] }}</h6>
            <a href="{{ route('topup',$item['id']) }}" class="btn btn-primary btn-sm">Top Up</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <footer>
    <div class="container-fluid mt-5 py-3 px-4" style="background-color: #13080aef;">
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
          <a class="nav-item" style="color: white; text-decoration: none;" href="#"><i class="fa fa-cookie"></i>
            Cookie</a>
          <a class="nav-item " style="color: white; text-decoration: none;" href="{{ route('games') }}"><i class="fa fa-gamepad"></i> Top
            Up Game</a>
          <a class="nav-item " style="color: white; text-decoration: none;" href="#"><i class="fa fa-tools"></i>
            Service</a>
          <a class="nav-item " style="color: white; text-decoration: none;" href="#"><i class="fa fa-television"></i>
            Stream</a>
        </div>
        <div class="col-md-3 d-flex justify-content-end align-items-center p-0">
          <a class="nav-item nav-link active" href="#"><img src="img/Facebook.png" width="70" alt=""></a>
          <a class="nav-item nav-link" href="#"><img src="img/Insta.png" alt="" width="70"></a>
          <a class="nav-item nav-link" href="#"><img src="img/Call.png" width="70" alt=""></a>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>