$(document).ready(function() {
    $("#choose-signin").click(function() {
        $("#signin").css("display", "block");
        $("#signup").css("display", "none");
    });
    $("#choose-signup").click(function() {
        $("#signup").css("display", "block");
        $("#signin").css("display", "none");
    });
});