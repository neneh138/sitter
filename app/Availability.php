<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    //

    public function sitters()
    {
        return $this->belongsToMany('App\Sitter');
    }

    public function rodicove()
    {
        return $this->belongsToMany('App\Rodic');
    }
}


