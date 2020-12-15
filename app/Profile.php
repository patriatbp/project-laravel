<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profiles";
    protected $fillable = ["nama_lengkap", "email", "photo"];
}
