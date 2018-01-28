<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regiserations extends Model
{
    //

    public function Seminars()
    {
        return $this->belongsToMany('App\Seminars');
    }
}
