<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

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
        return $this->belongsToMany('App\Kategori')->withPivot('kategori_id', 'article_id');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
