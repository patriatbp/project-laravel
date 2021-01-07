<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;
use App\Answer;
use App\Tag;
use Auth;


class QuestionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::latest()->get();
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

        $tag_arr = explode(',', $request["tag"]);

        $tag_ids = [];

        foreach($tag_arr as $tag_name){
            $tag = Tag::firstOrCreate(["nama_kategori" => $tag_name]);

            $tag_ids[] = $tag->id;
        }

        $questions = Question::create([
            'judul'=>$request->judul,
            'isi'=>$request->isi,
            'tanggal_dibuat'=>$request->tanggal_dibuat,
            'tanggal_diperbarui'=>$request->tanggal_diperbarui,
            'user_id' => Auth::id()
        ]);

        $questions->tags()->sync($tag_ids);

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

        $answer = $questions->jawaban;

        return view('questions.show', compact('questions','answer'));
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

        // $answer = $questions->jawaban;
        

        // $hapus = \DB::table('answers')->where('id', $answer)->delete();

        $questions->delete();
        return redirect('/pertanyaan');
    }
}
