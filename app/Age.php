<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Age extends Model
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
