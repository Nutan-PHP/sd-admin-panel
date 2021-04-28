$(document).ready(function() {
    $("#currentPwd").keyup(function() {
        var currentPwd = $("#currentPwd").val();
        $.ajax({
            type: "post",
            url: "/admin/check-current-pwd",
            data: { currentPwd: currentPwd },
            success: function(resp) {
                console.log(resp);
                if (resp == "false") {
                    $("#currentPwd_err").html("Current Password Is Incorrect ");
                } else {
                    $("#currentPwd_err").html("");
                }
            },
            error: function(err) {
                console.log("error" + err);
            }
        });
    });
});
