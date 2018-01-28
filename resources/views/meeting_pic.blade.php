<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
<meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>صور كل الندوات</title>
<link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  
    <link rel="stylesheet" href="{{asset('css/demo-page.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-arabic.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <link rel="stylesheet" href="{{asset('css/pic.css')}}">

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

          <a class="navbar-brand" href="/">TDS2</a>

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
                             الندوات
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






<!-- The Modal -->
<h2  > {{$S_name->S_name}} </h2>
<div class='container' style='margin-bottom:50px;'>


<div class="row">
    @foreach($imgs as $key=>$img)
   
    <div class="column">
        @if(Auth::check()&&Auth::user()->hasRole('admin'))
        <a class='delet-icon' href='/deleteMImg/{{$img->id}}'>&times;</a>
        @endif
      <img src="{{asset('/images/important imgs/'.$img->SI_url)}}" style="width:100%" onclick="openModal();currentSlide($key+1)" class="hover-shadow cursor">
    </div>
    @endforeach

  </div>
</div>
  
  <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
        @foreach($imgs as $key=>$img)

  
      <div class="mySlides">
        <div class="numbertext">{{$key+1}}/{{$total}}</div>
        <img src="{{asset('/images/important imgs/'.$img->SI_url)}}" style="width:100%">
      </div>
      @endforeach

      
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
      <div class="caption-container">
        <p id="caption"></p>
      </div>
  
      @foreach($imgs as $key=>$img)

      <div class="column">
        <img class="demo cursor" src="{{asset('/images/important imgs/'.$img->SI_url)}}" style="width:100%" onclick="currentSlide({{$key+1}})">
      </div>
      @endforeach

      
    </div>
  </div>



 @extends('master')
    @section('body')  

    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-arabic.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>   
    <script src="{{asset('js/popper.min.js')}}"></script>
<script>
    function openModal() {
      document.getElementById('myModal').style.display = "block";
    }
    
    function closeModal() {
      document.getElementById('myModal').style.display = "none";
    }
    
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>
    

        @stop
</body>
</html>