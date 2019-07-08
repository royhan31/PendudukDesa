<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $guarded = [];

    public function penduduk(){
      return $this->belongsTo(Penduduk::class,'id_penduduk','id');
    }

}
