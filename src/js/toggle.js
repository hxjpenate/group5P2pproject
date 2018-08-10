$(function () {
    var key = false;
    $("#toggle").click(function () {
        if (key) {
            key = false;
            $("#mainBox").removeClass("active");
            $("#toggle").text("显示列表");
        } else {
            key = true;
            $("#mainBox").addClass("active");
            $("#toggle").text("隐藏列表");
        }
    });

    var startX;
    $("body").on("touchstart", function (e) {
        // console.log(e);
        startX = e.originalEvent.changedTouches[0].clientX;
        // console.log(startX);
    });
    var endX;
    $("body").on("touchend", function (e) {
        endX = e.originalEvent.changedTouches[0].clientX;
        var disX = endX - startX;
        console.log(disX);
        if (disX >= 50) {
            key = true;
            $("#mainBox").addClass("active");
            $("#toggle").text("隐藏列表");
        } else if (disX <= -50) {
            key = false;
            $("#mainBox").removeClass("active");
            $("#toggle").text("显示列表");
        }
    });

});