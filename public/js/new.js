$(document).ready(function(){
$('.start').click();

    function typeWriter(text, n) {
        if (n < (text.length)) {
            $('.test').html(text.substring(0, n+1));
            n++;
            setTimeout(function() {
                typeWriter(text, n)
            }, 100);
        }
    }

    $('.start').click(function(e) {
        e.stopPropagation();

        var text = $('.test').data('text');

        typeWriter(text, 0);
    });


//niceScroll

    $("body").niceScroll();
    $("body").niceScroll({
        cursorcolor:"red",
        cursorwidth:"20px"
    });

    //end
    //login

    $('#login-close').click(function(){

        $('.main-login').hide();

    });


    $('.ma_login').click(function(){
        $('.main-login').show();
    });

    //end


    /*footer
   */

    $('#btn-edit-u').click(function () {
        $('#ul-u').hide();
        $('#form-u').show();

    });

    $('#btn-cancel-u').click(function () {
        $('#ul-u').show();
        $('#form-u').hide();

    });

    $('#btn-edit-c').click(function () {
        $('#ul-c').hide();
        $('#form-c').show();

    });

    $('#btn-cancel-c').click(function () {
        $('#ul-c').show();
        $('#form-c').hide();

    });
//end
//scroll arrow

    var scoll=$("#top-scroll");
    $(window).scroll(function()
    {

        if($(this).scrollTop()>700)
        {
            scoll.show();
        }
        else{
            scoll.hide();
        }

    });
    scoll.click(function(){
        $("html,body").animate({scrollTop:0},600);
    });
//end




//navbar
    $(window).scroll(function() {
        if($(window).scrollTop() + $(document).height() > $(document).height()+110) {
            $('.navbar').css('background','#fff');
            $('.navbar').css('box-shadow','0 0 0.5rem 0 rgba(0, 0, 0, 0.125);');
        }

        if($(window).scrollTop() + $(document).height() == $(document).height()) {
            $('.navbar').css('background','rgba(194, 218, 218, 0.3686274509803922)');

        }
    });


// invoke the carousel
    $('#myCarousel').carousel({
        interval:6000
    });

// scroll slides on mouse scroll
    $('#myCarousel').bind('mousewheel DOMMouseScroll', function(e){

        if(e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
            $(this).carousel('prev');


        }
        else{
            $(this).carousel('next');

        }
    });

//scroll slides on swipe for touch enabled devices

    $("#myCarousel").on("touchstart", function(event){

        var yClick = event.originalEvent.touches[0].pageY;
        $(this).one("touchmove", function(event){

            var yMove = event.originalEvent.touches[0].pageY;
            if( Math.floor(yClick - yMove) > 1 ){
                $(".carousel").carousel('next');
            }
            else if( Math.floor(yClick - yMove) < -1 ){
                $(".carousel").carousel('prev');
            }
        });
        $(".carousel").on("touchend", function(){
            $(this).off("touchmove");
        });
    });

});
//animated  carousel start
$(document).ready(function(){

//to add  start animation on load for first slide
    $(function(){
        $.fn.extend({
            animateCss: function (animationName) {
                var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                this.addClass('animated ' + animationName).one(animationEnd, function() {
                    $(this).removeClass(animationName);
                });
            }
        });
        $('.item1.active img').animateCss('slideInDown');
        $('.item1.active h2').animateCss('zoomIn');
        $('.item1.active p').animateCss('fadeIn');

    });

//to start animation on  mousescroll , click and swipe



    $("#myCarousel").on('slide.bs.carousel', function () {
        $.fn.extend({
            animateCss: function (animationName) {
                var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                this.addClass('animated ' + animationName).one(animationEnd, function() {
                    $(this).removeClass(animationName);
                });
            }
        });

// add animation type  from animate.css on the element which you want to animate

        $('.item1 img').animateCss('slideInDown');
        $('.item1 h2').animateCss('zoomIn');
        $('.item1 p').animateCss('fadeIn');

        $('.item2 img').animateCss('zoomIn');
        $('.item2 h2').animateCss('swing');
        $('.item2 p').animateCss('fadeIn');

        $('.item3 img').animateCss('fadeInLeft');
        $('.item3 h2').animateCss('fadeInDown');
        $('.item3 p').animateCss('fadeIn');
    });


});



$(window).on('load', function(){
    $('.loading').fadeOut(6000,function () {
        $('.test').fadeOut(1000);
    });

});
