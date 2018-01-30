<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>الندوات</title>
    




    <link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  
    <link rel="stylesheet" href="{{asset('css/demo-page.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-arabic.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="{{asset('js/respond.min.js')}}"></script>


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
    
    
    
   <center> <h2>All Seminars  <i class="fa fa-university" aria-hidden="true"></i>
       </h2></center>
<div class="container">
<div class="row text-center">
    @foreach($SData as $key=>$SDatum)

    <div id="sat">


    <div class="col-lg-3 col-sm-6 col-md-4">     
    <div class="thumbnail">
      <img  src="{{asset('images/Seminars_Image/'.$SDatum->S_url)}}" alt="...">
      <div class="caption">

        <h3> {{$SDatum->S_name}} @if(Auth::check()&&Auth::user()->hasRole('admin')) <a href="/DeleSem/{{$SDatum->Seminar_id}}"><i class="fa fa-times" aria-hidden="true" style="position: absolute; top: 39px; right: 17px;"></i></a> @endif </h3>
        <br><i class="fa fa-calendar fa-2x"  aria-hidden="true">   {{$SDatum->S_date}}</i><br>
          <br>
        <p><span>From: {{$SDatum->S_start}}    To:{{$SDatum->S_end}} </span> <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i></p>
        <h3 class="imag1" style="color: black"> {{$SDatum->SP_name}} </h3>

          <h4>   {{$SDatum->SP_company}}</h4>
          <br>

        <p><a href="/informations/{{$SDatum->Seminar_id}}" class="btn btn-primary" role="button">تفاصيل الندوه</a></p>
      </div>
    </div>

    </div>



    </div>
    @endforeach
</div>
</div>


    
    
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap-arabic.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>   
<script src="{{asset('js/popper.min.js')}}"></script>
    
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script> 
<script>new WOW().init();</script>  

</body>
</html>