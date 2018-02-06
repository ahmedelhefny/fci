<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1200">
    <title>صور كل الندوات</title>
    <link href="https://fonts.googleapis.com/css?family=Lateef" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/demo-page.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap-arabic.css">
    <link rel="stylesheet" href="css/nav.css">

    <link rel="stylesheet" href="css/style.css">
      <script src="js/respond.min.js"></script>
      <style>
         
           .navbar
           {
               background: #fff;

               box-shadow: 0px 3px #eee;
               top: 0;
           }
          .foot
          {
              top: 0;
          }

      </style>

</head>
<body>

<div class="container-fluid">



    
        <table class="table table-striped  table-hover">
                <caption>عرض المسجلين</caption>
                <thead style="background: #066aab; color: white;">
                <tr>
                    <th>#</th>
                    <th>الاسم</th>
                    <th>الكلية</th>
                    <th>الفرقة</th>
                    <th>القسم</th>

                    <th>المكان</th>
                    <th>رقم الكرسي</th>

                </tr>
                </thead>
                <tbody>
                    @foreach($regs as $kay=>$reg)
                        <tr>
                            <td>{{$kay+1}}</td>
                            <td>{{$reg->R_name}}</td>
                            <td>{{$reg->R_faculty}}</td>
                            <td>{{$reg->R_level}}</td>
                            <td>{{$reg->R_depts}}</td>
                            <td>{{$reg->R_location}}</td>
                            <td>{{$reg->r_id}}</td>
                        </tr>
                        @endforeach

                </tbody>
            </table>


</div>

@extends('master')
@section('body')



<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap-arabic.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script>new WOW().init();</script>  
@stop

</body>
</html>
