$(document).ready(function() {
    $("#choose-signin").click(function() {
        $("#signin").css("display", "block");
        $("#signup").css("display", "none");
        $("#choose-signin").css("font-weight", "bold");
        $("#choose-signup").css("font-weight", "normal");
    });
    $("#choose-signup").click(function() {
        $("#signup").css("display", "block");
        $("#signin").css("display", "none");
        $("#choose-signup").css("font-weight", "bold");
        $("#choose-signin").css("font-weight", "normal");
    });
});

function closeLoader() {
    $("#loader").css("display", "none");
}

function changeSpot() {
    if($("#spot_id").val() == "new") {
        $("#new-spot").css("display","block");
    }
    else {
        $("#new-spot").css("display", "none");
    }
}