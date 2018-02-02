

<div class="main-login">
    <div class="login">
        <div style="width: 100%; text-align: right;">
            <i id="login-close" style="margin: 7px;" class="fa fa-close"></i>

        </div>
        <h2>تسجيل الدخول</h2>
        <div class="img-brand-form">
            <img src="{{asset('images/fa.jpg')}}">

        </div>
        <form method="post" action="/login">
            {{csrf_field()}}
            <div class="form-input">
                <input type="email" name="email" id="em"  placeholder="البريد الالكتروني">
                <img src="images/gmail.png" style="bottom: 214px;">



                <input type="password" name="password" id="pa" placeholder="الرقم السري">
                <img src="images/cl.png">
            </div>
            <div class="invalid-feedback">
                @if($errors->any())
                    {{$errors->first()}}
                @endif
            </div>


            <div class="checkbox">
                <label>
                    <input name="checked" type="checkbox" checked>تذكرني
                </label>
            </div>
            <button type="submit" class="btn btn-default">Login</button>
        </form>

    </div>
</div>


<!-- navbar -->
<nav class="navbar navbar-findcond">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">الملتقي</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="/"> <i class="fa fa-home"></i> الرئيسية  <span class="sr-only">(current)</span></a></li>
                <li><a href="#three"> <i class="fa fa-object-group"></i>  شركاء النجاح </a></li>
                <li><a href="#axu"> <i class="fa fa-stack-exchange"></i> محاور الملتقي </a></li>
                <li><a href="/meetings"> <i class="fa fa-globe"></i> الندوات  </a></li>
                <li><a href="/Gallery"> <i class="fa fa-image"></i> صور الندوات </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-calendar"></i> ندوات اليوم </a>
                    <ul class="dropdown-menu" role="menu">
                        @foreach($SDay as $key=>$sday)
                        <li><a href="/informations/{{$sday->id}}"><i class="fa fa-fw fa-tag"></i>  {{$sday->S_name}} </a></li>
                        @endforeach

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-undo"></i> الملتقيات السابقة  </a>
                    <ul class="dropdown-menu" role="menu">
                        @foreach($allMeetings as $a)
                            @if($a->Year!=date('Y',time()))
                        <li><a href="/Seminers/{{$a->Year}}"><i class="fa fa-fw fa-tag"></i>  ملتقي{{$a->Year}} </a></li>
                            @endif
                        @endforeach
                    </ul>
                </li>

                <li><a href="#contact_us">  <i class="fa fa-mobile"></i> اتصل بنا  </a></li>

                @if(!Auth::check())
                    <li >
                        <a class='ma_login' href="#">  <i class="fa fa-sign-in"></i> تسجيل الدخول  </a>
                    </li>
                @elseif(Auth::check() && Auth::user()->hasRole('admin'))
                    <li>
                        <a href="/admin"> لوحة التحكم</a>

                    </li>
                    <li>
                        <a href="/logout"> تسجيل الخروج</a>

                    </li>
                @elseif(Auth::check() && Auth::user()->hasRole('anther'))
                    <li>
                        <a href="/anther"> لوحة التحكم</a>

                    </li>
                    <li>
                        <a href="/logout"> تسجيل الخروج</a>

                    </li>
                @else
                    <li>
                        <a href="/logout"> تسجيل الخروج</a>

                    </li>
                @endif


            </ul>

        </div>
    </div>
</nav>

<!--end nav-->



@yield('body')


<!-- start footer -->


