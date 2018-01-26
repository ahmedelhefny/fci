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
}
