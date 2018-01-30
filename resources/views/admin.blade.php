<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <a href="#">  Logout <i class="fa fa-download"></i>
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
                            <h4> admin name <br> <span>The Admin</span></h4>
                            <hr>
                            <h5>MAIN</h5>
                            <ul>
                                 <li id="li1"> <i class="fa fa-home"></i> الرئيسية </li>
                                 <h5>الملتقي</h5>
                                <li id="li2" class="active"> <i class="fa fa-picture-o"></i> اضافة ملتقي جديد </li>
                                <li id="li3" class=""> <i class="fa fa-envelope-open"></i> اضافة ندوة </li>
                                <li id="li4"> <i class="fa fa-users"></i> اضافة صور لندوة </li>
                                <h5>الرئيسية</h5>
                                <li id="li5"> <i class="fa fa-star"></i> اضافة الصور المهمة  </li>
                                <li id="li6"> <i class="fa fa-star"></i> اضافة محاور الملتقي </li>
    
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

                    
                    <div class='row'>
                        <div class='col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1'>
                                <div class="div two2" id="two2">
                                        <h3>اضافة ملتقي جديد</h3>
                                        <form action="/addCarousal" method="post" enctype="multipart/form-data">
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
                                        <form action="/addCarousal" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                    
                                            <div class="form-group">
                                                <label for="exampleInputFile"> اسم الندوة</label>
                                                <input type="text"  id="exampleInputFile" placeholder="2017">
                                            </div>
                                            <div class="form-group">
                                                    <label for="exampleInputFile">  صورة الندوة</label>
                                                    <input type="file" name="" id="exampleInputFile" >
                                                </div>
                                                <div class="form-group">
                                                        <label for="exampleInputFile"> نبذوة عن الندوة</label>
                                                        <input type="text" name="" id="exampleInputFile" >
                                                    </div>
                                                 <div class="form-group">
                                                            <label for="exampleInputFile">  بداية الندوة</label>
                                                            <input type="time" name="" id="exampleInputFile" >
                                                   </div>
                                                     <div class="form-group">
                                                            <label for="exampleInputFile">  نهاية الندوة</label>
                                                             <input type="time" name="" id="exampleInputFile" >
                                                      </div>
                                                      <div class="form-group">
                                                                    <label for="exampleInputFile">  تاريخ الندوة</label>
                                                                    <input type="date" name="" id="exampleInputFile" >
                                                       </div>
                                                       <div class="form-group">
                                                            <label for="exampleInputFile">  اسم المتحدث</label>
                                                            <input type="text" name="" id="exampleInputFile" >
                                                     </div>
                                                     <div class="form-group">
                                                            <label for="exampleInputFile">  نبذة عن المتحدث</label>
                                                            <input type="text" name="" id="exampleInputFile" >
                                                     </div>
                                                     <div class="form-group">
                                                            <label for="exampleInputFile">   اسم الشركة المنتمي اليها </label>
                                                            <input type="text" name="" id="exampleInputFile" >
                                                     </div>
                                               
                                               

                                        
                                    
                                            <button type="submit" class="btn btn-default">اضافة</button>
                                        </form>
                                 </div>
                        </div>
                        <div class='col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1'>
                                <div class="div two4" id="two4">
                                        <h3> اضافة صورة لندوة</h3>
                                        <form action="/addCarousal" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                    
                                            <div class="form-group">
                                                    <label class="custom-file-label" for="customFile">اختار صورة</label>

                                                    <input type="file" class="custom-file-input" id="customFile">
                                                </div>
                                            <select class="form-control">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                  </select>
                                                 
                                                  <br>
                                    
                                            <button type="submit" class="btn btn-default">اضافة</button>
                                        </form>
                                    </div>
                        </div>
                        <div class='col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-lg-6  col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1'>
                                <div class="div two5" id="two5">
                                        <h3>اضافة الصور المهمة</h3>
                                        <form action="/addCarousal" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                    
                                            <div class="form-group">
                                                    <label class="custom-file-label" for="customFile">اختيار الصورة</label>

                                                    <input type="file" class="custom-file-input" id="customFile">
                                                </div>
                                    
                                            <button type="submit" class="btn btn-default">اضافة</button>
                                        </form>
                                    </div>
                        </div>
                        <div class='col-sm-6'>
                            
                        <div class="two6" id="two6">
                          
                            </div>
                        </div>
                        <div class='col-sm-6'>
                                <div class="two7" id="two7">
                            
                                    </div>
                        </div>
                        <div class='col-sm-6'>
                        
                                <div class="two8" id="two8">
                            
                                    </div>
                        </div>
                        <div class='col-sm-6'>
                                <div class="two9" id="two9">
                          
                                    </div>
                        </div>
                        <div class='col-sm-6'>

                                <div class="two10" id="two10">
                            
                                    </div>
                        
                        </div>
                        <div class='col-sm-6'>
                                <div class="two11" id="two11">
                           
                                    </div>
                        </div>
                        <div class='col-sm-6'>
                                <div class="two12" id="two12">
                            
                                    </div>
                        </div>
                        <div class='col-sm-6'>
                                <div class="two13" id="two13">
                            
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
</body>
</html>