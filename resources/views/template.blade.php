<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Game Doo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <!-- sidebar -->
      <section class="col-2 bg-white sidebar" id="app">
        <div class="atas">
          <img src="{{ asset('img/logo.png') }}" width="100%" alt="">
          <ul>
            @if (auth()->user()->role == "a" || auth()->user()->role == "s") 
            <a href="{{ route('game.index') }}" style="text-decoration: none; color: black;">
              <li v-bind:class="{latar:menu === 'game'}" v-on:click="menu = 'game'">
                <i class="fa fa-gamepad"></i>&nbsp;
                <span>Kelola Game</span>
              </li>
            </a>
            <a href="{{ route('diamond.index') }}" style="text-decoration: none; color: black;">
            <li v-bind:class="{latar:menu === 'diamond'}" v-on:click="gantimenu('diamond', $event)">
                <i class="fa fa-diamond"></i>&nbsp;
                <span>Kelola Diamond</span>
              </li>
            </a>
            @endif
            @if (auth()->user()->role == "a" )
            <a href="{{ route('pesanan.index') }}" style="text-decoration: none; color: black;">
              <li v-bind:class="{latar:menu === 'order'}" v-on:click="menu = 'order'">
                <i class="fa fa-message"></i>&nbsp;
                <span>Kelola Pesanan</span>
              </li>
            </a>
            <a href="{{ route('pembayaran.index') }}" style="text-decoration: none; color: black;">
              <li v-bind:class="{latar:menu === 'bayar'}" v-on:click="menu = 'bayar'">
                <i class="fa fa-money-bill"></i>&nbsp;
                <span>Kelola Pembayaran</span>
              </li>
            </a>
            <a href="{{ route('user.index') }}" style="text-decoration: none; color: black;">
              <li v-bind:class="{latar:menu === 'user'}" v-on:click="menu = 'user'">
                <i class="fa fa-user-alt"></i>&nbsp;
                <span>Kelola User</span>
              </li>
            </a>
            @endif
          </ul>
        </div>
        <div class="logout" style="border-radius: 10px;">
          <div class="box-logout">
            <p>Keluar</p>
            <a href="{{ route('logout') }}"><button class="btn btn-white" style="border-radius: 20px;"><i class="fa fa-sign-out"></i>
              Logout</button></a>
          </div>
        </div>
      </section>
      <!-- akhir sidebar -->
      <!-- konten -->
      <article class="col-7 konten" style="background: #F2F3F9;">
        <div class="row">
          <div class="offset-6 col-6 p-0 title d-flex">
            <input type="text" placeholder="search the item here" class="form-control">
            <button class="btn ml-2" style="background-color: #8EEAFF;"><i class="fa fa-search"></i></button>
          </div>
          <div class="col-12 mt-3 p-0">
            <h3 class="font-weight-bold">My Dashboard</h3>
          </div>
          <!-- konten data -->
          @yield('konten')
        </div>
      </article>
      <!-- akhir konten -->
      <section class="col-3 profil">
        <div class="row">
          <div class="col-12">
            <div class="d-flex w-100 justify-content-between">
              <h6 class="font-weight-bold">Store Profile</h6>
              <div style="margin-top: -5px;">
                <i class="fa fa-circle" style="font-size: 5px;">
                </i>
                <i class="fa fa-circle" style="font-size: 5px;">
                </i>
                <i class="fa fa-circle" style="font-size: 5px;">
                </i>
              </div>
            </div>
            <div class="info text-center">
              <img src="{{ asset('img/olshop.png') }}" class="rounded-circle shadow" width="100" alt="">
              <h5 class="mt-2 mb-0">Toko SM~Gamer</h5>
              <span class="text-muted">Jangan Lupa Shalat !</span>
              <div class="total d-flex justify-content-around mt-2">
                <div class="d-flex align-items-center justify-content-between" style="width: 95px;">
                  <i class="fa fa-user text-light" style="font-size: 26px;"></i>
                  <div class="d-flex flex-column">
                    <span class="font-weight-bold">10 M</span>
                    <span class="text-muted" style="margin-top: -5px; font-size: 13px;">Followers</span>
                  </div>
                </div>
                <div class="garis"></div>
                <div class="d-flex align-items-center justify-content-between" style="width: 95px;">
                  <i class="fa fa-box-open text-light" style="font-size: 26px;"></i>
                  <div class="d-flex flex-column">
                    <span class="font-weight-bold">26 K</span>
                    <span style="margin-top: -5px; font-size: 13px;" class="text-muted">Product</span>
                  </div>
                </div>
              </div>
            </div>
            <h6 class=" mt-3">Reputation</h6>
            <div class="d-flex" style="margin-top: -10px;">
              <img src="img/start.png" alt="">
              <div class="w-100">
                <div class="d-flex flex-row w-100 justify-content-between pt-2">
                  <span>Golden Store</span>
                  <span>89%</span>
                </div>
                <div class="h-25 rounded mt-1" style="background-color:#F2F3F9;">
                  <div class="h-100 rounded" style="background-color:  #8EEAFF; width: 89%; margin-top: -4px;"></div>
                </div>
              </div>
            </div>
            <center>
              <img src="{{ asset('img/jajan.png') }}" style="border-radius: 10px;" width="100%" height="185px" alt="">
            </center>
          </div>
        </div>
      </section>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
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
    const vm = new Vue({
      el: "#app",
      data: {
        menu: "game"
      },
      methods: {
        gantimenu:function(menu, $event){
          event.target.value
          this.menu = menu
      },
      }
    });
  </script>
</body>

</html>