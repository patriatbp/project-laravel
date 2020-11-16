<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index(){
        $questions = \DB::table('questions')->get();
        return view('questions.index', compact('questions'));
    }

    public function create(){
        return view('questions.create');
    }

    public function insert(Request $request){
        $request->validate([
            'judul'=>'required',
            'isi'=>'required',
            'tanggal_dibuat'=>'required',
            
        ]);

        $query = \DB::table('questions')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "tanggal_dibuat" => $request["tanggal_dibuat"],
            "tanggal_diperbarui" => $request["tanggal_diperbarui"]
        ]);

        return redirect('/pertanyaan');
    }

    public function show($id){
        $questions = \DB::table('questions')->where('id', $id)->first();
        return view('questions.show', compact('questions'));
    }

    public function destroy($id){
        $questions = \DB::table('questions')->where('id', $id)->delete();
        return redirect('/pertanyaan');
    }

    public function edit($id){
        $questions = \DB::table('questions')->where('id', $id)->first();
        return view('questions.edit', compact('questions'));
    }

    public function update($id, Request $request){
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'tanggal_dibuat' => 'required',
            'tanggal_diperbarui' => 'required',
        ]);

        $query = \DB::table('questions')
            ->where('id', $id)
            ->update([
                'judul' => $request["judul"],
                'isi' => $request["isi"],
                'tanggal_dibuat' => $request["tanggal_dibuat"],
                'tanggal_diperbarui' => $request["tanggal_diperbarui"]
            ]);
        
        return redirect('/pertanyaan');
    }
}