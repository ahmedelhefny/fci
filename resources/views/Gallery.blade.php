<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
<meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>صور كل الندوات</title>
<link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/demo-page.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap-arabic.css">
    <link rel="stylesheet" href="css/style.css">
      <script src="js/respond.min.js"></script>

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
@extends('master')
    @section('body')


    

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