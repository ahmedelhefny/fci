<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>questions</title>
    <link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
    <link href="{{asset('css/bootstrap-arabic.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link href="{{asset('css/surv.css')}}" rel="stylesheet">
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
                <a href="/meetings">الندوات</a>
            </li>


            <li>
                        <div class="dropdown1">

                          <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                             ندوات اليوم
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                @foreach($SDay as $key=>$A)
                            <li><a href="/informations/{{$A->id}}">{{$A->S_name}}</a></li>
                                    @endforeach
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


        
   

<!--start body-->
    
<section class="main_s">
    <div class="container-fluid">
    <h2>استمارة تقيم الندوة</h2>

    <p>  شكرا للمشاركة في الندوة نتمني ان تكونوا الندوة ذو قيمة بالنسبة لكم </p>
    <form>

    <table class='table table-bordered table-striped'>
        <thead>
            <tr>
                <td>#</td>
                <td>الاسئلة</td>
                <td>ممتاز</td>
                <td>جيد جد</td>
                <td>جيد</td>
                <td>مقبول</td>

                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                 <radiogroup>

                <td>هذا مكان السؤال يا حمار</td>
                <td>
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                        
                    </td>
                <td>
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                       
                    </td>
                <td>
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                
                </td>
                <td>
                    
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                            
                </td>
            </radiogroup>

            </tr>
            
            <tr>
                <td>2</td>
                    <radiogroup>
                    <td>هذا مكان السؤال يا حمار</td>
                    <td><d
                        iv class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                            
                          </div>
                        </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                           
                          </div>
                        </td>
                    <td>
                            <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                    
                                  </div>
                    </td>
                    <td>
                            <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                    
                                  </div>
                    </td>
                </radiogroup>
                </tr>

        </tbody>

    </table>
    
    
       
   
</form>
</div>
</section>
@extends('master')
@section('body')

<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap-arabic.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/hi.js"></script>
    <script src="js/wow.min.js"></script> 
    <script>new WOW().init();</script>  
    <script src="js/jquery.nicescroll.min.js"></script>   
    <script src="js/owl.carousel.min.js"></script>
    @stop
</body>

</html>