<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //
    public function families()
    {
        return $this->belongsToMany('App\Family');
    }

    public function sitters()
    {
        return $this->belongsToMany('App\Sitter');
    }
}