<section class="foot" id='contact_us'>
    <div class="container">
        <h2 class="h1 text-center wow bounce"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s">اتصل بنا</h2>
        <hr style="width:100px;height:2px;background:#fff;margin-top:-5px;">
        <div class="row">
            <div class="footer">
                <div class="fot col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <ul id='ul-u'>
                        <h3 style='margin-right:13px;'>اتحاد الكلية</h3>
                        <a href="#"><li> <i class="fa fa-envelope"></i> {{$contact->email1}}</li></a><br>
                        <a href="#"><li> <i class="fa fa-envelope"></i> {{$contact->email2}}</li></a><br>
                        <a href="#"><li><i class="fa fa-phone"></i> {{$contact->num1}} </li></a>
                        <br>
                        @if(Auth::check() && Auth::user()->hasRole('admin'))

                        <button style='margin-right:9px;' class="btn btn-danger" id="btn-edit-u">edit</button>
                            @endif


                    </ul>


                    <form method="post" id='form-u' action="/uEdit">
                        <h3>اتحاد الكلية</h3>
                        {{csrf_field()}}

                        <div class="text-footer"><i class="fa fa-envelope icon-footer"></i><input name="email1" type="text" class="form-control" value="{{old('email1', $contact->email1)}}" ></div>
                        <div class="text-footer"><i class="fa fa-envelope icon-footer"></i><input name="email2" type="text" class="form-control" value="{{old('email2', $contact->email2)}}" ></div>
                        <div class="text-footer"><i class="fa fa-phone icon-footer"></i><input name="num1" type="text" class="form-control" value="{{old('num1', $contact->num1)}}" ></div>
                        <input type="hidden" name="id" value="{{$contact->id}}">

                        <button style='margin-right:24px;' type="submit"  class="btn btn-primary">Update</button>
                        <input type="button" class="btn btn-danger" id="btn-cancel-u" value="Cancel">


                    </form>

                </div>
                <div class="fot col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <ul id='ul-c'>
                        <h3 style='margin-right:13px;'>الاتصال العام</h3>
                        <a href="#"><li> <i class="fa fa-envelope"></i> {{$contact->email3}}</li></a><br>
                        <a href="#"><li> <i class="fa fa-envelope"></i>{{$contact->email4}}</li></a><br>
                        <a href="#"><li><i class="fa fa-phone"></i> {{$contact->num2}}</li></a>
                        <br>
                        @if(Auth::check() && Auth::user()->hasRole('admin'))


                        <button style='margin-right:9px;' class="btn btn-danger" id="btn-edit-c">edit</button>
                            @endif

                    </ul>

                    <form method="post" id='form-c' action="/cEdit">
                        <h3>الاتصال العام</h3>

                        {{csrf_field()}}
                        <div class="text-footer"><i class="fa fa-envelope icon-footer"></i><input name="email3" type="text" class="form-control" value="{{old('email3', $contact->email3)}}" ></div>
                        <div class="text-footer"><i class="fa fa-envelope icon-footer"></i><input name="email4" type="text" class="form-control" value="{{old('email4', $contact->email4)}}" ></div>
                        <div class="text-footer"><i class="fa fa-phone icon-footer"></i><input name="num2" type="text" class="form-control" value="{{old('num2', $contact->num2)}}" ></div>
                        <input type="hidden" name="id" value="{{$contact->id}}">

                        <button style='margin-right:24px;' type="submit"  class="btn btn-primary">Update</button>
                        <input type="button" class="btn btn-danger" id="btn-cancel-c" value="Cancel">


                    </form>

                </div>
                <div class="fot col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <h3>الشكاوي</h3>
                    <form  method="post" action="/storecomplain" >
                        {{csrf_field()}}
                    <textarea placeholder="...." name="C_content" id="content" class="complain  @if ($errors->has('C_content'))  {{'is-invalid'}} @endif"></textarea>
                    <div class="invalid-feedback">
                            @foreach ($errors->get('C_content') as $message)
                                {{$message}}
                            @endforeach
                        </div>
                    
                    <button type="submit" class="btn btn-primary"   >ارسال</button>
                    </form>
                </div>
                <div class="fot col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <ul>
                        <h3>تابعنا</h3>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-edge"></i></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- end footer -->





<!----------------------------------------------------->


<!----------------------------------------------------->
<img src="{{asset('images/arrow.png')}}" id="top-scroll">

<script src="{{asset('js/new.js')}}"></script>


    



