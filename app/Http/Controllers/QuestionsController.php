<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul'=>'required',
            'isi'=>'required',
            'tanggal_dibuat'=>'required'
            
        ]);

        Question::create([
            'judul'=>$request->judul,
            'isi'=>$request->isi,
            'tanggal_dibuat'=>$request->tanggal_dibuat,
            'tanggal_diperbarui'=>$request->tanggal_diperbarui
        ]);

        return redirect('/pertanyaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questions = Question::find($id);
        return view('questions.show', compact('questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questions = Question::find($id);
        return view('questions.edit', compact('questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'=>'required',
            'isi'=>'required',
            'tanggal_dibuat'=>'required',
            'tanggal_diperbarui'=>'required'
        ]);

        $questions = Question::find($id);
        $questions->judul = $request->judul;
        $questions->isi = $request->isi;
        $questions->tanggal_dibuat = $request->tanggal_dibuat;
        $questions->tanggal_diperbarui = $request->tanggal_diperbarui;
        $questions->update();

        return redirect('/pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $questions = Question::find($id);
        $questions->delete();
        return redirect('/pertanyaan');
    }
}
