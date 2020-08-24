<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'post_judul',
        'post_isi',
        'post_slug'
    ];
}
