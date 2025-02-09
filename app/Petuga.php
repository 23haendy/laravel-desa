<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petuga extends Model
{
    protected $table = "petugas";

    protected $fillable = ["nik", "nama", "jabatan"];

    public function suket(){
        return $this->hasMany('App\Suket');
    }
}
