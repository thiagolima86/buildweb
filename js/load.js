
$(document).ready(function(){
    $("#header").load("header.html", function(){
        $("#about").load("about.html")
        $("#services").load("services.html")
        $("#footer").load("footer.html")
    })
})