<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>الملتقي الثاني لمطوري تكنولوجيا المعلومات</title>
    <link href="https://fonts.googleapis.com/css?family=Lateef" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap-arabic.css">
    <link rel="stylesheet" href="css/nav.css">

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



    <!--start head-->

    <section class="o-head">
        <div class="i-head">

        </div>
    </section>


    <!--end head-->


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
                                    <img src="images/28.png" alt="sofa" class="img img-responsive" />
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
                                        <a href="/DelImpImg/{{$img->id}}"> &times; </a>

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
                            <img src="/images/mans.png">
                            <h3>Mansoura University</h3>


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
                        <img src="/images/fa.jpg">
                        <h3>Faculty Of Computer Science  And Information Technology  </h3>
                    </div>
                </div>
              </div>

            </div>

        </div>
    </section>


    <!-- end logo-->
    <!-- start people-->
    <section class="people">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-3">
                  <img src="images/moh.jpg">
                  <h2>تحت رعاية</h2>
                  <h3> أد/ محمد القناوي</h3>
                  <p>(رئيس جامعة المنصورة)</p>
                  <p></p>
              </div>

              <div class="col-md-3">
                  <img src="images/ash.jpg">
                  <h2>تحت ريادة</h2>
                  <h3> أد/ أشرف عبدالباسط</h3>
                  <p>(نائب رئيس جامعة المنصورة)</p>
                  <p></p>
              </div>
                <div class="col-md-3">
                  <img src="images/moh.jpg">
                  <h2>تحت اشراف</h2>
                  <h3> أد/ حسن سليمان </h3>
                  <p>(عميد كليه الحاسبات والمعلومات)</p>
                  <p></p>
              </div>
                <div class="col-md-3">
                  <img src="images/de.jpg">
                  <h2> بالشراكه مع </h2>
                  <h3>جمعيه الدلتا </h3>
                  <h3>ومجموعه من الشركات المتخصصه</h3>
                  <p></p>
              </div>

          </div>
      </div>
    </section>
    <!-- end people-->

    <!--start  ax-->
    <section id="axu" class="axu">
        <h2>محاور الملتقي</h2>
        <div class="all">


        <ul class="ul1">
            <li>

                <p>التواصل مع الشركات العاملة في مجال الحاسبات والمعلومات لعرض أفاق العمل والخبرات المطلوبة في هذا المجال لتطوير مستوي خريجي الكلية بما يناسب احتياجات العمل</p>
            </li>
            <li>
                <p> الدعم الفني لمشاريع التخرج لمرحلة البكالوريوس التي يمكن تحويلها لمنتج من خلال تبني الشركات لهذه المشروعات</p>
            </li>
        </ul>
        <span class="image"><img src="images/la2.jpg" alt=""></span>
        <ul class="ul2">
            <li>
                <p> اطلاع أعضاء هيئة التدريس والطلبة علي احدث التكنولوجيا المستخدمة في مجال التخصص في سوق العمل</p>
            </li>
            <li><h4>Quis portitor</h4>
                <p> الحصول علي فرص تدريب علي رأس العمل ببعض الشركات للطلاب وتطوير التدريب الصيفي لطلاب الكلية</p>
            </li>
        </ul>
        </div>
    </section>

    <!--end ax-->


    <!--s-->
    <section id="two" class="main accent2">
        <header>
            <h2>رسالة الكلية</h2>
            <p>تسعى كلية الحاسبات و المعلومات جامعة المنصورة إلى تقديم برامج أكاديمية شامله و متوازنه و إعداد كوادر ذات كفاءه و قادره على المنافسه محليا وإقليميا و ملتزمه بتطوير المجتمع.</p>
        </header>
        <div class="inner">
            <span class="image main">
                <img src="images/sd.jpg" alt="">
            </span>
        </div>
    </section>


    <!--e-->

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
                    <article>
                        @if(Auth::check() && Auth::user()->hasRole('admin'))

                            <a href="/deletepart/{{$part->id}}  "> &times; </a>
                        @endif
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
