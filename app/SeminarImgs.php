<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeminarImgs extends Model
{
    //

    public function seminar()
    {
        $this->belongsToMany('App\Seminars');
    }
}
