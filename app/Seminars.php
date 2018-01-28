<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminars extends Model
{
    //

    public function seminarImgs()
    {
        return $this->hasMany('App\SeminarImgs');
    }

    public function speakers()
    {
        return $this->hasOne('App\Speakers');
    }

    public function Registerations()
    {
        return $this->belongsToMany('App\Regiserations');
    }
}
