@extends('template')

@section('konten')
<div class="col-12 bg-white rounded mt-3 p-3">
  <h3>Add Game</h3>
  <span style="font-size: 14px;"><i class="fa fa-store"></i> SM~Gamer</span>
  <hr style="margin-top: 3px;">
  <form action="{{ route('game.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Nama</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="exampleFormControlInput1" placeholder="Name Game">
       @error('nama')
    <div class="invalid-feedback">
    {{ $message }}
    </div>    
    @enderror
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Deskripsi</label>
      <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
       @error('deskripsi')
    <div class="invalid-feedback">
    {{ $message }}
    </div>    
    @enderror
    </div>
    <div class="row">
      <div class="col-6 form-group ">
        <label for="exampleFormControlFile1">Gambar</label>
        <input type="file" class="form-control-file @error('nama') is-invalid @enderror" name="gambar" id="exampleFormControlFile1">
       @error('gambar')
    <div class="invalid-feedback">
    {{ $message }}
    </div>    
    @enderror
      </div>
      <div class="mt-4">
        <button type="submit" class="col-12 btn btn-primary"><i class="fa fa-save"></i> Save</button>
      </div>
    </div>
  </form>
</div>
@endsection