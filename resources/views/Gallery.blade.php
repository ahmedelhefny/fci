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
          html
          {
              overflow:auto !important;
          }


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





@extends('master')
@section('body')


    <!-- Start Section  team -->
    <section class="team text-center">
    
        <div class="container">
            
            <h2 class="text-center team-header wow bounce"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s">الندوات</h2>
            <hr style="width:100px;height:2px;background:#22b6e9;margin-top:-5px;">
            <p class="text-center team-parag">صور جميع الندوات</p>
        
            <div class="row">

   
                <!-- Start First Col -->
                @foreach($Spname as $key=>$item)
                <div class="col-md-3 col-sm-6">
                      <!-- Start team-content -->
                      <div class="team-content div1">
                          <div class="team-overlay">


                             <a href="/informations/{{$item->Seminar_id}}" style="text-decoration: none;"> <h3>{{$item->S_name}}</h3></a>
                              <p>{{$item->SP_name}}</p>


                              
                              <button onclick="window.location.href='/getAllImg/{{$item->id}}'">صور الندوة</button>
                            </div>
                            <img src="images/folder.png" class="img-responsive">
                            <div class="team-overlay-show">
                                <h3> {{$item->S_name}}</h3>

                                <p>{{$item->SP_name}}  </p>
                            </div>
                      </div>
                    <!-- End Team-content -->
                </div>
                @endforeach
                 <!-- End First Col -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
              <!-------------------------------------------------------------- -->
            </div>
            <!-- End First Row -->
        </div>
    </section>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap-arabic.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>  
    @stop
      
</body>
</html>