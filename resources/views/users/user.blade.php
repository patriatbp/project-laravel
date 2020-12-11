@extends('templates.master')

@section('content')
<h3>One to one</h3>
<table>
  <thead>
   <tr>
    <th>username</th>
    <th>email</th>
    <th>nama</th>
   </tr>
  <tbody>
   @foreach($user as $value)
   <tr>
    <td>{{$value->name}}</td>
    <td>{{$value->email}}</td>
    <td>{{$value->profile->nama_lengkap}}</td>
   </tr>
   @endforeach
  <tbody>
  </thead>
</table>
@endsection

@push('script')
    
@endpush