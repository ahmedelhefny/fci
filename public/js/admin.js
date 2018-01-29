$(document).ready(function(){
    

    
    $("html").niceScroll();
    

    
var two1=$("#two1");
var two2=$("#two2");
var two3=$("#two3");
var two4=$("#two4");
var two5=$("#two5");
    
var two11=$("#two11");
var two22=$("#two22");
var two33=$("#two33");
var two44=$("#two44");
var two55=$("#two55");
 
two22.click(function(){
        two22.addClass('active');
    two33.removeClass('active');
    two44.removeClass('active');
    two55.removeClass('active');
    two2.css('display','block');
    two3.css('display','none');
     two4.css('display','none');
     two5.css('display','none');
});
    
    two33.click(function(){
    two33.addClass('active');
    two22.removeClass('active');
    two44.removeClass('active');
    two55.removeClass('active');
    two3.css('display','block');;
    two2.css('display','none');
     two4.css('display','none');
     two5.css('display','none');
});
    
        two44.click(function(){
        two44.addClass('active');
    two22.removeClass('active');
    two33.removeClass('active');
    two55.removeClass('active');
    two4.css('display','block');
    two2.css('display','none');
     two3.css('display','none');
     two5.css('display','none');
});
    
        two55.click(function(){
        two55.addClass('active');
    two22.removeClass('active');
    two44.removeClass('active');
    two33.removeClass('active');
    two5.css('display','block');
    two2.css('display','none');
     two4.css('display','none');
     two3.css('display','none');
});
    
    var small=$("#small");
    var large=$("#large");
    var ul=$('.bod .all .one ul');
    var img=$('.bod .all .one img');
    var h4=$('.bod .all .one h4');
    var one=$('.bod .all .one');
    var divs=$('.bod .all .two2, .bod .all .two3, .bod .all .two4, .bod .all .two5');
    small.click(function(){
        ul.css('display','table-caption');
        large.css('display','inline');
        h4.css('display','block');
        img.css('margin-top','40px');
        small.css('display','none');
        one.css('width','70%');
        divs.css('margin-left','-120px');
        divs.css('width','109.9%');
});
    large.click(function(){
        ul.css('display','block');
        small.css('display','inline');
        h4.css('display','inline-block');
        img.css('margin-top','0');
        large.css('display','none');
        one.css('width','100%');
        divs.css('margin-left','-30px');
        divs.css('width','103%');
});
    
    
});