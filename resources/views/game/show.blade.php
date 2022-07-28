@extends('template')
@section('konten')
  <div class="col-12 bg-white rounded mt-3 p-3">
  <h3>{{ $data['nama_game'] }}</h3>
  <span style="font-size: 16px"><i class="fa fa-store"></i> SM~Gamer</span>
  <hr style="margin-top: 3px" />
  <div class="row">
    <div class="col-12 d-flex">
      <div class="col-3 h-25" >
      <img src="{{ asset('upload') }}/{{ $data['gambar'] }}" width="100%" style="float: left" alt="">
      </div>
      <div class="px-4">
      <h3>Deskripsi</h3>
      <p style="text-indent: 30px;" align="justify">{{ $data['deskripsi'] }}</p>
      </div>
    </div>
  </div>
  </form>
  </div>
@endsection