<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Suket extends Model
{
    protected $table = "suket";

    protected $fillable = ["nama_kegiatan", "tanggal_dimulai", "tanggal_selesai", "sipil_id", "petugas_id"];

    public function sipil()
    {
        return $this->belongsToMany('App\Sipil', 'suket', 'id', 'sipil_id');
    }
    public function petugas()
    {
        return $this->belongsToMany('App\Petuga', 'suket', 'id',  'petugas_id');
    }
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d F Y');
    }


}
