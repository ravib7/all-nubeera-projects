function changeContent(contntName) {
    $('#vid_frame').attr('src', contntName);
    //  $('#vid-list-cont').css('display', 'none');
    //  $('#vid-cont').css('width', '100%');
    //  $('#vid-main-wrap').css('top', '1%');
    //  $('#vid-main-wrap').css('right', '50px');
    //  $('#vid-main-wrap').css('width', '950px');
    //  $('#vid-main-wrap').css('height', '84%');
}

function showPlaylist(batchName) {

    $.ajax({
        url: 'backend.php?data=fetchplylist',
        type: 'POST',
        dataType: 'html',
        data: { batchNamevalue: batchName },
        success: function(data) {
            if (data) {
                $("#vid-list").html(data);
                document.getElementById("vid-list").getElementsByTagName("a")[0].click();
            } else {
                $("#vid-list").html("failed");
            }
        }
    });
}

$(document).ready(function() {

    document.getElementById("collapseVideos").getElementsByTagName("a")[0].click();
});



function checkPasswordMatch() {
    var password = $("#newPsswrd").val();
    var confirmPassword = $("#cnfrmPsswrd").val();

    if (password != confirmPassword) {
        $("#message").html("Passwords do not match!");
        $("#message").attr("class", "alert alert-danger");
        $("#message").css("display", "flex");
        $("#newPsswrd").val("");
        $("#cnfrmPsswrd").val("");
    } else {
        $("#message").css("display", "none");
    }
}