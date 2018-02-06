<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=1300">
     <title>معلومات الندوات</title>
    <link href="https://fonts.googleapis.com/css?family=Lateef" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/hover.css')}}">
    <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('css/demo-page.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-arabic.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <script src="{{asset('js/respond.min.js')}}"></script>
    <style>
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



    <!------------------------------------->
    
    
<section class="nam text-center">
    <div class="container">
                    <h2>{{$AllData->S_name}}</h2>
            <img src="{{asset('images/'.$AllData->S_url)}}" alt="Seminars_Image">
        <div class="row">
        <div class="namee">

            
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <h4 style="display:inline-block;"><i class="fa fa-user-circle"></i>{{$AllData->SP_name}}</h4>    <h4 style="display:inline-block;">(The Lecturer)</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="/getAllImg/{{$AllData->id}}"><h4><i class="fa fa-picture-o"></i> جميع صور الندوة</h4></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <h4><i class="fa fa-clock-o"></i> From:{{$AllData->S_start}}  - To:{{$AllData->S_end}}</h4>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <a href="/survey/{{$AllData->Seminar_id}}"><h4><i class="fa fa-plus"></i>رأيك في الندوة</h4></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <h4><i class="fa fa-calendar-plus-o"></i> {{$AllData->S_date}}</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <h4><i class="fa fa-map-marker"></i> at FCI University</h4> 
            </div>

            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h5>عن الندوة</h5><i class="fa fa-chevron-down"></i><br>
            <p class="lead">{{$AllData->S_content}}
            </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h5>عن مقدم الندوة</h5><i class="fa fa-chevron-down"></i><br>
            <p class="lead">{{$AllData->SP_content}}
            </p>
            </div>
            
        </div>
    </div>
    </div>
</section>
    
 <!--------------->
   <!-- Start Contact -->
    <section class="Contact">
        
        <div class="Contact-overlay"></div>
        
        
        <div class="container">
        
            
            <div class="row">
                <h2 class="text-center">التسجيل في الندوة</h2>
                <p class="text-center">نتمني ان تستفيد من حضورك الندوات</p>
                
                
                <div class="">
                    
                     <!-- start Contact Form -->
                        <form role="form" action="/Registe/{{$AllData->Seminar_id}}" method="post" >
                            {{csrf_field()}}
                            <!-- start Div Form -->
                            <div class="col-md-offset-2 col-md-8">
                                
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control input-lg @if ($errors->has('name'))  {{'is-invalid'}} @endif" placeholder="الاسم" required>
                                    <div class="invalid-feedback">
                                        @foreach ($errors->get('name') as $message)
                                            {{$message}}
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">

                                
                                <select name="faculty" class="form-control"

                                    <option>--الكلية--</option>
                                        <option value="الطب" title="كلية الطب|Faculty of Medicine|Faculté de médecine">كلية الطب</option>
                                        <option value="طب مانشستر"title="طب مانشستر|Medicine Manchester|">طب مانشستر</option>
                                        <option value="التربية" title="كلية التربية|Faculty of Education|Faculté de l`Education">كلية التربية</option>
                                        <option value="العلوم" title="كلية العلوم|Faculty of Science|Faculté des sciences">كلية العلوم</option>
                                        <option value="الصيدلة" title="كلية الصيدلة|Faculty of Pharmacy|Faculté de Pharmacie">كلية الصيدلة</option>
                                        <option value="طب الأسنان" title="كلية طب الأسنان|Faculty of Dentistry|Faculté de médecine dentaire">كلية طب الأسنان</option>
                                        <option value="اسنان مانشستر" title="طب اسنان مانشستر|Faculty of Dentistry Manchester|Faculté de médecine dentaire Manchester">طب اسنان مانشستر</option>
                                        <option value="التجارة" title="كلية التجارة|Faculty of Commerce|Faculté de commerce">كلية التجارة</option>
                                        <option value="الحقوق" title="كلية الحقوق|Faculty of Law|Faculté de droit">كلية الحقوق</option>
                                        <option value="الهندسة" title="كلية الهندسة|Faculty of Engineering|Faculté de génie">كلية الهندسة</option>
                                        <option value="الزراعة" title="كلية الزراعة|Faculty of Agriculture|Faculté de l`Agriculture">كلية الزراعة</option>
                                        <option value="الآداب" title="كلية الآداب|Faculty of Arts|Faculté des arts">كلية الآداب</option>
                                        <option value="التربية النوعية" title="كلية التربية النوعية بالمنصورة |Faculty of Specific Education|Faculté d`éducation spécifique">كلية التربية النوعية بالمنصورة </option>
                                        <option value="التربية النوعية- ميت غمر" title="كلية التربية النوعية- ميت غمر|Faculty of Specific Education, MitGhmar|Faculté d`éducation spécifique">كلية التربية النوعية- ميت غمر</option>
                                        <option value="التربية النوعية فرع منية النصر" title="كلية التربية النوعية فرع منية النصر|Faculty of Specific Education Meniat|Faculté d`éducation spécifique">كلية التربية النوعية فرع منية النصر</option>
                                        <option value="التمريض" title="كلية التمريض|Faculty of Nursing|Faculté des sciences infirmières">كلية التمريض</option>
                                        <option value="الطب البيطري" title="كلية الطب البيطرى|Faculty of Veterinary Medicine|Faculté de médecine vétérinaire">كلية الطب البيطرى</option>
                                        <option value="التربية الرياضية" title="كلية التربية الرياضية|Faculty of Physical Education|Faculté d`éducation physique">كلية التربية الرياضية</option>
                                        <option value="الحاسبات والمعلومات" title="كلية الحاسبات والمعلومات|Faculty of Computers and Information|Faculté d`informatique et des informations">كلية الحاسبات والمعلومات</option>
                                        <option value="السياحة والفنادق" title="كلية السياحة والفنادق|Faculty of Tourism and Hotels|Faculté de tourisme et d`hôtellerie">كلية السياحة والفنادق</option>
                                        <option value="رياض الأطفال" title="كلية رياض الأطفال|Faculty of Kindergarten|Faculté des maternelles">كلية رياض الأطفال</option>
                                        <option value="المعهد الفنى للتمريض" title="المعهد الفنى للتمريض |Nursing Technical Institute">المعهد الفنى للتمريض </option>
                                    </select>
    
                                    <div class="invalid-feedback">
                                        @foreach ($errors->get('faculty') as $message)
                                            {{$message}}
                                        @endforeach
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <select name="level" class="form-control">
                                        <option>--الفرقة--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>



                                    </select>
                                    <div class="invalid-feedback">
                                            @foreach ($errors->get('level') as $message)
                                                {{$message}}
                                            @endforeach
                                        </div>
                                    
                                </div>

                                <div class="form-group">
                                    <input type="text" name="dept" class="form-control input-lg @if ($errors->has('dept'))  {{'is-invalid'}} @endif"
                                           placeholder="القسم " >
                                    <div class="invalid-feedback">
                                        @foreach ($errors->get('dept') as $message)
                                            {{$message}}
                                        @endforeach
                                    </div>
                                </div>


                                
                                <button type="submit" class="btn btn-default btn-lg btn-block" >
                                        التسجيل
                                </button>
                                
                                
                            </div>
                            <!-- End Div Form -->
                            
                        </form>
                    <!-- start Contact Form -->

                </div>
            
            </div>
            <!-- End Row -->
            
        </div>
        <!-- End container -->
    
    </section>
    <!-- End Contact -->
    
<!-- -------------------------------------------------------------------------------------------------- -->


    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-arabic.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>new WOW().init();</script>  
    @stop

</body>
</html>