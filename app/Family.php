<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    //
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

    public function special_cares()
    {
        return $this->belongsToMany('App\SpecialCare');
    }

    public function languages()
    {
        return $this->belongsToMany('App\Language');
    }

    public function certificates()
    {
        return $this->belongsToMany('App\Certificate');
    }

    public function favorites()
    {
        return $this->belongsToMany('App\Favorite');
    }
}
