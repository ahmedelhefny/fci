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
        $S_name = Seminars::all();
        $name=DB::table('seminars')->get();
        return view('Gallery',compact('name','S_name'));
    }
}
