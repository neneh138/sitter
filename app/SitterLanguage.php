<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SitterLanguage extends Model
{
    //
    public function sitters()
    {
        return $this->HasMany('App\Sitter');
    }
}
