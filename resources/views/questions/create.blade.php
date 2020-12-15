@extends('templates.master')

@section('content')
    <h2>Masukan Pertanyaan</h2>
    <form action="/pertanyaan" method="POST">
      @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control">
            @error('judul')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror

            <label for="isi">Isi</label>
            <textarea name="isi" id="is" cols="30" rows="10" class="form-control"></textarea>
            @error('isi')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror

            <label for="tag">Kategori</label>
            <input type="text" name="tag" id="tag" class="form-control">
            @error('tag')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror

            <label for="tanggal_dibuat">Tanggal Dibuat</label>
            <input type="date" name="tanggal_dibuat" id="tanggal_dibuat" class="form-control" style="width: auto;" value ="<?php echo date('Y-m-d') ?>">
            @error('tanggal_dibuat')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror
            
            <label for="tanggal_diperbarui">Tanggal Diperbarui</label>
            <input type="date" name="tanggal_diperbarui" id="tanggal_diperbarui" class="form-control" style="width: auto;" value ="<?php echo date('Y-m-d') ?>" disabled>
            @error('tanggal_diperbarui')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror

        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection

@push('scripts')
    
@endpush