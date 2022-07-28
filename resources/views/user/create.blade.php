@extends('template')
@section('konten')
<div class="col-12 bg-white rounded mt-3 p-3">
  <h3>Add User</h3>
  <span style="font-size: 14px"><i class="fa fa-store"></i> SM~Gamer</span>
  <hr style="margin-top: 3px" />
  <form action="{{ route('user.store') }}" method="Post" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nama</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="inputEmail4" placeholder="Nama Anda">
        @error('nama')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>    
                  @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Username</label>
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="inputPassword4" placeholder="Username">
        @error('username')
        <div class="invalid-feedback">
        {{ $message }}
        </div>    
        @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail4" placeholder="Email">
        @error('email')
        <div class="invalid-feedback">
        {{ $message }}
        </div>    
        @enderror
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword4"
          placeholder="Password">
          @error('password')
        <div class="invalid-feedback">
        {{ $message }}
        </div>    
        @enderror
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6 d-flex align-items-center">
        <div class="form-group">
          <label for="exampleFormControlFile1">Foto</label>
          <input type="file" class="form-control-file @error('foto') is-invalid @enderror" name="foto" id="exampleFormControlFile1">
          @error('foto')
        <div class="invalid-feedback">
        {{ $message }}
        </div>    
        @enderror
        </div>

      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Konfirmasi</label>
        <input type="password" name="konfirmasi" class="form-control @error('konfirmasi') is-invalid @enderror" id="inputPassword4"
          placeholder="Password">
          @error('konfirmasi')
        <div class="invalid-feedback">
        {{ $message }}
        </div>    
        @enderror
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Alamat</label>
      <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
      @error('alamat')
        <div class="invalid-feedback">
        {{ $message }}
        </div>    
        @enderror
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <div><label for=""><small class="text-danger">*</small> Level</label></div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline1" name="level" value="a" class="custom-control-input">
          <label class="custom-control-label" for="customRadioInline1">Admin</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" id="customRadioInline2" name="level" value="s" class="custom-control-input">
          <label class="custom-control-label" for="customRadioInline2">Staff</label>
        </div>
      </div>
      <div class="form-group col-md-6">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
      </div>
    </div>
  </form>
</div>
@endsection