$(function() {

    $(".icon-menu").click(function(){
        $(".main-menu ul").addClass("open-menu")
        $("body").css("overflow", "hidden")
        return false
    })

    $(".btn-close-menu").click(function(){
        $(".main-menu ul").removeClass("open-menu")
        $("body").css("overflow", "auto")
        return false
    })
});