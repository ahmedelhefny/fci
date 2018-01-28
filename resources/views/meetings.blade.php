<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>الندوات</title>
    <link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/demo-page.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap-arabic.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- [if lt IE9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.js"></script>
     <!--[end if]-->

</head>
<body>
    
    
    
    
    
<!-- start nav section -->
    <div class="color"></div>

<!-- Start Navbar -->
    
<nav class="navbar navbar-default navbar-fixed-top">
    
  <div class="container">

      <div class="navbar-header">
          
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a class="navbar-brand" href="#">TDS2</a>
          
      </div>
      
      

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
      <ul class="nav navbar-nav navbar-right">
          
            <li class="actives">
                <a href="/">الرئيسية
                    <span class="sr-only">(current)</span>
                </a>
            </li>
          

            <li>
                        <div class="dropdown1">
                            
                          <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                             ندوات اليوم
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">السبت</a></li>
                            <li><a href="#">الأحد</a></li>
                            <li><a href="#">الاثنين</a></li>
                            <li><a href="#">الثلاثاء</a></li>
                            <li><a href="#">الأربعاء</a></li>
                            <li><a href="#">الخميس</a></li>
                          </ul>
                        </div>

            </li>
          
            <li>
                <a href="/Gallery">صور الندوات</a>
            </li>
          
          
            <li>
                <a href="#">اتصل بنا</a>
            </li>
          
            
            <li>
                        <div class="dropdown">
                            
                          <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            الملتقيات السابقة
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">ملتقي 2017</a></li>
                            <li><a href="#">ملتقي 2016</a></li>
                          </ul>
                        </div>

            </li>
          
      </ul>
        

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
    
<!-- End Navbar -->
    
    
    
    
<div class="container">
<div class="row text-center">
    @foreach($SData as $key=>$SDatum)
    <div id="sat">

    <div class="col-lg-3 col-sm-6 col-md-4">     
    <div class="thumbnail">
      <img  src="images/Seminars_Image/{{$SDatum->S_url}}" alt="...">
      <div class="caption">
        <h3> {{$SDatum->S_name}}</h3>
        <i class="fa fa-calendar fa-2x"  aria-hidden="true"> {{$SDatum->S_date}}</i><br>
        <p><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i><span>From: {{$SDatum->S_start}} To:{{$SDatum->S_end}} </span> </p>
        <h4 class="imag1"> {{$SDatum->SP_name}} </h4>
          <p>   {{$SDatum->SP_company}}</p>

        <p><a href="/informations/{{$SDatum->Seminar_id}}" class="btn btn-primary" role="button">تفاصيل الندوه</a></p>
      </div>
    </div>

    </div>



    </div>
    @endforeach
</div>
</div>


@extends('master')
@section('body')
    
    

    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap-arabic.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/wow.min.js"></script> 
    <script>new WOW().init();</script>  
    <script src="js/jquery.nicescroll.min.js"></script>   
    <script src="js/owl.carousel.min.js"></script>
</body>
</html>