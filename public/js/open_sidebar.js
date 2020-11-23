$(function() {
    $("#hbg").on("click", function() {
        $(".sidebar").toggle(function() {
            $(".sidebar").animate({"margin-left" : "-250px"});
        }, function() {
            $(".sidebar").animate({"margin-left" : "0px"});
        });
    });
});