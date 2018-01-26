<?php

namespace App\Http\Controllers;

use App\Seminars;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GallaryController extends Controller
{
    //
    public function getall()
    {
        $Spname=DB::table('speakers')
            -> join('seminars','seminars.id','=','speakers.Seminar_id')
            ->get();
        return view('Gallery',compact('Spname'));
    }
}
