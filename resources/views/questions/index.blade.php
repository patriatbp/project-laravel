@extends('templates.master')

@section('content')
    <a href="/pertanyaan/create" class="btn btn-primary" style="margin-bottom: 10px">Tanyakan Sesuatu</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Isi</th>
            <th scope="col">Tanggal Dibuat</th>
            <th scope="col">Tanggal Diperbarui</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($questions as $key=>$value)
                <tr>
                    <td>{{$key + 1}}</th>
                    <td>{{$value->judul}}</td>
                    <td>{{$value->isi}}</td>
                    <td>{{$value->tanggal_dibuat}}</td>
                    <td>{{$value->tanggal_diperbarui}}</td>
                    <td>
                        <a href="/pertanyaan/{{$value->id}}" class="btn btn-info">Show</a>
                        <a href="/pertanyaan/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                        <form action="/pertanyaan/{{$value->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr colspan="3">
                    <td>No data</td>
                </tr>  
            @endforelse              
        </tbody>
    </table>    
@endsection

@push('scripts')
    
@endpush