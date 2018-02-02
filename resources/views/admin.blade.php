<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>الملتقي الثاني لمطوري تكنولوجيا المعلومات</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/demo-page.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-arabic.css">

    <link rel="stylesheet" href="css/admin.css">
    <!--[if lt IE 9]>
            <script src="js/html5shiv.min.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
      <script src="js/respond.min.js"></script>

</head>
<body>
    


<!-- Start Navbar -->
    
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
             My Admin <i class="fa fa-lock" id="small"></i>
              <i class="fa fa-unlock" id="large"></i><br>
            <span style="text-aligh:left;">AD</span>
          </a>  
      </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
            <li class="actives">
                <a href="/logout">  تسجيل الخروج <i class="fa fa-download"></i>
                    <span class="sr-only">(current)</span>
                </a>
          </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- End Navbar -->
    
<section class="bod">
            <div class="all">
                
                    <div class="one">
                            <img src="images/pho1.jpg" alt="">
                            <h4> {{auth()->user()->name}}<br> <span>The Admin</span></h4>
                            <hr>
                            <h5>MAIN</h5>
                            <ul>
                                 <li id="li1" onclick="location.href='/'"> <i class="fa fa-home"></i> الرئيسية </li>
                                 <h5>الملتقي</h5>
                                <li id="li2" class="active"> <i class="fa fa-picture-o"></i> اضافة ملتقي جديد </li>
                                <li id="li3" class=""> <i class="fa fa-envelope-open"></i> اضافة ندوة </li>
                                <li id="li4"> <i class="fa fa-users"></i> اضافة صور لندوة </li>
                                <h5>الرئيسية</h5>
                                <li id="li5"> <i class="fa fa-star"></i> اضافة الصور المهمة  </li>

                                <li id="li7"> <i class="fa fa-star"></i> اضافة شركاء النجاح </li>
                                <li id="li8"> <i class="fa fa-star"></i> اضافة صورة اللوجو </li>
                                <h5>عرض</h5>
                                <li id="li9"> <i class="fa fa-star"></i> عرض المسجلين بالندوة  </li>
                                <li id="li10"> <i class="fa fa-star"></i> عرض اﻵراء عن الندوة </li>
    
                                <li id="li11"> <i class="fa fa-star"></i> عرض الشكاوي </li>
                                <h5>المستخدمين</h5>
                                <li id="li12"> <i class="fa fa-star"></i> اضافة مستخدم جديد </li>
                                <li id="li13"> <i class="fa fa-star"></i> عرض المستخدمين </li>
    
    
    
    
                            </ul>
                        </div>
                
                    <div class='right'>
                        <ul style="text-align: center">
                            @foreach($errors->all() as $e)
                                <li>{{$e}}</li>
                            @endforeach
                        </ul>




                        <div class='row'>
                        <div class='col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1'>
                                <div class="div two2" id="two2">
                                        <h3>اضافة ملتقي جديد</h3>
                                        <form action="/addmeeting" method="post" >
                                            {{csrf_field()}}
                                    
                                            <div class="form-group">
                                                <label for="exampleInputFile">تاريخ الملتقي</label>
                                                <input type="text" name="date" id="exampleInputFile" placeholder="2017">
                                            </div>
                                    
                                            <button type="submit" class="btn btn-default">اضافة</button>
                                        </form>
                                </div>
                        </div>
                        <div class='col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1'>
                                <div class="div two3" id="two3">
                                        <h3>اضافة ندوة جديد</h3>
                                        <form action="/addseminar" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}

                                            <div class="form-group">
                                                <label for="exampleInputFile"> اسم الندوة</label>
                                                <input type="text" name="sname"  id="exampleInputFile" placeholder="2017" required>
                                            </div>
                                            <div class="form-group">
                                                    <label for="exampleInputFile">  صورة الندوة</label>
                                                    <input type="file" name="simg" id="exampleInputFile">
                                                </div>
                                                <div class="form-group">
                                                        <label for="exampleInputFile"> نبذوة عن الندوة</label>
                                                        <input type="text" name="scontent" id="exampleInputFile" required>
                                                    </div>
                                                 <div class="form-group">
                                                            <label for="exampleInputFile">  بداية الندوة</label>
                                                            <input type="time" name="sstart" id="exampleInputFile" required>
                                                   </div>
                                                     <div class="form-group">
                                                            <label for="exampleInputFile">  نهاية الندوة</label>
                                                             <input type="time" name="send" id="exampleInputFile" required>
                                                      </div>
                                                      <div class="form-group">
                                                                    <label for="exampleInputFile">  تاريخ الندوة</label>
                                                                    <input type="date" name="sdate" id="exampleInputFile" required >
                                                       </div>
                                                       <div class="form-group">
                                                            <label for="exampleInputFile">  اسم المتحدث</label>
                                                            <input type="text" name="sspname" id="exampleInputFile" required>
                                                     </div>
                                                     <div class="form-group">
                                                            <label for="exampleInputFile">  نبذة عن المتحدث</label>
                                                            <input type="text" name="sspcontent" id="exampleInputFile" required>
                                                     </div>
                                                     <div class="form-group">
                                                            <label for="exampleInputFile">   اسم الشركة المنتمي اليها </label>
                                                            <input type="text" name="sspcompany" id="exampleInputFile" >
                                                     </div>
                                               

                                        
                                    
                                            <button type="submit" class="btn btn-default">اضافة</button>
                                        </form>
                                 </div>
                        </div>
                        <div class='col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1'>
                                <div class="div two4" id="two4">
                                        <h3> اضافة صورة لندوة</h3>
                                        <form action="/storesemImg" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                    
                                            <div class="form-group">
                                                    <label class="custom-file-label" for="customFile">اختار صورة</label>

                                                    <input type="file" name="semimg" class="custom-file-input" id="customFile">
                                                </div>
                                            <select class="form-control" name="semid">
                                                    <option selected>Open this select menu</option>
                                                @foreach($sems as $key=>$sem)
                                                    <option value="{{$sem->id}}">{{$sem->S_name}}</option>
                                                    @endforeach
                                                  </select>
                                                 
                                                  <br>
                                    
                                            <button type="submit" class="btn btn-default">اضافة</button>
                                        </form>
                                    </div>
                        </div>
                        <div class='col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1'>
                                <div class="div two5" id="two5">
                                        <h3>اضافة الصور المهمة</h3>
                                        <form action="/storeImpImg" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}

                                            <div class="form-group">
                                                    <label class="custom-file-label" for="customFile">اختيار الصورة</label>

                                                    <input type="file" name="imp_url" class="custom-file-input" id="customFile">
                                                </div>
                                    
                                            <button type="submit" class="btn btn-default">اضافة</button>
                                        </form>
                                    </div>
                        </div>

                        <div class='col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1'>
                                <div class="div two7" id="two7">
                                    <h3>اضافة  شركاء النجاح</h3>
                                    <form action="/addpart" method="post" enctype="multipart/form-data" >
                                        {{csrf_field()}}

                                        <div class="form-group">
                                            <label for="exampleInputFile"> اسم الشركه</label>
                                            <input type="text" name="partname" id="exampleInputFile" placeholder="company name">
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-file-label" for="customFile">اختيار الصورة</label>

                                            <input type="file" name="partimg" class="custom-file-input" id="customFile">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile"> نيذه عن الشركه</label>
                                            <input type="text" name="partcontent" id="exampleInputFile" placeholder="about company">
                                        </div>

                                        <button type="submit" class="btn btn-default">اضافة</button>
                                    </form>
                                    </div>
                    </div>
                        <div class='col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1'>
                        
                                <div class="div two8" id="two8">
                                    <form action="/addlogo" method="post" enctype="multipart/form-data" >
                                        {{ csrf_field() }}
                                <div class="form-group">
                                <label for="exampleInputFile"> صورة الملتقي</label>
                                <input type="file" name="meetimg" id="exampleInputFile">
                                  </div>

                            <button type="submit" class="btn btn-default">اضافة</button>
                            </form>
                                    </div>
                        </div>
                        <div class='col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1'>
                                <div class="div two9" id="two9">
                                    <form action="/getrollers" method="post" id="sem" >
                                        {{ csrf_field() }}
                                        <br>

                                        <select class="form-control" name="semid" id="semid">
                                            <option selected>Open this select menu</option>
                                            @foreach($sems as $key=>$sem)
                                                <option value="{{$sem->id}}">{{$sem->S_name}}</option>
                                            @endforeach
                                        </select>
                                        <br>

                                    </form>

                                    <br>
                                    <br>



                                    <table class="table table-striped table-bordered table-hover">
                                        <caption>عرض المسجلين</caption>
                                        <thead style="background: #066aab; color: white;">
                                        <tr>
                                            <th>#</th>
                                            <th>الاسم</th>
                                            <th>الكلية</th>
                                            <th>الفرقة</th>
                                            <th>المكان</th>
                                            <th>رقم الكرسي</th>

                                        </tr>
                                        </thead>
                                        <tbody id="view_r">

                                        </tbody>
                                    </table>
                                    <br>
                                    <br>
                                    <table class="table table-striped table-bordered table-hover">
                                        <caption> احصائيات  </caption>
                                        <thead style="background: #066aab; color: white;">
                                        <tr>
                                            <th>#</th>
                                            <th>5</th>
                                            <th>4</th>
                                            <th>3</th>
                                            <th>2</th>
                                            <th>1</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>f</td>
                                            <td>f</td>
                                            <td>f</td>
                                            <td>f</td>
                                            <td>f</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                        </div>
                        <div class='col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1'>

                                <div class="div two10" id="two10">
                                    <form action="/getfeed" method="post" >
                                        {{csrf_field()}}
                                        <br>

                                        <select class="form-control" name="feedid" id="feedid">
                                            <option selected>Open this select menu</option>
                                            @foreach($sems as $key=>$sem)
                                                <option value="{{$sem->id}}">{{$sem->S_name}}</option>
                                            @endforeach


                                        </select>
                                        <br>
                                    </form>
                                    <br>
                                    <br>
                                    <table class="table table-striped table-bordered table-hover">
                                        <caption> احصائيات الآراء </caption>
                                        <thead style="background: #066aab; color: white;">
                                        <tr>
                                            <th>question number</th>
                                            <th>5</th>
                                            <th>4</th>
                                            <th>3</th>
                                            <th>2</th>
                                            <th>1</th>

                                        </tr>

                                        </thead>
                                        <tbody id="view_f">

                                        </tbody>
                                    </table>
                                    </div>
                        
                        </div>
                        <div class='col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1'>
                                <div class="div two11" id="two11">
                                    <br>
                                    <br>
                                    <table class="table table-striped table-bordered table-hover">
                                        <caption>  الشكاوي </caption>
                                        <thead style="background: #066aab; color: white;">
                                        <tr>
                                            <th>#</th>
                                            <th>الشكوي</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($coms as $key=>$com)
                                        <tr>
                                            <th>{{$key+1}}</th>
                                            <td>{{$com->C_content}}</td>

                                        </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                        </div>
                        <div class='col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1'>
                                <div class="div two12" id="two12">
                                    <h3>اضافة  مستخدم جديد </h3>
                                    <form action="/adduser" method="post">
                                        {{csrf_field()}}

                                        <div class="form-group">
                                            <label for="exampleInputFile"> اسم المستخدم</label>
                                            <input type="text" name="name" id="exampleInputFile" placeholder="اسم المستخدم">
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-file-label" for="customFile"> البريد الالكتروني</label>

                                            <input type="email" name="email" class="custom-file-input" placeholder="الايميل">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile"> الرقم السري </label>
                                            <input type="password" name="password" id="exampleInputFile" placeholder="الرقم السري">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile"> نأكيد الرقم السري </label>
                                            <input type="password" name="password_confirmation" id="exampleInputFile" placeholder="تأكيد الرقم">
                                        </div>

                                        <button type="submit" class="btn btn-default">اضافة</button>
                                    </form>
                                    </div>
                        </div>
                        <div class='col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1'>
                                <div class="div two13" id="two13">
                                    <h3>  ادارة المستخدمين </h3>

                                    <br>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr class="he-color">
                                            <th>الاسم</th>
                                            <th>البريد الالكتروني</th>
                                            <th>type</th>
                                            <th>Admin Type</th>
                                            <th>Another Type</th>
                                            <th>Remove user</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <form method="post" action="/changeRole">
                                                {{csrf_field()}}
                                                <input type="hidden" name="id" value="{{$user->id}}">
                                                <tr>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>

                                                    <td style="color: @if($user->hasRole('admin')){{'red !important;'}} @else {{'black'}} @endif">
                                                        @if($user->hasRole('anther') ){{'another'}} @elseif($user->hasRole('admin')){{'admin'}} @endif
                                                    </td>
                                                    <td><input onchange="this.form.submit();" name="role" type="checkbox"></td>
                                                    <td><input  onchange="this.form.submit();" name="role-user" type="checkbox"></td>
                                                    <td><a href="/removeUser/{{$user->id}}"><i class="fa fa-trash-o"></i></a></td>

                                                </tr>
                                            </form>
                                        @endforeach

                                        </tbody>
                                    </table>
                                    </div>
                        </div>
                            
                    </div>
                        
                    
                       
                </div>

            </div>
        </div>
    </div>
