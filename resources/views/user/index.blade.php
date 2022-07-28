@extends('template')
@section('konten')
<div class="col-12 bg-white rounded mt-3 p-3">
  <h3>List User</h3>
  <span style="font-size: 14px"><i class="fa fa-store"></i> SM~Gamer</span>
  <hr style="margin-top: 3px" />
  <a href="{{route('user.create')}}"><button class="btn btn-success btn-sm mb-2" style="font-size: 12px"><i class="fa fa-plus-circle"></i> Add Data</button></a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Roles</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <td scope="row">{{ $no++ }}</th>
        <td>{{ $item['nama'] }}</td>
        <td>{{ $item['email'] }}</td>
        <td>
          @if ($item['role'] == 'a')
              <label for="" class="badge badge-primary">Admin</label>
          @else
              <label for="" class="badge badge-warning">Staff</label>
          @endif
        </td>
        <td class="d-flex">
        <a href="{{ route('user.show',['user' => $item['id']]) }}"><button class="btn btn-primary btn-sm m-auto" style="font-size: 15px"><i
        class="fa fa-info-circle"></i></button></a>
        <a href="{{ route('user.edit',['user' => $item['id']]) }}"><button class="btn btn-warning text-dark btn-sm" style="font-size: 15px"><i
          class="fa fa-pencil"></i></button></a>
          <form action="{{ route('user.destroy',['user' => $item['id']]) }}" method="Post">
            @method("delete")
            @csrf
            <button class="btn btn-danger btn-sm" style="font-size: 15px"><i class="fa fa-trash"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection