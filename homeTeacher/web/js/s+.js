
$(function(){


    $(".menu li a").click(function(){
        $(this).addClass("cur");
        $(this).parent().siblings().children("a").removeClass("cur");


        $("html, body").animate({
            scrollTop: $($(this).attr("href")).offset().top - 100 + "px"
        }, 1000);
        return false;
    });



});