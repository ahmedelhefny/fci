<?php

namespace App\Http\Controllers;

use App\Complain;
use App\Seminars;
use App\Speakers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GallaryController extends Controller
{
    //gallery folder
    //get data from database
    public function getall()
    {
        $Spname=DB::table('speakers')
            -> join('seminars','seminars.id','=','speakers.Seminar_id')
            ->get();
        return view('Gallery',compact('Spname'));
    }




}
