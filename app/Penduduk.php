<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Penduduk extends Model
{
    protected $guarded = [];

    public function umur(){
      $umur = Carbon::parse($this->tgl_lahir)->age;
      return $umur;
    }

    public function keluarga(){
      return $this->hasMany(Keluarga::class);
    }
}
