<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SitterLocation extends Model
{
    //
    public function sitters()
    {
        return $this->HasMany('App\Sitter');
    }
}
