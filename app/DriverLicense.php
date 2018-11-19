<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverLicense extends Model
{
    //
    public function families()
    {
        return $this->hasOne('App\Family');
    }

    public function sitters()
    {
        return $this->hasOne('App\Sitter');
    }
}
