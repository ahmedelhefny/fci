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

            $registe = new Regiserations();
            $registe->R_name = \request('name');
            $registe->R_faculty = \request('faculty');
            $registe->R_level = \request('level');
            $registe->R_depts = \request('dept');

            $registe->seminar_id = $id;
            $registe->R_location=$location . "مقعد رقم" . $chair;
            $registe->save();

            return view('confirm',compact('location','chair'));
        }

        else
        {
            $sorry="كل المدرجات قد امتلأت نأسف لانك لن تستطيع التسجيل او الحضور";
            return view('confirm',compact('sorry'));
        }





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

        return redirect()->back();
    }
}
