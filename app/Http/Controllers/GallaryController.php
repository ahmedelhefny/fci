<?php

namespace App\Http\Controllers;

use App\Complain;
use App\Seminars;
use App\Speakers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\SeminarImgs;

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
    public function getAllImg($id)
    {
        $imgs=SeminarImgs::where('Seminar_id',$id)->get();
        $total=SeminarImgs::where('Seminar_id',$id)->count();
        $S_name=Seminars::where('id',$id)->first();
        return view('meeting_pic',compact('imgs','total','S_name'));
    }
    public function deleteMImg($id)
    {
        SeminarImgs::where('id',$id)
        ->delete();
    return redirect()->back();
    }




}
