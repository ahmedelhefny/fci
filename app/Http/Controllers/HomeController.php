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
        $allMeetings=DB::table('allmeeting')
        ->orderBy('Year','desc')
        ->get();

        $contact=DB::table('contactus')->first();

        return view('home',compact('ImgUrl','axes','parts','ImgLog','allMeetings','SDay','contact'));

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
        $SDay=DB::table('seminars')
            ->where('S_date','=',date('Y-m-d',time()))
            ->get();

        $allMeetings=DB::table('allmeeting')
            ->orderBy('Year','desc')
            ->get();

        $SData=DB::table('seminars')
            ->join('speakers','seminars.id','=','speakers.Seminar_id')
            ->whereYear('S_date', '=',$date)

            ->get();
            $contact=DB::table('contactus')->first();

        return view('meetings',compact('SData','contact','SDay','allMeetings'));
    }


    //contact edit
    public function uEdit()
    {
        DB::table('contactus')->where('id',\request('id'))
        ->update(['email1' => \request('email1'),'email2' => \request('email2'),'num1' => \request('num1')]);
        return back();

    }

    public function cEdit()
    {
        DB::table('contactus')->where('id',\request('id'))
        ->update(['email3' => \request('email3'),'email4' => \request('email4'),'num2' => \request('num2')]);
        return back();

    }


}
