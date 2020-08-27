<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    // protected $table = 'login';

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'token',
        'level'
    ];

    public function article()
    {
        return $this->hasMany('App\Article');
    }
}
