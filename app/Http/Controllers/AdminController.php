<?php

namespace App\Http\Controllers;

use App\Impimg;
use App\SeminarImgs;
use App\Seminars;
use App\Speakers;
use App\Partners;
use App\Contact;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function addmeeting()
    {
        \request()->validate([
            'date'=>'required|string',

        ]);

        DB::table('AllMeeting')->insert([
            ['Year' => \request('date')]
        ]);
        return back();
    }

    public function getallmeetings()
    {
        $meetings=DB::table('AllMeeting')->get();
        return view('admin',compact('meetings'));
    }

    public function addseminars()
    {
        \request()->validate([
            'sname'=>'required|string',
            'scontent'=>'required|string',
            'sstart'=>'required|string',
            'send'=>'required|string',
            'sdate'=>'required|date',
            'sspname'=>'required|string',
            'sspcontent'=>'required|string',
            'sspcompany'=>'string',

        ]);

        $img_name=time().'.'.request('simg')->getClientOriginalExtension();


        $seminars=new Seminars();
        $speakers=new Speakers();

        $seminars->S_name=\request('sname');
        $seminars->S_content=\request('scontent');
        $seminars->S_start=\request('sstart');
        $seminars->S_end=\request('send');
        $seminars->S_date=date('Y-m-d',strtotime(request('sdate')));
        $seminars->S_url=$img_name;
        $seminars->save();

        \request('simg')->move(public_path('images/'),$img_name);


        $speakers->SP_name=\request('sspname');
        $speakers->SP_company=\request('sspcontent');
        $speakers->SP_content=\request('sspcompany');
        $speakers->Seminar_id=$seminars->id;
        $speakers->save();


        return back();
    }

    public function storeImpIMg()
    {
        \request()->validate([

            'imp_url'=>'required'
        ]);

        $img_name=time().'.'.request('imp_url')->getClientOriginalExtension();


        DB::table('impimgs')->insert([
            ['Imp_url'=>$img_name]
        ]);

        \request('imp_url')->move(public_path('images/important imgs'),$img_name);

        return back();
    }

    public function getall()
    {
        $sems=DB::table('seminars')->get();
        $coms=DB::table('complains')->get();
        $users=User::all();


        return view('admin',compact('sems','coms','users'));

    }

    public function storeSemImg()
    {
        \request()->validate([

            'semimg'=>'required'
        ]);

        $img_name=time().'.'.request('semimg')->getClientOriginalExtension();


        $imps=new SeminarImgs();

        $imps->SI_url=$img_name;
        $imps->Seminar_id=\request('semid');
        $imps->save();
        \request('semimg')->move(public_path('images/Seminars_Image'),$img_name);

        return back();
    }
    public function addPart()
    {
        $part=new Partners();
        $img_name=time().'.'.request('partimg')->getClientOriginalExtension();

        $part->P_name=\request('partname');
        $part->P_description=\request('partcontent');
        $part->P_url=$img_name;
        $part->save();

        \request('partimg')->move(public_path('images/partners imgs'),$img_name);

        return back();

    }
    public function addLogo()
    {
        $logo=new Contact();

        $img_name=time().'.'.request('meetimg')->getClientOriginalExtension();

        $logo->Log_url=$img_name;
        $logo->save();
        \request('meetimg')->move(public_path('images/contact_imgs'),$img_name);
        return back();
    }
    public function Reg()
    {
        $roll=DB::table('regiserations')
            ->where('seminar_id','=',\request('semid'))
            ->get();

        return response()->json(['success'=>true,'roll'=>$roll],200);
    }

 public function getfeed()
    {
        for ($i=0 ; $i<5 ;$i++)
        {
            $q1[$i]=DB::table('feedback')
                ->where('seminar_id','=',\request('feedid'))
                ->where('Q1',($i+1))
                ->count();


        }

        for ($i=0 ; $i<5 ;$i++)
        {
            $q2[$i]=DB::table('feedback')
                ->where('seminar_id','=',\request('feedid'))
                ->where('Q2',($i+1))
                ->count();


        }
        for ($i=0 ; $i<5 ;$i++)
        {
            $q3[$i]=DB::table('feedback')
                ->where('seminar_id','=',\request('feedid'))
                ->where('Q3',($i+1))
                ->count();


        }
        for ($i=0 ; $i<5 ;$i++)
        {
            $q4[$i]=DB::table('feedback')
                ->where('seminar_id','=',\request('feedid'))
                ->where('Q4',($i+1))
                ->count();


        }
        for ($i=0 ; $i<5 ;$i++)
        {
            $q5[$i]=DB::table('feedback')
                ->where('seminar_id','=',\request('feedid'))
                ->where('Q5',($i+1))
                ->count();


        }
        for ($i=0 ; $i<5 ;$i++)
        {
            $q6[$i]=DB::table('feedback')
                ->where('seminar_id','=',\request('feedid'))
                ->where('Q6',($i+1))
                ->count();


        }
        for ($i=0 ; $i<5 ;$i++)
        {
            $q7[$i]=DB::table('feedback')
                ->where('seminar_id','=',\request('feedid'))
                ->where('Q7',($i+1))
                ->count();


        }


        return response()->json(['success'=>true,'q1'=>$q1,'q2'=>$q2,'q3'=>$q3,'q4'=>$q4,'q5'=>$q5,'q6'=>$q6,'q7'=>$q7],200);
    }

    public function adduser()
    {
        request()->validate([
            'name' => 'required|min:3|max:15|string',
            'email' => 'required|email|unique:users',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
        ]);

        $user=new User();



        $user->name=request('name');
        $user->email=request('email');

        $user->password=bcrypt(request('password'));
        $user->save();


        $user->roles()->attach(Role::where('name','anther')->first());

        auth()->login($user);


        return back();
    }

    public function changeRole()
    {
        $user=User::where('id',\request('id'))->first();
        $user->roles()->detach();
        if(\request('role'))
        {
            $user->roles()->attach(Role::where('name','admin')->first());

        }
        if (\request('role-user'))
        {
            $user->roles()->attach(Role::where('name','anther')->first());

        }

        return back();



    }

    public function removeUser($id)
    {
        DB::table('users')->where('id',$id)->delete();


        return back();



    }


}

