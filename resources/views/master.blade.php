








<!-- start footer -->


<section class="foot">
    <div class="container">
        <h2 class="h1 text-center wow bounce"  data-wow-duration="1.5s" data-wow-offset="100" data-wow-dely="1.5s">اتصل بنا</h2>
        <hr style="width:100px;height:2px;background:#fff;margin-top:-5px;">
        <div class="row">
            <div class="footer">
                <div class="fot col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <ul>
                        <h3>اتحاد الكلية</h3>
                        <a href="#"><li> <i class="fa fa-envelope"></i> al_faisal_989@hotmail.com</li></a><br>
                        <a href="#"><li> <i class="fa fa-envelope"></i> al_faisal_989@hotmail.com</li></a><br>
                        <a href="#"><li><i class="fa fa-phone"></i> +1704-957-7624</li></a>
                    </ul>
                </div>
                <div class="fot col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <ul>
                        <h3>الاتصال العام</h3>
                        <a href="#"><li> <i class="fa fa-envelope"></i> al_faisal_989@hotmail.com</li></a><br>
                        <a href="#"><li> <i class="fa fa-envelope"></i> al_faisal_989@hotmail.com</li></a><br>
                        <a href="#"><li><i class="fa fa-phone"></i> +966 503534660</li></a>
                    </ul>
                </div>
                <div class="fot col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <h3>الشكاوي</h3>
                    <form  method="post" action="/storecomplain" >
                        {{csrf_field()}}
                    <textarea placeholder="...." name="C_content" id="content"></textarea>
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

<div class="log text-center">
    <div class="container">
        <div class="loog">
            <img src="images/mans.png">
            <h2 class="h1">جامعة المنصورة</h2>
            <div class="copy">
                <div class="copy1 text-center">تحت رعاية © <strong>رئيس جامعة المنصورة </strong>وريادة</div>
                <div class="copy2 text-center"> <strong>نائب رئيس جامعة المنصورة</strong></div>
            </div>
        </div>
    </div>
</div>

<!----------------------------------------------------->
<img src="images/arrow.png" id="top-scroll">
@yield('body')


