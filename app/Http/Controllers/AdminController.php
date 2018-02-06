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
use App\Regiserations;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function addmeeting()
    {
        \request()->validate([
            'date'=>'required|string',

        ]);

        DB::table('allmeeting')->insert([
            ['Year' => \request('date')]
        ]);
        return back();
    }

    public function getallmeetings()
    {
        $meetings=DB::table('allmeeting')->get();
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
        $speakers->SP_company=\request('sspcompany');
        $speakers->SP_content=\request('sspcontent');
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

        //start reg
        $roll=DB::table('regiserations')
            ->where('seminar_id','=',\request('semid'))
            ->get();
        //end reg

        //start getting statistics
        $count=[];
        $dept=[];
        $dcount=[];
        $level=[];
        $lcount=[];

        //start getting faculty and the number of pepole who attend the seminar

        //هنا هنجيب الكليات اللي عندنا


        $ff=DB::table('regiserations')
            ->where('seminar_id','=',\request('semid'))
            ->distinct()
            ->get(['R_faculty']);
        //هنا هنعمل loop علي الكليات علشان نعرف نجيب الcount
        foreach ($ff as $key=>$item)
        {
            $count[$key]=DB::table('regiserations')
                ->where('seminar_id','=',\request('semid'))
                ->where('R_faculty','=',$item->R_faculty)
                ->count();

            //فوق كده جبنا ال count بتاع كل كليه


            for ($i=1 ; $i<= 7 ;$i++)
            {
                $lcount[$key][$i]=DB::table('regiserations')
                    ->where('seminar_id','=',\request('semid'))
                    ->where('R_faculty','=',$item->R_faculty)
                    ->where('R_level','=',$i)
                    ->count();
            }


        }
//end



        return response()->json(['success'=>true,'roll'=>$roll,'allFaculty'=>$ff,'numOfStu'=>$count,'levelCount'=>$lcount],200);
    }

 public function getfeed()
    {
    for($i=0; $i<7; $i++)
    {

    
        for ($j=0 ; $j<5 ;$j++)
        {
            $ser="Q".($i+1);
            $q[$i][$j]=DB::table('feedback')
                ->where('seminar_id','=',\request('feedid'))
                ->where($ser,($j+1))
                ->count();


        }
    }
        return response()->json(['success'=>true,'q'=>$q],200);
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

 public function allReg()
    {
        $SDay=DB::table('seminars')
            ->where('S_date','=',date('Y-m-d',time()))
            ->get();

        $allMeetings=DB::table('allmeeting')
            ->orderBy('Year','desc')
            ->get();

        $regs=Regiserations::all();
        $contact=DB::table('contactus')->first();



        return view('viewReg',compact('regs','SDay','allMeetings','contact'));



    }


}

