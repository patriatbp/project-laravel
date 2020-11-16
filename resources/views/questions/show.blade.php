@extends('templates.master')

@section('content')
    <h2>Detail Pertanyaan</h2>
    <h4> {{$questions->judul}} </h4>
    <h3>{{$questions->isi}}</h3>  
    <p> {{$questions->tanggal_dibuat}} </p>
    <p> {{$questions->tanggal_diperbarui}} </p>
@endsection

@push('scripts')
    
@endpush