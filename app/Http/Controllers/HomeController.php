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

        $complain=new Complain();
        $complain->C_content=\request('C_content');
        $complain->save();

        return back();
    }


    //get important gallery to slider
    public function GetAll()
    {
        $parts=DB::table('partners')->get();
        $axes=DB::table('axes')->get();
        $ImgUrl=DB::table('impimgs')->get();
        return view('home',compact('ImgUrl','axes','parts'));
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

}
