<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Game Doo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="login.css" />
</head>

<body class="bg-light" style="font-family: 'Courier New', Courier, monospace;">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
      <div class="col-md-4 col-8 bg-white  p-4 rounded shadow text-center">
        <img src="{{ asset('img/logo.png') }}" width="60%" alt="">
        <hr>
        <form action="{{ route('bayar') }}" method="post">
          @csrf
        <h4><input type="text" class="border-0" style="margin-left: -100px" name="total" value="
          @php
          $harga = $data['jumlah_diamond'] * $data->diamond->harga_diamond;
          // $rupiah = number_format($harga,'','','.');
          echo $harga;
          @endphp
          "></h4>
        <div class="row">
          <div class="col-md-12 justify-content-between align-items-center d-flex">
            <p class="mt-2">Id Pelanggan</p>
            <input type="hidden" class="border-0 text-right" name="id" value="{{ $data['id'] }}">
            <input type="text" class="border-0 text-right" value="{{ $data['id_pengguna'] }}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 justify-content-between align-items-center d-flex">
            <p>Nama Game</p>
            <p>{{ $data->diamond->game->nama_game }}</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 justify-content-between align-items-center d-flex">
            <p class="mt-2">Jumlah Diamond</p>
            <input type="text" class="border-0 text-right" readonly value="{{ $data['jumlah_diamond'] }}" name="jumlah" value="1231">
          </div>
        </div>
        <div class="row pb-3">
          <div class="col-md-12">
            <button type="submit" class="btn btn-warning w-50 mt-2"><i class="fa fa-wallet"></i> Bayar</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>





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