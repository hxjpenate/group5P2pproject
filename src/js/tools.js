$(function () {
    $('#showCode').tooltip()
})

// 滑动隐藏
var startX;
$("#carousel-example-generic").on("touchstart", function (e) {
    // console.log(e);
    startX = e.originalEvent.changedTouches[0].clientX;
    console.log(startX);
});
var endX;
$("#carousel-example-generic").on("touchend", function (e) {
    endX = e.originalEvent.changedTouches[0].clientX;
    var disX = endX - startX;
    console.log(disX);
    if (disX >= 50) {
        $(".left").trigger("click");
    } else if (disX <= -50) {
        $(".right").trigger("click");
    }
});