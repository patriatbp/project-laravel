<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = "answers";
    protected $fillable = ["isi","tanggal_dibuat","tanggal_diperbarui","user_id","question_id"];
}
