<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public $fillable = [
        'kategori_nama'
    ];
    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }
}
