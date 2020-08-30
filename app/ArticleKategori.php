<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ArticleKategori extends Pivot
{
    // public function articles(){
    //     return $this->hasMany('')
    // }
    protected $table = 'articles_kategoris';
}
