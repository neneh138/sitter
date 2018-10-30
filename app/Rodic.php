<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rodic extends Model
{
    public function sitters()
    {
        return $this->belongsToMany('App\Sitter');
    }

    public function ages()
    {
        return $this->belongsToMany('App\Age');
    }

    public function availabilities()
    {
        return $this->belongsToMany('App\Availability');
    }

    public function spcialneeds()
    {
        return $this->belongsToMany('App\SpecialNeed');
    }

    public function languages()
    {
        return $this->belongsToMany('App\Language');
    }

    public function certificates()
    {
        return $this->belongsToMany('App\Certificate');
    }
}
