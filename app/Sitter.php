<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sitter extends Model
{
    //

    public function families()
    {
        return $this->belongsToMany('App\Family');
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

    public function favorites()
    {
        return $this->belongsToMany('App\Favorite');
    }

    public function sitter_messages()
    {
        return $this->belongsToMany('App\SitterMessage');
    }

    public function sitter_reviews()
    {
        return $this->belongsToMany('App\SitterReview');
    }

    public function sitter_locations()
    {
        return $this->belongsToMany('App\SitterLocation');
    }

    public function sitter_certificates()
    {
        return $this->belongsToMany('App\SitterCertificate');
    }

    public function sitter_languages()
    {
        return $this->belongsToMany('App\SitterLanguage');
    }

    public function sitter_cares()
    {
        return $this->belongsToMany('App\SitterSpecialCare');
    }

    public function sitter_ages()
    {
        return $this->belongsToMany('App\SitterAge');
    }


    public function driver_licenses()
    {
        return $this->hasOne('App\DriverLicense');
    }

    public function smokers()
    {
        return $this->hasOne('App\Smoker');
    }



}
