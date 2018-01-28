<?php

namespace App\Http\Controllers;

use App\Regiserations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeetingsController extends Controller
{
    //
    public function GetAll()
    {
        $SData=DB::table('seminars')
            ->join('speakers','seminars.id','=','speakers.Seminar_id')
            ->get();
        return view('meetings',compact('SData'));
    }

    public function GetSeminar($id)
    {
        $AllData =DB::table('seminars')
            ->join('speakers','seminars.id','=','speakers.Seminar_id')
            ->where('seminars.id','=',$id)
            ->first();
        return view('informations' , compact('AllData'));
    }

    public function StoreData($id)
    {
        $registe=new Regiserations();
        $registe->R_name=\request('name');
        $registe->R_faculty=\request('faculty');
        $registe->R_level=\request('level');
        $registe->R_depts=\request('dept');

        $registe->seminar_id=$id;
        $registe->save();

        return back();
    }

}
