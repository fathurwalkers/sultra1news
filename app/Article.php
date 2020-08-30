<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'post_judul',
        'post_isi',
        'post_slug',
        'kategori',
        'login_id',
        'gambar'
    ];

    public function login()
    {
        return $this->belongsTo('App\Login');
    }

    public function kategoris()
    {
        return $this->belongsToMany('App\Kategori')->withTimestamps();
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
