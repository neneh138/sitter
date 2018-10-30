<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    public function sitters()
    {
        return $this->belongsToMany('App\Sitter');
    }

    public function families()
    {
        return $this->belongsToMany('App\Family');
    }
}
