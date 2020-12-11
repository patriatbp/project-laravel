<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    public function penulis(){
        return $this->belongsTo('App\User' ,'user_id');  
      }

    public function jawaban(){
      return $this->hasMany('App\Answer');
    }
    protected $table = "questions";
    protected $fillable = ["judul", "isi", "tanggal_dibuat", "tanggal_diperbarui","user_id"];
}
