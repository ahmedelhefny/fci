<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1200">
    <title>الندوات</title>
    <link href="https://fonts.googleapis.com/css?family=Lateef" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  
    <link rel="stylesheet" href="{{asset('css/demo-page.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-arabic.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="{{asset('js/respond.min.js')}}"></script>


    <!-- [if lt IE9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.js"></script>
     <!--[end if]-->
    <style>
        .navbar
        {
            background: #fff;

            box-shadow: 0px 3px #eee;
            top: 0;
        }

    </style>

</head>
<body>




@extends('master')
@section('body')

<div class="wow pulse" style="width: 100%; text-align: center;">
    <img src="{{asset('images/semin3.png')}}">

</div>
<div class="container">
<div class="row text-center">
    @foreach($SData as $key=>$SDatum)

    <div id="sat">


    <div class="col-lg-3 col-sm-6 col-md-4">     
    <div class="thumbnail">
      <img  src="{{asset('images/'.$SDatum->S_url)}}" alt="...">
      <div class="caption">

        <h3> {{$SDatum->S_name}} @if(Auth::check()&&Auth::user()->hasRole('admin')) <a href="/DeleSem/{{$SDatum->Seminar_id}}"><i class="fa fa-times" aria-hidden="true" style="position: absolute; top: 39px; right: 17px;"></i></a> @endif </h3>
        <br><i class="fa fa-calendar fa-2x"  aria-hidden="true">   {{$SDatum->S_date}}</i><br>
          <br>
        <p><span>From: {{$SDatum->S_start}}    To:{{$SDatum->S_end}} </span> <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i></p>
        <h3 class="imag1" style="color: black"> {{$SDatum->SP_name}} </h3>

          <h4>   {{$SDatum->SP_company}}</h4>
          <br>

        <div class="svg-wrapper">
                <svg height="40" width="150" >
                    <rect id="shape" class="s1" height="40" width="150" />
                    <div id="text">
                        <a href="/informations/{{$SDatum->Seminar_id}}"  ><span class="spot">تفاصيل الندوه</span></a>

                    </div>
                </svg>
            </div>

      </div>
    </div>

    </div>



    </div>
    @endforeach
</div>
</div>



<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap-arabic.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
    
<script src="{{asset('js/wow.min.js')}}"></script>
<script>new WOW().init();</script>
@stop
</body>
</html>