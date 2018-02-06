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


    <!-- logo-->

    <section class="o-logo">
        <div class="i-logo">
            <div class="container-fluid">

                <div class="logos">

                <div class="row">
                    <div class="col-md-3">
                        <div>
                            <img class="log-im" src="/images/mans.png">
                            <h3 class="wow zoomInDown">Mansoura University</h3>


                        </div>
                    </div>
                    <div class="col-md-6">

                        @if(isset($ImgLog->Log_url))
                            @if(Auth::check() && Auth::user()->hasRole('admin'))
                        <a href="/DeleImgLo/{{$ImgLog->id}}" style="color: red; font-size: 20px; font-weight: bolder;"> &times; </a>
                            @endif



                        <img  class="img" src="{{asset('images/contact_imgs/'.$ImgLog->Log_url)}}">
                            @endif

                    </div>
                    <div class="col-md-3">
                        <img class="log-im" src="/images/fa.jpg">
                        <h3 class="wow zoomInDown">Faculty Of Computer Science  And Information Technology  </h3>
                    </div>
                </div>


              </div>



                <div class="main2">
                    <!-- SEVENTH EXAMPLE -->
                    <div class="view view-seventh">
                        <img src="images/ash.jpg" />
                        <div class="mask">
                            <h2>تحت ريادة</h2>
                            <h3> أد/ أشرف عبدالباسط</h3>
                            <p>نائب رئيس جامعة المنصورة</p>
                        </div>
                    </div>
                    <div class="view view-seventh">
                        <img src="images/moh.jpg" />
                        <div class="mask">
                            <h2>تحت رعاية</h2>
                            <h3> أد/ محمد القناوي</h3>
                            <p>رئيس جامعة المنصورة</p>
                        </div>
                    </div>
                    <div class="view view-seventh">
                        <img src="images/de.jpg" />
                        <div class="mask">
                            <h2> بالشراكه مع </h2>
                            <h3>جمعيه الدلتا </h3>
                            <p>ومجموعه من الشركات المتخصصه</p>
                        </div>
                    </div>
                    <div class="view view-seventh">
                        <img src="images/dr1.jpg" />
                        <div class="mask">
                            <h2>تحت اشراف</h2>
                            <h3> أد/ حسن سليمان </h3>
                            <p>(عميد كليه الحاسبات والمعلومات)</p>
                        </div>
                    </div>
                </div>



    <!-- end logo-->

    <!-->
    <!-- start people

          <div class="row branch">
              <div class="col-md-3">
                  <div class="branch1">
                      <img src="images/moh.jpg">
                      <div>
                          <h2>تحت رعاية</h2>
                          <h3> أد/ محمد القناوي</h3>
                          <p>(رئيس جامعة المنصورة)</p>
                      </div>

                  </div>

              </div>

              <div class="col-md-3">
                  <div class="branch2">
                      <img src="images/ash.jpg">
                      <div>
                          <h2>تحت ريادة</h2>
                          <h3> أد/ أشرف عبدالباسط</h3>
                          <p>(نائب رئيس جامعة المنصورة)</p>
                      </div>
                  </div>


              </div>
                <div class="col-md-3">
                    <div class="branch3">
                        <img src="images/moh.jpg">
                        <div>
                            <h2>تحت اشراف</h2>
                            <h3> أد/ حسن سليمان </h3>
                            <p>(عميد كليه الحاسبات والمعلومات)</p>
                        </div>

                    </div>

              </div>
                <div class="col-md-3">
                    <div class="branch4">
                        <img src="images/de.jpg">
                        <div>
                            <h2> بالشراكه مع </h2>
                            <h3>جمعيه الدلتا </h3>
                            <p>ومجموعه من الشركات المتخصصه</p>
                        </div>

                    </div>

              </div>

          </div>

-->

            </div>

        </div>

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