</section>
    
    
<!-----------------------------------------------------> 
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>   
    <script src="js/popper.min.js"></script>
    <script src="js/admin.js"></script>
<script>

    //ajax registers
    $('#semid').change(function () {

        var semid = $('#semid').val();
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

            type: 'POST',
            url: '/getrollers',

            dataType: 'json',
            data: {semid: semid},
            success: function (data) {

                if (data.success == true) {

                    for(var i=0; i<data.roll.length ;i++)
                    {
                        $('#view_r').append('<tr>'+
                            '<td>'+ (i+1) +'</td>'+
                            '<td>'+ data.roll[i]['R_name'] +'</td>'+
                            '<td>'+ data.roll[i]['R_faculty'] +'</td>'+
                            '<td>'+ data.roll[i]['R_level'] +'</td>'+
                            '<td>'+ data.roll[i]['R_location'] +'</td>'+
                            '<td>'+ data.roll[i]['r_id'] +'</td>'



                            +'</tr>');

                    }





                }
                if (!data.success) {

                }
            }


        });

    });

    //end registers
    //srart feed back

    $('#feedid').change(function () {

        var feedid = $('#feedid').val();

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

            type: 'POST',
            url: '/getfeed',

            dataType: 'json',
            data: {feedid: feedid},
            success: function (data) {

                if (data.success == true) {
                    alert('A7A');
         

                }
                if (!data.success) {

                }
            }


        });
    });
    //end feedback
</script>
</body>
</html>