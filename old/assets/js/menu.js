$(function() {

    $(".icon-menu").click(function(){
        $(".main-menu").addClass("open-menu")
        $("body").css("overflow", "hidden")
    })

    $(".btn-close-menu").click(function(){
        $(".main-menu").removeClass("open-menu")
        $("body").css("overflow", "auto")
    })
});