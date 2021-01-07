@extends('templates.master')

@section('content')
<form action="/profile" method="POST">
    @csrf
      <div class="form-group">
          <label for="nama_lengkap">Nama Lengkap</label>
          <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{old('nama_lengkap')}}">
          @error('nama_lengkap')
              <div class="alert alert-danger">
                  {{$message}}
              </div>
          @enderror

          <label for="email">Email</label>
          <input type="text" name="email" id="email" cols="30" rows="10" class="form-control" value="{{old('email')}}">
          @error('email')
              <div class="alert alert-danger">
                  {{$message}}
              </div>
          @enderror

          <label for="photo">Photo</label>
          <input type="text" name="photo" id="photo" class="form-control" value="{{old('photo')}}">
          @error('photo')
              <div class="alert alert-danger">
                  {{$message}}
              </div>
          @enderror
      </div>
      <button type="submit" class="btn btn-primary">Tambah</button>
  </form>
@endsection

@push('script')
    
@endpush