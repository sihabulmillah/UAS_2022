@extends('template')
@section('konten')
<div class="col-12 bg-white rounded mt-3 p-3">
<h3>User</h3>
<span style="font-size: 16px"><i class="fa fa-store"></i> SM~Gamer</span>
<hr style="margin-top: 3px" />
<div class="text-center">
<img src="{{ asset('upload') }}/{{ $data['foto'] }}" class="rounded-circle p-1" width="116"
  style="border: 2px solid rgba(0, 0, 0, .4);" alt="">
<h4 class="mt-2">{{ $data['nama'] }}</h4>
<div class="row px-3 mt-3">
  <div class="col-4 border rounded">
    <label for="">Username</label>
    <h5>{{ $data['username'] }}</h5>
  </div>
  <div class="col-4 border rounded">
    <label for="">Level</label>
    @if ($data['role'] == 'a')
    <h5>Admin</h5>
    @else
    <h5>Staff</h5>
    @endif
  </div>
  <div class="col-4 border rounded">
    <label for="">Email</label>
    <h5>{{ $data['email'] }}</h5>
  </div>
</div>
<div class="border mt-3 rounded">
  <label for="">Alamat</label>
  <p>{{ $data['alamat'] }}</p>
</div>
</div>
</div>
@endsection