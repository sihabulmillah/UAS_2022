@extends('template')
@section('konten')
<div class="col-12 bg-white rounded mt-3 p-3">
  <h3>List Transaksi</h3>
  <span style="font-size: 14px"><i class="fa fa-store"></i> SM~Gamer</span>
  <hr style="margin-top: 3px" />
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Pesanan</th>
        <th scope="col">Total Pembayaran</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <td scope="row">{{ $no++ }}</td>
        <td>{{ $item->pesanan->id_pengguna }}</td>
        <td>@php
            $harga = $item['total_bayar'];
              $rupiah = number_format($harga,'2',',','.');
              echo "Rp $rupiah";
              @endphp</td>
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