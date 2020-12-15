@extends('templates.master')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h2> {{$questions->judul}} </h2>
    </div>
    <div class="card-body">
            <h3>{{$questions->isi}}</h3>  
    </div>
</div>
 <p>{{$questions->created_at}} || {{$questions->penulis->name}} </p>
 <h3>Tags : </h3>
 @foreach ($questions->tags as $tag)
     <button class="btn btn-primary"> {{$tag->nama_kategori}} </button>
 @endforeach

 <h3>Jawaban</h3>
    <div class="container overflow-auto" style="height: 300px; padding-top:10px;">
        
        <table class="table ">
            @forelse ($answer as $key=>$value)
                <tr>    
                    <td> {{$value->isi}} </td>
                    <td> {{$value->created_at}} </td>
                    <td>
                        <form action="/jawaban/{{$value->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger my-1" value="Delete">
                        </form>
                </td>
                </tr>
            @empty
                Belum ada jawaban
            @endforelse
            <tr>
                <td></td>
            </tr>
        </table>
    </div>
    
    <h2>Isi Jawaban</h2>
    <form action="/jawaban" method="POST">
        @csrf
        <div class="form-group">
            <div class="col-7">
                <textarea name="isi_jawaban" cols="50" rows="7"  class="form-control"></textarea><br>
                <input type="text" hidden value=" {{$questions->id}} " name="questions_id">
                <button type="submit" class="btn btn-primary">Jawab</button>
            </div>
        </div>    
    </form>
    

@endsection

@push('scripts')
    
@endpush