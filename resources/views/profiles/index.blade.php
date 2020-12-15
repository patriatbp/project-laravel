@extends('templates.master')

@section('content')
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th class="col">Nama Lengkap</th>
                <th class="col">Email</th>
                <th class="col">Foto</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td> {{$profile->nama_lengkap}} </td>
                <td> {{$profile->email}} </td>
                <td> {{$profile->photo}} </td>
            </tr>
        </tbody>
    </table>
@endsection

@push('script')
    
@endpush