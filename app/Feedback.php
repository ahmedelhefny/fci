<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //

    public function seminars()
    {
        return $this->belongsToMany('App\Seminars');
    }
}
