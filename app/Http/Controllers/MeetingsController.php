<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Regiserations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;
use phpDocumentor\Reflection\Types\Nullable;

class MeetingsController extends Controller
{
    //get all seminars
    public function GetAll()
    {

        $day=DB::table('seminars')
            ->where('S_date','=',date('Y-m-d',time()))
            ->get();

        $SData=DB::table('seminars')
            ->join('speakers','seminars.id','=','speakers.Seminar_id')
            ->whereYear('S_date', '=', date('Y'))

            ->get();
        return view('meetings',compact('SData' ,'day'));
    }

    public function GetSeminar($id)
    {
        $SDay=DB::table('seminars')
        ->where('S_date','=',date('Y-m-d',time()))
        ->get();
        $AllData =DB::table('seminars')
            ->join('speakers','seminars.id','=','speakers.Seminar_id')
            ->where('seminars.id','=',$id)
            ->first();
        return view('informations' , compact('AllData','SDay'));
    }

    public function StoreData($id)
    {

        $Num=DB::table('regiserations')
            ->where('regiserations.seminar_id','=',$id)
            ->count();
        $location="";
        $chair=0;
        if ($Num ==0 || $Num <681 ) {

            if ($Num + 1 > 0 || $Num + 1 < 231) {
                $location = "مدرج 1";
                $chair = $Num + 21;

            } elseif ($Num + 1 > 230 || $Num + 1 < 481) {
                $location = "مدرج 2";
                $chair = ($Num + 1) - 230;

            } elseif ($Num + 1 > 480 || $Num + 1 < 681) {
                $location = "مدرج 3";
                $chair = ($Num + 1) - 480;
            }
            \request()->validate([
                'name'=>'required|string',
                'faculty'=>'required|string',

                'level'=>'required|string',

                'dept'=>'nullable|string',


            ]);

            $registe = new Regiserations();
            $registe->R_name = \request('name');
            $registe->R_faculty = \request('faculty');
            $registe->R_level = \request('level');
            $registe->R_depts = \request('dept');

            $registe->seminar_id = $id;
            $registe->R_location=$location . "مقعد رقم" . $chair;
            $registe->r_id=$chair;

            $registe->save();

            return view('confirm',compact('location','chair'));
        }

        else
        {
            $location="كل المدرجات قد امتلأت نأسف لانك لن تستطيع التسجيل او الحضور";
            $chair=0;
            return view('confirm',compact('location','chair'));
        }





    }

    public function PassId($id)
    {
        $S_id=$id;
        $SDay=DB::table('seminars')
        ->where('S_date','=',date('Y-m-d',time()))
        ->get();
        return view('survey', compact('S_id','SDay'));
    }

    public function DeleSem($id)
    {
        DB::table('speakers')
            ->where('Seminar_id','=',$id)
            ->delete();

        DB::table('seminar_imgs')
            ->where('Seminar_id','=',$id)
            ->delete();

        DB::table('regiserations')
            ->where('seminar_id','=',$id)
            ->delete();

        DB::table('seminars')
            ->where('seminars.id','=',$id)
            ->delete();


    }

    public function StorSur($id)
    {
        $feed=new Feedback();

        $feed->Q1=\request('momtaz1');
        $feed->Q2=\request('momtaz_2');
        $feed->Q3=\request('momtaz_3');
        $feed->Q4=\request('momtaz_4');
        $feed->Q5=\request('momtaz_5');
        $feed->Q6=\request('momtaz_6');
        $feed->Q7=\request('momtaz_7');
        $feed->seminar_id=$id;
        $feed->save();
        return redirect()->back();
    }
}
