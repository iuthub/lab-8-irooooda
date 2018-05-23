<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like
{
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
    public function likeapost()
    {


    }

}
