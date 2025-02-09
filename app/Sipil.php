<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sipil extends Model
{
    protected $table = "sipil";

    protected $fillable = ["nik", "nama"];

    public function suket(){
        return $this->hasMany('App\Suket');
    }

}
