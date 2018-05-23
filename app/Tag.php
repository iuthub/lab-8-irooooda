<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag
{
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }

    public function tagapost()
    {

    }
}
