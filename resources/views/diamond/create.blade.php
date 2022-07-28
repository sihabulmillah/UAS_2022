@extends('template')
@section('konten')
      <div class="col-12 bg-white rounded mt-3 p-3">
            <h3>Add Diamond</h3>
            <span style="font-size: 14px"><i class="fa fa-store"></i> SM~Gamer</span>
            <hr style="margin-top: 3px" />
            <form action="{{ route('diamond.store') }}" method="Post">
              @csrf
              <div class="form-group">
                <label for="pilih">Pilih Game</label>
                <select class="custom-select @error('pilih') is-invalid @enderror" id="pilih" name="pilih">
                  <option hidden>Open this select menu</option>
                  @foreach ($data as $item)
                  <option value="{{ $item['id'] }}">{{ $item['nama_game'] }}</option>
                  @endforeach
                  @error('pilih')
                   <div class="invalid-feedback">
                   {{ $message }}
                   </div>    
                   @enderror
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Harga Diamond</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" id="exampleFormControlInput1"
                  placeholder="Name Game" />
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
          </form>
        </div>
@endsection