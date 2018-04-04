$(function(){
    $(".activity-box > a").mouseover(function(){
        $(this).parent().css("background-color","#4ECCBF");
        $(this).find("img").css("opacity", 0);
        $(this).find("p").css({"background-color":"#4ECCBF", "color":"white"});
    }).mouseout(function(){
        $(this).parent().css("background-color","#F5D0A9");
        $(this).find("img").css("opacity", 0.5);
        $(this).find("p").css({"background-color":"white", "color":"black", "opacity":0.85});
    });
});