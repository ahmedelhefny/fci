<?php

namespace App\Http\Controllers;

use App\Complain;
use App\Impimg;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    //set complain in database
    public function storecomplain()
    {
        request()->validate([

    		'C_content'=>'required|string',
    		
    		]);


        $complain=new Complain();
        $complain->C_content=\request('C_content');
        $complain->save();

        return back();
    }


    //get All to home page
    public function GetAll()
    {
        $SDay=DB::table('seminars')
            ->where('S_date','=',date('Y-m-d',time()))
            ->get();
        $parts=DB::table('partners')->get();
        $axes=DB::table('axes')->get();
        $ImgUrl=DB::table('impimgs')->get();
        $ImgLog=DB::table('contacts')->first();
        $allMeetings=DB::table('AllMeeting')
        ->orderBy('Year','desc')
        ->get();

        return view('home',compact('ImgUrl','axes','parts','ImgLog','allMeetings'));
        return view('home',compact('ImgUrl','axes','parts','ImgLog','SDay'));

    }

    //delete slider imgs
    public function DeleteImgs($id)
    {
        Impimg::where('id',$id)
            ->delete();
        return redirect()->back();
    }

    //delete Axes
    public function DeleteAxes($id)
    {
        DB::table('axes')
            ->where('id',$id)
            ->delete();
        return redirect()->back();
    }

    //delete Partners
    public function DeleteParts($id)
    {
        DB::table('partners')
            ->where('id',$id)
            ->delete();
        return redirect()->back();
    }

    //delete Image logo
    public function DelImgLogo($id)
    {
        DB::table('contacts')
            ->where('id','=',$id)
            ->delete();
        return redirect()->back();
    }

    //get Archive
    public function gatArchive($date)
    {
        $SData=DB::table('seminars')
            ->join('speakers','seminars.id','=','speakers.Seminar_id')
            ->whereYear('S_date', '=',$date)

            ->get();
        return view('meetings',compact('SData'));
    }

}
