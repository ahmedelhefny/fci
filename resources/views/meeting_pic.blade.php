<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
<meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>صور كل الندوات</title>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lateef" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">


    <link rel="stylesheet" href="{{asset('css/demo-page.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-arabic.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <link rel="stylesheet" href="{{asset('css/pic.css')}}">

      <script src="{{asset('js/respond.min.js')}}"></script>
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



<!-- The Modal -->
<a href="/informations/{{$S_name->id}}" style="text-decoration: none"><h2  > {{$S_name->S_name}} </h2></a>
<div class='container' style='margin-bottom:50px;'>


<div class="row">
    @foreach($imgs as $key=>$img)
   
    <div class="column">
        @if(Auth::check()&&Auth::user()->hasRole('admin'))
        <a class='delet-icon' href='/deleteMImg/{{$img->id}}'>&times;</a>
        @endif
      <img src="{{asset('/images/Seminars_Image/'.$img->SI_url)}}" style="width:100%" onclick="openModal();currentSlide($key+1)" class="hover-shadow cursor">
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
        <img src="{{asset('/images/Seminars_Image/'.$img->SI_url)}}" style="width:100%">
      </div>
      @endforeach

      
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
      <div class="caption-container">
        <p id="caption"></p>
      </div>
  
      @foreach($imgs as $key=>$img)

      <div class="column">
        <img class="demo cursor" src="{{asset('/images/Seminars_Image/'.$img->SI_url)}}" style="width:100%" onclick="currentSlide({{$key+1}})">
      </div>
      @endforeach

      
    </div>
  </div>




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