<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf" value="{{ csrf_token() }}">
    <title>الملتقي الثاني لمطوري تكنولوجيا المعلومات</title>
<link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/demo-page.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap-arabic.css">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
            <script src="js/html5shiv.min.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
      <script src="js/respond.min.js"></script>

</head>
<body>


        <div class="main-login">
                <div class="login">
                    <div style="width: 100%; text-align: right;">
                        <i id="login-close" style="margin: 7px;" class="fa fa-close"></i>
            
                    </div>
                    <h2>تسجيل الدخول</h2>
                    <div class="img-brand-form">
                        <img src="{{asset('images/mans.png')}}">
            
                    </div>
                    <form method="post" action="/login">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">البريد الالكتروني</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="البريد الالكتروني">
                        </div>
                        <div class="form-group ">
                            <label for="exampleInputPassword1">الرقم السري</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="الرقم السري">
                        </div>
                        <div class="invalid-feedback">
                            @if($errors->any())
                                {{$errors->first()}}
                            @endif
                        </div>
            
            
                        <div class="checkbox">
                            <label>
                                <input name="checked" type="checkbox" checked>تذكرني
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
            
                </div>
            </div>





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
                <a href="/meetings">الندوات</a>
            </li>


            <li>
                <a href="#me_s">شركات النجاح</a>
            </li>


            <li>
                <a href="#me_d">محاور الملتقي</a>
            </li>

            <li>
                        <div class="dropdown1">

                          <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                             ندوات اليوم
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#sat">السبت</a></li>
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
                <a href="#contact_us">اتصل بنا</a>
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
            @if(!Auth::check())
            <li > 
                    <a class='ma_login' href="#"> تسجيل الدخول</a>
            </li>
            @elseif(Auth::check() && Auth::user()->hasRole('admin'))
            <li>
                    <a href="/admin"> لوحة التحكم</a>

            </li>
            <li>
                    <a href="/logout"> تسجيل الخروج</a>

            </li>
            @elseif(Auth::check() && Auth::user()->hasRole('anther'))
            <li>
                    <a href="/anther"> لوحة التحكم</a>

            </li>
            <li>
                    <a href="/logout"> تسجيل الخروج</a>

            </li>
            @else
            <li>
                    <a href="/logout"> تسجيل الخروج</a>

            </li>
            @endif
    

      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- End Navbar -->

<section class="log text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="loog">
                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('images/mans.png')}}" alt=".....">
                    <h2>جامعة المنصورة</h2>
                    <h4>MANSOURA<br> UNIVERSITY</h4>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div>

                        <img src="{{asset('images/contact_imgs/'.$ImgLog->Log_url)}}" style="text-align: center; width: 570px;position: relative;bottom: 70px; ">
                        @if(Auth::check()&&Auth::user()->hasRole('admin'))<a href="/DeleImgLo/{{$ImgLog->id}}"><i class="fa fa-times" aria-hidden="true" style="position: absolute; top: 60px; right: 59px; color: #0D0A0A"></i></a>@endif



                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <img src="{{asset('images/mans.png')}}" alt="......">
                    <h2>كلية حاسبات ومعلومات</h2>
                    <h4>faculty of computer<br> science and information</h4>
                </div>
            </div>
        </div>
    </div>
</section>
    
    

<!-- start nav section -->


  
   <!--Start Slide-->
<div id="myslide" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
      <div class="item active">
           <img src="{{asset('images/important imgs/m2.jpg')}}" alt="Main">
      </div>
      @foreach($ImgUrl as $key=>$img)
      <div class="item">
          @if(Auth::check()&&Auth::user()->hasRole('admin'))
          <a href="{{asset('/DelImpImg/'.$img->id)}}" style="position:absolute; top:2px;right:250px;"><i class="fa fa-times" aria-hidden="true" style=" color: #0D0A0A; background-color: #710909"></i></a>
          @endif
           <img src="images/important imgs/{{$img->Imp_url}}" alt="">
      </div>
      
      @endforeach

  <a class="left carousel-control" href="#myslide" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-right"></span>
   <span class="sr-only"></span>
  </a>
  <a class="right carousel-control" href="#myslide" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-left"></span>	
    <!-- <span class="sr-only"></span>-->
  </a>

   </div>
</div>

  <!-- end carousel --> 
    
    
    

   <!----------> 
    

<section class="today1 visible-sm visible-xs text-center">
    <div class="container">
    <div class="t1"><h3>ندوات اليوم</h3></div>
    
    
 <div class="row">
     
     <a href="#"><div class="t2 col-sm-4 col-xs-4"><h3>اسم الندوة</h3><p class="lead">محتوي الندوة</p></div></a>
     <a href="#"><div class="t2 col-sm-4 col-xs-4"><h3>اسم الندوة</h3><p class="lead">محتوي الندوة</p></div></a>
     <a href="#"><div class="t3 col-sm-4 col-xs-4"><h3>اسم الندوة</h3><p class="lead">محتوي الندوة</p></div></a>
</div>   
    </div>
</section>  


    

<!-- end logo -->
  
<section id='me_d' class="new4">
    <div class="container">
        <div class="row">
            <div class="new44">

                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <h2 class="h1">محاور الملتقي</h2>
                    @foreach($axes as $key=>$axe)
                    <h4> <i class="fa fa-envelope"></i> {{$axe->A_content}}  @if(Auth::check()&&Auth::user()->hasRole('admin')) <a class="btn-danger" href="/deleteAxes/{{$axe->id}}  "> حذف </a>@endif</h4>

                    @endforeach
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center">
                    <img src="images/im1.jpg" alt="......">
                </div>
            </div>
        </div>
    </div>
</section>
  
    
<section id='me_s' class="new2 text-center">
    <div class="cov2">
        <div class="container">
            <h2 class="h1">شركاء النجاح</h2>
            <hr style="width:140px;height:2px;background:#999;margin-top:-5px;">
            <h2>WE HELP YOU TO FIND YOUR WAY TO LEARNING NEW TECHNOLOGY</h2>
            <div class="new22">

                @foreach($parts as $key=> $part)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    @if(Auth::check()&&Auth::user()->hasRole('admin'))
                    <a href="/deletepart/{{$part->id}}  "><i class="fa fa-times-circle" aria-hidden="true" style="position: relative; left: 170px; top: 19px;"></i></a>
                    @endif
                    <div class="new222">
                        <img src="images/partners imgs/{{$part->P_url}}" alt=".....">
                        <h3>{{$part->P_name}}</h3>
                        <p class="lead"> {{$part->P_description}}</p>
                     </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>




@extends('master')
@section('body')
<!-----------------------------------------------------> 
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap-arabic.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>   
    <script src="js/popper.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/wow.min.js"></script> 
    <script>new WOW().init();</script>  
    <script src="js/owl.carousel.min.js"></script>
    @stop
</body>
</html>