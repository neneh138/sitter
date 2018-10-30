<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sitter extends Model
{
    //
    public function rodicove()
    {
        return $this->belongsToMany('App\Rodic');
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

    public function locations()
    {
        return $this->belongsToMany('App\Location');
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
