<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Question extends Model
{
    protected $table = "questions";
    protected $fillable = ["judul", "isi", "tanggal_dibuat", "tanggal_diperbarui","user_id"];

    public function penulis(){
      return $this->belongsTo('App\User' ,'user_id');  
    }

    public function jawaban(){
    return $this->hasMany('App\Answer');
    }

    public function tags(){
      return $this->belongsToMany('App\Tag', 'question_tag', 'question_id', 'tag_id');
    }

}
