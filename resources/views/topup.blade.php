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
      border-radius: 10px;
      color: black !important;
    }
    .latar{
      background-color: #3aa2b7;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f2f3f9;">
    <div class="container-fluid ">
      <a class="navbar-brand" href="#"><img src="{{ asset('img/logo.png') }}" width="160" alt=""></a>
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

  <div class="container mt-4">
    <div class="row">
      <div class="col-12">
        <h6 class="text-muted"># top-up-game/{{ $data['slug'] }}</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="shadow">
          <img src="{{ asset('upload') }}/{{ $data['gambar'] }}" class="rounded img-fluid" alt="">
          <div class="p-3">
            <h4>{{ $data['nama_game'] }}</h4>
            <p style="text-indent: 30px;" align="justify">{{ $data['deskripsi'] }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 shadow rounded text-center" id="app">
        <img src="{{ asset('img/ilus.jpg') }}" class="m-2" width="140" alt="">
        <h4 class="pt-2">Form Pesanan</h4>
        <form action="{{ route('save') }}" method="post" >
          @csrf
          <div class="row px-4 py-">
            <div class="col-md-6 ">
              <label for="nama">Nama Game</label>
              <input type="text" id="nama" class="form-control" readonly value="{{ $data['nama_game'] }}">
              <input type="hidden" name="diamond" value="{{ $data->diamond->id }}">
            </div>
            <div class="col-md-6 ">
              <label for="id">Id Pelanggan</label>
              <input type="number" id="id" name="id_pengguna" class="form-control">
            </div>
          </div>
          <div class="row px-4 pt-4 text-center">
            <div class="col-md-4">
              <input type="radio" id="50" name="jumlah" value="50" class="">
              <label for="50" class="btn btn-outline-info"  >50 Diamond</label>
            </div>
            <div class="col-md-4">
              <input type="radio" id="100" name="jumlah" value="100" class="">
              <label for="100" class="btn btn-outline-info">100 Diamond</label>
            </div>
            <div class="col-md-4">
              <input type="radio" id="150" name="jumlah" value="150" class="">
              <label for="150" class="btn btn-outline-info">150 Diamond</label>
            </div>
          </div>
          <div class="row text-center mt-3 mb-3 px-4">
            <div class="col-12">
              <button type="submit" class="btn btn-warning w-50">Beli</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <footer>
    <div class="container-fluid mt-5 py-3 px-4" style="background-color: #13080aef;">
      <div class="row">
        <div class="col-md-3">
          <img src="{{ asset('img/logo.png') }}" width="180" alt="">
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
          <a class="nav-item nav-link active" href="#"><img src="{{ asset('img/Facebook.png') }}" width="70" alt=""></a>
          <a class="nav-item nav-link" href="#"><img src="{{ asset('img/Insta.png') }}" alt="" width="70"></a>
          <a class="nav-item nav-link" href="#"><img src="{{ asset('img/Call.png') }}" width="70" alt=""></a>
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