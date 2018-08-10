
$(function () {
    // 点击隐藏
    var key = false;
    $("#toggle").click(function () {
        if (key) {
            hide();
        } else {
            show();
        }
    });
    // 显示方法
    function show() {
        key = true;
        $("#mainBox").addClass("active");
        $("#toggle").text("隐藏列表");
    }
    // 隐藏方法
    function hide() {
        key = false;
        $("#mainBox").removeClass("active");
        $("#toggle").text("显示列表");
    }

    // 滑动隐藏
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
            show();
        } else if (disX <= -50) {
            hide();
        }
    });

});