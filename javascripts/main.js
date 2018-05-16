$(function(){
    $(".activity-box").mouseover(function(){
        $(this).css("background-color","#4ECCBF");
        $(this).find("a").find("img").css("opacity", 0);
        $(this).find("a").find("p").css({"background-color":"#4ECCBF", "color":"white"});
    }).mouseout(function(){
        $(this).css("background-color","#F5D0A9");
        $(this).find("a").find("img").css("opacity", 0.5);
        $(this).find("a").find("p").css({"background-color":"white", "color":"black", "opacity":0.85});
    });
});