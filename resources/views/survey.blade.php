<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>questions</title>
        <link href="https://fonts.googleapis.com/css?family=Lateef" rel="stylesheet">

        <link href="{{asset('css/bootstrap-arabic.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">

    <link href="{{asset('css/surv.css')}}" rel="stylesheet">
        <style>
            body
            {
                padding-top:90px;
            }

            .navbar
            {
                background: #fff;

                box-shadow: 0px 3px #eee;
                top: 0;
            }
            .foot
            {
                box-shadow: -1px -4px 10px #eee;
                top: 0;
            }
        </style>

        <!-- [if lt IE9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.js"></script>
         <!--[end if]-->
</head>
<body>

@extends('master')
@section('body')
   

<!--start body-->
    
<section class="main_s">
    <div class="container">
    <h2>استمارة تقيم الندوة</h2>

    <p>  شكرا للمشاركة في الندوة نتمني ان تكونوا الندوة ذو قيمة بالنسبة لكم سنكون ممتنين لو استغرقت بضع دقائق لملء استمارة الاستبيان هذه حتى نتمكن من تحسين الحضور في المستقبل </p>
    <p>كيف تقيم هذه الندوة من حيث ما يلي</p>
        <form method="post" action="/StorSur/{{$S_id}}">

            {{csrf_field()}}
    <table class='table table-bordered table-striped'>
        <thead>
            <tr>
                <td>#</td>
                <td>الاسئلة</td>
                <td>5</td>
                <td>4</td>
                <td>3</td>
                <td>2</td>
                <td>1</td>

                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                 <radiogroup >

                <td> مجمل الندوه</td>
                <td>
                        <input class="form-check-input" type="radio" name="momtaz1"  value="5" >
                        
                    </td>
                <td>
                        <input class="form-check-input" type="radio" name="momtaz1"  value="4">
                       
                    </td>
                <td>
                        <input class="form-check-input" type="radio" name="momtaz1"  value="3">
                                
                    </td>
                <td>
                    
                        <input class="form-check-input" type="radio" name="momtaz1"  value="2">
                            
                    </td>
                     <td>
                    
                        <input class="form-check-input" type="radio" name="momtaz1"  value="1">
                            
                    </td>
            </radiogroup>

            </tr>
            
            <tr>
                <td>2</td>
                    <radiogroup>
                    <td>العمل علي تنظيم الندوه</td>
                    <td>

                            <input class="form-check-input" type="radio" name="momtaz_2"  value="5" >
                            

                        </td>
                    <td>

                            <input class="form-check-input" type="radio" name="momtaz_2"  value="4">
                           

                        </td>
                    <td>

                            <input class="form-check-input" type="radio" name="momtaz_2"  value="3">
                                    

                         </td>
                    <td>

                            <input class="form-check-input" type="radio" name="momtaz_2"  value="2">
                                    

                         </td>
                        <td>

                            <input class="form-check-input" type="radio" name="momtaz_2"  value="1">


                         </td>
                </radiogroup>
                </tr>

            <tr>
                <td>3</td>
                <radiogroup>
                    <td>مدي معرفة المتحدث  بموضوع الندوه</td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_3" value="5" >


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_3" value="4">


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_3" value="3">


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_3" value="2">


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_3" value="1">


                    </td>
                </radiogroup>
            </tr>


            <tr>
                <td>4</td>
                <radiogroup>
                    <td>قدرة المتكلم على كسب وإبقاء انتباهك</td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_4" value="5" >


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_4" value="4">


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_4" value="3">


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_4" value="2">


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_4" value="1">


                    </td>
                </radiogroup>
            </tr>

            <tr>
                <td>5</td>
                <radiogroup>
                    <td>الدورات الدراسية</td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_5" value="5" >


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_5" value="4">


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_5" value="3">


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_5" value="2">


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_5" value="1">


                    </td>
                </radiogroup>
            </tr>

            <tr>
                <td>6</td>
                <radiogroup>
                    <td>ما مدي استفادتك من موضوع الندوه</td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_6" value="5" >


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_6" value="4">


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_6" value="3">


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_6" value="2">


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_6" value="1">


                    </td>
                </radiogroup>
            </tr>

            <tr>
                <td>7</td>
                <radiogroup>
                    <td>مدي اهتمامك بحضور  ندوات اخري</td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_7" value="5" >


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_7" value="4">


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_7" value="3">


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_7" value="2">


                    </td>
                    <td>

                        <input class="form-check-input" type="radio"  name="momtaz_7" value="1">


                    </td>
                </radiogroup>
            </tr>


        </tbody>

    </table>
    
    
       <button type="submit" class="btn btn-primary">ارسال</button>
   
</form>
</div>
</section>

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap-arabic.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script>new WOW().init();</script>
@stop
</body>

</html>