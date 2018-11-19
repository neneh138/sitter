<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SitterAge extends Model
{
    //
    public function sitters()
    {
        return $this->HasMany('App\Sitter');
    }

}
