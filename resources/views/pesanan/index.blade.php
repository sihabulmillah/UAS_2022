@extends('template')
@section('konten')
<div class="col-12 bg-white rounded mt-3 p-3">
  <h3>List Pesanan</h3>
  <span style="font-size: 14px"><i class="fa fa-store"></i> SM~Gamer</span>
  <hr style="margin-top: 3px" />
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Pengguna</th>
        <th scope="col">Diamond</th>
        <th scope="col">Jumlah Pesanan</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $item['id_pengguna'] }}</td>
        <td>
          @php
            $harga = $item->diamond->harga_diamond;
            $rupiah = number_format($harga,'2',',','.');
            echo "Rp $rupiah";
            @endphp
            </td>
        <td>{{ $item['jumlah_diamond'] }}</td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">Jumlah Data : {{$jumlah}}</td>
            <td colspan="2" align="right">
                {{$data->links()}}
            </td>
        </tr>
    </tfoot>
  </table>
</div>
@endsection