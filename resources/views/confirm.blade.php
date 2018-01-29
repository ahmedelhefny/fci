<html>
<head>

    <meta name="description" charset="utf-8">
    <title>virifcation</title>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-arabic.css')}}">

    <link rel="stylesheet" href="{{asset('css/7fny.css')}}">
    

</head>
<body style="direction: ltr;"></body>
<div>


    @if($chair != 0)
        <center> <h1>THANK YOU!</h1></center>
        <center><img src="{{asset('images/smile.png')}}" alt="correct"></center><br>
        <label class="a"><i class="fa fa-smile-o fa-2x " aria-hidden="true" style="color: #31b0d5">  your registration is Done .. </i></label><br>

        <label class="a"> <i class="fa fa-university" aria-hidden="true" style="color: #31b0d5">  </i>  Your place in :{{$location}}</label>
        <br>
        <label class="c"> <i class="fa fa-map-marker" aria-hidden="true" style="color: #31b0d5"></i>  the seat number :{{$chair}}   </label><br>
        <a href="/"><button type="button" class="btn btn-primary" style="background-color: #31b0d5">Home Page</button></a>

    @endif

    @if($chair == 0)
            <center> <h1>WY ARE SORRY !</h1></center>
            <center><img src="{{asset('images/sorry.jpg')}}" alt="correct"></center><br>
            <h3>All places have been completed So.... <br> <p style="color: #31b0d5">You are not allowed to registe in this Seminar <i class="fa fa-frown-o" aria-hidden="true"></i>
                </p></h3>
            <a href="/"><button type="button" class="btn btn-primary" style="background-color: #31b0d5">Home Page</button></a>

    @endif

</div>

</body>

</html>

