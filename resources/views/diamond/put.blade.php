@extends('template')
@section('konten')
      <div class="col-12 bg-white rounded mt-3 p-3">
            <h3>Add Game</h3>
            <span style="font-size: 14px"><i class="fa fa-store"></i> SM~Gamer</span>
            <hr style="margin-top: 3px" />
            <form action="{{ route('diamond.update',['diamond'=> $edit['id']]) }}" method="Post">
              @method('put')
              @csrf
              <div class="form-group">
                <label for="pilih">Pilih Game</label>
                <select class="custom-select" id="pilih" name="pilih">
                  <option hidden value="{{ $edit->game->id }}">{{ $edit->game->nama_game }}</option>
                  @foreach ($data as $item)
                  <option value="{{ $item['id'] }}">{{ $item['nama_game'] }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Harga Diamond</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $edit['harga_diamond'] }}" id="exampleFormControlInput1"/>
              @error('harga')
                  <div class="invalid-feedback">
                  {{ $message }}
                  </div>    
                  @enderror
              </div>

              <div class="mt-4">
                <button type="submit" class="col-12 btn btn-primary">
                  <i class="fa fa-save"></i> Save
                </button>
              </div>
          </div>
          </form>
@endsection