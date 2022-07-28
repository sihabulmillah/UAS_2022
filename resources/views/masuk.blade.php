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

<body class="bg-light">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">
      <div class="col-md-7 col-8 bg-white h-75 d-flex align-items-center">
        <div class="row h-100 shadow" style="border-radius: 10px;">
          <div class="col-md-6 col-12 d-flex align-items-center justify-content-center p-5">
            <img src="img/logo.png" width="100%" alt="">

          </div>
          <div class="col-md-6 col-12 d-flex align-items-center justify-content-center text-white py-3"
            style="background-color: #4B0ACE;border-radius: 10px;">
            <div>
              <h4 align="center">Login Your Account</h4>
              <hr style="background-color: aliceblue">
              @if (session('status'))    
              <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
              <form action="{{ route('cekLogin') }}" method="Post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Username">
                  <small id="emailHelp" class="form-text">admin= ashim : Ashim1,staf= staf : Staf1</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                    placeholder="Password">
                </div>
                <button type="submit" class="btn font-weight-bold col-12 mt-2"
                  style="background-color: #FFA910;">Login</button>
              </form>
            </div>
          </div>
        </div>
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