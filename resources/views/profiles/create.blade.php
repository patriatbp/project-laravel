@extends('templates.master')

@section('content')
<form action="/profiles" method="POST">
    @csrf
      <div class="form-group">
          <label for="judul">Nama Lengkap</label>
          <input type="text" name="judul" id="judul" class="form-control">
          @error('judul')
              <div class="alert alert-danger">
                  {{$message}}
              </div>
          @enderror

          <label for="isi">Email</label>
          <textarea name="isi" id="is" cols="30" rows="10" class="form-control"></textarea>
          @error('isi')
              <div class="alert alert-danger">
                  {{$message}}
              </div>
          @enderror

          <label for="tag">Photo</label>
          <input type="text" name="tag" id="tag" class="form-control">
          @error('tag')
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