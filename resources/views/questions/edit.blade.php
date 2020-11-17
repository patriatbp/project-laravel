@extends('templates.master')

@section('content')
    <h2>Edit Pertanyaan {{$questions->id}} </h2>
    <form action="/pertanyaan/{{$questions->id}}" method="POST">
      @csrf
      @method('PUT')
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{$questions->judul}}">
            @error('judul')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror

            <label for="isi">Isi</label>
            <input type="text" name="isi" id="isi" class="form-control" value="{{$questions->isi}}">
            @error('isi')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror

            <label for="tanggal_dibuat">Tanggal Dibuat</label>
            <input type="date" name="tanggal_dibuat" id="tanggal_dibuat" class="form-control" style="width: auto;" value ="{{$questions->tanggal_dibuat}}">
            @error('tanggal_dibuat')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            
            <label for="tanggal_diperbarui">Tanggal Diperbarui</label>
            <input type="date" name="tanggal_diperbarui" id="tanggal_diperbarui" class="form-control" style="width: auto;"  value="<?php echo date('Y-m-d') ?>">
            @error('tanggal_diperbarui')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror

        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

@push('scripts')
    
@endpush