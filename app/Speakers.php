<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speakers extends Model
{
    //

    public function Seminars()
    {
        return $this->belongsTo('App\Seminars');
    }
}
