<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1200">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>الملتقي الثاني لمطوري تكنولوجيا المعلومات</title>
    <link href="https://fonts.googleapis.com/css?family=Lateef" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap-arabic.css">
    <link rel="stylesheet" href="css/nav.css">

    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style_common.css" />
    <link rel="stylesheet" href="css/new.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="js/respond.min.js"></script>

</head>
    <body>
    @extends('master')
    @section('body')




    <!--start carousal-->



    <section class="slide-wrapper">
        <div class="container">
            <div id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    @foreach($ImgUrl as $key=>$img)

                    <li data-target="#myCarousel" data-slide-to="{{$key+1}}"></li>
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item item1 active">
                        <div class="fill" style=" background-color:#48c3af;">
                            <div class="inner-content">
                                <div class="carousel-img">
                                    <img src="images/first.jpeg" alt="sofa" class="img img-responsive" />
                                </div>

                            </div>
                        </div>
                    </div>
                    @foreach($ImgUrl as $key=>$img)

                    <div class="item item2">
                        <div class="fill" style="background-color:#b33f4a;">
                            <div class="inner-content">
                                <div class="carousel-img">
                                    @if(Auth::check() && Auth::user()->hasRole('admin'))
                                        <a style="color: black ; position: absolute; top: 115px; z-index: 999; font-size: 40px;"  href="/DelImpImg/{{$img->id}}"> &times; </a>

                                    @endif
                                    <img src="images/important imgs/{{$img->Imp_url}}" alt="white-sofa" class="img img-responsive" />
                                </div>

                            </div>
                        </div>
                    </div>

                    @endforeach


                </div>
            </div>
        </div>
    </section>


    <!--end carousal-->


    <!-- people and logo-->

    <section class="timeline lg-padding" id="timeline">
        <div class="logo-image">
            <img src="{{asset('images/mans.png')}}" alt=".....">
            <img style="border-radius: 50%; float: right" src="{{asset('images/fa.jpg')}}" alt="......">

        </div>

        <h2 class="title upper linear-text sm-title ver-bold text-center">المشرفين علي الملتقي</h2>

        <ul>

            <li>
                <div class="content text-left wow fadeInLeft  animated" data-aos="fade-left" data-aos-offset="190" data-aos-duration="700" data-aos-delay="0" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="time ver-bold">
                        تحت رعاية
                    </div>
                    <h3>أ.د/ محمد القناوي</h3>
                    <p>رئيس جامعة المنصورة</p>
                </div>
            </li>

            <li style="bottom:64px;">
                <div class="content text-left C wow fadeInRight  animated" data-aos="fade-left" data-aos-offset="190" data-aos-duration="700" data-aos-delay="0" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="time ver-bold">
                        تحت ريادة
                    </div>
                    <h3>أ.د/ أشرف عبدالباسط</h3>
                    <p>نائب رئيس جامعة المنصورة</p>
                </div>
            </li>

            <li style="bottom:124px;">
                <div class="content text-left wow fadeInLeft  animated" data-aos="fade-left" data-aos-offset="190" data-aos-duration="700" data-aos-delay="0" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="time ver-bold">
                        تحت اشراف
                    </div>
                    <h3>أ.د/ حسن سليمان</h3>
                    <p>عميد كلية الحاسبات و المعلومات</p>
                </div>
            </li>

            <li style="bottom: 186px;">
                <div class="content text-left C wow fadeInRight  animated" data-aos="fade-left" data-aos-offset="190" data-aos-duration="700" data-aos-delay="0" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="time ver-bold">
                        بالشراكة مع
                    </div>
                    <h3> جمعية الدلتا </h3>
                    <p>  ومجموعة من الشركات المتخصصة</p>
                </div>
            </li>

        </ul>
    </section>


    <!--end people-->

    <!--start  ax-->
    <section id="axu" class="axu">



        <h2>محاور الملتقي</h2>
        <div class="all">


        <ul class="ul1">
            <li class=" wow hinge" data-wow-duration=".5s" data-wow-offset="350">

                <p> <i style="color: #23b1ec; font-size: 22px;" class="fa fa-flag"></i> التواصل مع الشركات العاملة في مجال الحاسبات والمعلومات لعرض أفاق العمل والخبرات المطلوبة في هذا المجال لتطوير مستوي خريجي الكلية بما يناسب احتياجات العمل </p>
            </li>
            <li class=" wow hinge" data-wow-duration="1s" data-wow-offset="350">
                <p><i style="color: #23b1ec; font-size: 22px;" class="fa fa-flag"></i>  الدعم الفني لمشاريع التخرج لمرحلة البكالوريوس التي يمكن تحويلها لمنتج من خلال تبني الشركات لهذه المشروعات  </p>
            </li>
        </ul>
        <span class="image"><img src="images/la2.jpg" alt=""></span>
        <ul class="ul2">
            <li class="wow hinge" data-wow-duration="1.5s" data-wow-offset="300">
                <p> <i style="color: #23b1ec; font-size: 22px;" class="fa fa-flag"></i> اطلاع أعضاء هيئة التدريس والطلبة علي احدث التكنولوجيا المستخدمة في مجال التخصص في سوق العمل  </p>
            </li>
            <li class=" wow hinge" data-wow-duration="2s" data-wow-offset="300">
                <p>  <i style="color: #23b1ec; font-size: 22px;" class="fa fa-flag"></i> الحصول علي فرص تدريب علي رأس العمل ببعض الشركات للطلاب وتطوير التدريب الصيفي لطلاب الكلية  </p>
            </li>
        </ul>
        </div>
    </section>

    <!--end ax-->




    <!--start 3-->

    <section id="three" class="main alt">
        <header>
            <h2 style="color: #b9b7b7;">شركاء النجاح</h2>
            <p>Praesent dapibus, neque idortor neque egat volutpat. Nam dui mi tincidunt magna accumsan.</p>
        </header>
        <div class="inner">
            <div class="posts">

                @foreach($parts as $key=> $part)
                <div>
                        @if(Auth::check() && Auth::user()->hasRole('admin'))

                        <a href="/deletepart/{{$part->id}}  "> &times; </a>
                    @endif
                    <article class="artic wow zoomInUp " data-wow-duration="{{$key+2}}s" data-wow-offset="{{250+$key*2}}" data-wow-dely="{{$key+2}}s">
                       
                        <a href="#" class="image"><img src="images/partners imgs/{{$part->P_url}}" alt="">
                        </a>
                        <div class="content">
                            <h3>{{$part->P_name}}</h3>
                            <p>{{$part->P_description}}</p>

                        </div>
                    </article>

                </div>

                    @endforeach


            </div>
        </div>
    </section>
    <div class="loading">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
        <div class="wrap">
            <a href="#" class="start"></a>
            <div class="test" data-text="الملتقي الثاني لمطوري تكنولوجيا المعلومات"></div>
        </div>
    </div>


    <!--end 3-->




    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap-arabic.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="js/new.js"></script>
       
        @stop
    </body>

</html>
