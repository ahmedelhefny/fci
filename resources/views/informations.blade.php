<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>معلومات الندوات</title>
<link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/hover.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('css/demo-page.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-arabic.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <script src="{{asset('js/respond.min.js')}}"></script>

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
                <a href="/meetings">الندوات</a>
            </li>



            <li>
                        <div class="dropdown1">

                          <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                             ندوات اليوم
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            @foreach($Ss as $key=>$s)
                            <li><a href="/informations/{{$s->id}}">{{$s->S_name}}</a></li>
                                @endforeach
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

      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- End Navbar -->







    <!------------------------------------->
    
    
<section class="nam text-center">
    <div class="container">
                    <h2>{{$AllData->S_name}}</h2>
            <img src="{{asset('images/Seminars_Image/'.$AllData->S_url)}}" alt="Seminars_Image">
        <div class="row">
        <div class="namee">

            
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <h4 style="display:inline-block;"><i class="fa fa-user-circle"></i>{{$AllData->SP_name}}</h4>    <h4 style="display:inline-block;">(The Lecturer)</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="/getAllImg/{{$AllData->id}}"><h4><i class="fa fa-picture-o"></i> جميع صور الندوة</h4></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <h4><i class="fa fa-clock-o"></i> From:{{$AllData->S_start}}  - To:{{$AllData->S_end}}</h4>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="/survey/{{$AllData->Seminar_id}}"><h4><i class="fa fa-plus"></i>رأيك في الندوة</h4></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <h4><i class="fa fa-calendar-plus-o"></i> {{$AllData->S_date}}</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <h4><i class="fa fa-map-marker"></i> at FCI University</h4> 
            </div>

            
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h5>عن الندوة</h5><i class="fa fa-chevron-down"></i><br>
            <p class="lead">{{$AllData->S_content}}
            </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h5>عن مقدم الندوة</h5><i class="fa fa-chevron-down"></i><br>
            <p class="lead">{{$AllData->SP_content}}
            </p>
            </div>
            
        </div>
    </div>
    </div>
</section>
    
 <!--------------->
   <!-- Start Contact -->
    <section class="Contact">
        
        <div class="Contact-overlay"></div>
        
        
        <div class="container">
        
            
            <div class="row">
                <h2 class="text-center">التسجيل في الندوة</h2>
                <p class="text-center">نتمني ان تستفيد من حضورك الندوات</p>
                
                
                <div class="">
                    
                     <!-- start Contact Form -->
                        <form role="form" action="/Registe/{{$AllData->Seminar_id}}" method="post" >
                            {{csrf_field()}}
                            <!-- start Div Form -->
                            <div class="col-md-offset-2 col-md-8">
                                
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control input-lg @if ($errors->has('name'))  {{'is-invalid'}} @endif" placeholder="الاسم" >
                                    <div class="invalid-feedback">
                                        @foreach ($errors->get('name') as $message)
                                            {{$message}}
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="faculty" class="form-control input-lg @if ($errors->has('faculty'))  {{'is-invalid'}} @endif"
                                                  placeholder="اسم الكليه" >
                                    <div class="invalid-feedback">
                                        @foreach ($errors->get('faculty') as $message)
                                            {{$message}}
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="level" class="form-control input-lg @if ($errors->has('level'))  {{'is-invalid'}} @endif"
                                                  placeholder="الفرقه " >
                                    <div class="invalid-feedback">
                                        @foreach ($errors->get('level') as $message)
                                            {{$message}}
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="dept" class="form-control input-lg @if ($errors->has('dept'))  {{'is-invalid'}} @endif"
                                           placeholder="القسم " >
                                    <div class="invalid-feedback">
                                        @foreach ($errors->get('dept') as $message)
                                            {{$message}}
                                        @endforeach
                                    </div>
                                </div>


                                
                                <button type="submit" class="btn btn-default btn-lg btn-block" >
                                        التسجيل
                                </button>
                                
                                
                            </div>
                            <!-- End Div Form -->
                            
                        </form>
                    <!-- start Contact Form -->

                </div>
            
            </div>
            <!-- End Row -->
            
        </div>
        <!-- End container -->
    
    </section>
    <!-- End Contact -->
    
<!-- -------------------------------------------------------------------------------------------------- -->

<!----------------------------------------------------->

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