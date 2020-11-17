<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";
    protected $fillable = ["judul", "isi", "tanggal_dibuat", "tanggal_diperbarui"];
}
