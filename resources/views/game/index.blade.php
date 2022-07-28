@extends('template')
@section('konten')
<div class="col-12 bg-white rounded mt-3 p-3">
  <h3>List Game's</h3>
  <span style="font-size: 14px;"><i class="fa fa-store"></i> SM~Gamer</span>
  <hr style="margin-top: 5px">
  <a href="{{route('game.create')}}"><button class="btn btn-success btn-sm mb-1" style="font-size: 12px"><i class="fa fa-plus-circle"></i> Add Data</button></a>
  <table class="table table-hover mt-2">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Gambar</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $item['nama_game'] }}</td>
        <td><img src="{{ asset('upload') }}/{{ $item['gambar'] }}" width="90" alt=""></td>
        <td class="d-flex" align="center">
        <a href="{{ route('game.show',['game' => $item['id']]) }}"><button class="btn btn-primary btn-sm m-auto" style="font-size: 15px"><i
        class="fa fa-info-circle"></i></button></a>
        <a href="{{ route('game.edit',['game' => $item['id']]) }}"><button class="btn btn-warning text-dark btn-sm" style="font-size: 15px"><i
          class="fa fa-pencil"></i></button></a>
          <form action="{{ route('game.destroy',['game' => $item['id']]) }}" method="Post">
            @method("delete")
            @csrf
            <button class="btn btn-danger btn-sm" v-onclik="hapus()" style="font-size: 15px"><i class="fa fa-trash"></i></button>
          </form>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection