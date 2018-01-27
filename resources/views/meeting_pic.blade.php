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
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/demo-page.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap-arabic.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/pic.css">

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






<!-- The Modal -->
<h2  > اسم الندوة </h2>

<section>
  <div class="container gal-container">

    <div class="col-md-4 col-sm-12 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#1">
          <img src="/images/m2.jpg">
        </a>
        <div class="modal fade" id="1" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <div class="modal-body">
                <img src="/images/m2.jpg">
              </div>
                <div class="col-md-12 description">
                  <h4>This is the first one on my Gallery</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 
 </div>
</section>




 @extends('master')
    @section('body')  

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap-arabic.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>   
    <script src="js/popper.min.js"></script>
    

        @stop
</body>
</html>