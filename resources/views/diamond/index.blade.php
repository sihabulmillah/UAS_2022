@extends('template')

@section('konten')
    <div class="col-12 bg-white rounded mt-3 p-3">
            <h3>List Diamond</h3>
            <span style="font-size: 14px"><i class="fa fa-store"></i> SM~Gamer</span>
            <hr style="margin-top: 3px" />
            <a href="{{route('diamond.create')}}"><button class="btn btn-success btn-sm mb-2" style="font-size: 12px"><i class="fa fa-plus-circle"></i> Add Data</button></a>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Game</th>
                  <th scope="col">Harga Diamond</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item)
                    
                <tr>
                  <td scope="row">{{ ++$no }}</td>
                  <td>{{ $item->game->nama_game }}</td>
                  <td>@php
                        $harga = $item['harga_diamond'];
                        $rupiah = number_format($harga,'2',',','.');
                        echo "Rp $rupiah";
                        @endphp</td>
                  <td class="d-flex">
                    <a href="{{ route('diamond.edit',['diamond'=>$item['id']]) }}"><button class="btn btn-warning text-dark btn-sm" style="font-size: 15px"><i
                      class="fa fa-pencil"></i></button></a>
                      <form action="{{ route('diamond.destroy',['diamond' => $item['id']]) }}" method="Post">
                        @method('delete')
                        @csrf
                      <button class="btn btn-danger btn-sm" v-onclik="hapus()"  style="font-size: 15px"><i
                        class="fa fa-trash"></i></button>
                        </form>
                      </td>
                    </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                    <td>Jumlah Data : {{$jumlah}}</td>
                    <td colspan="2" align="right">
                        {{$data->links()}}
                    </td>
                </tr>
            </tfoot>
            </table>
          </div>
@endsection