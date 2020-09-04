<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Article;
use App\Kategori;

class ArticleKategori extends Pivot
{
    // public function articles(){
    //     return $this->hasMany('')
    // }
    protected $table = 'article_kategori';

    // public function kategori()
    // {
    //     return $this->belongsTo('App\Kategori');
    // }

    // public function article()
    // {
    //     return $this->belongsTo('App\Article');
    // }
}
