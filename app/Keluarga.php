<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $guarded = [];

    public function penduduks(){
      return $this->belongsTo(Penduduk::class);
    }

}
