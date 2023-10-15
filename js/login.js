$(document).ready(function () {
    $('#butt').click(function () {
        var user = $('#name').val();
        var pass = $('#pass').val(); 

        if (user.length == "" && pass.length == "") {
            $('#result').css("color", "red").html("please write the username and password");
            return false;
        }
        else if (user.length == "") {
            $('#result').css("color", "red").html("please write the username");
            return false;
        }
        else if (pass.length == "") {
            $('#result').css("color", "red").html("please write the password");
            return false;
        }
        else {
            $.ajax({
                type: 'POST',
                url: 'action_login.php',
                data: { 'user': user, 'pass': pass },

                 success: function (data) {
                    alert(data);
                    if(data == "done") {
                        window.location.href = "index1.php"; 
                    }else if(data =="adminDone"){
                        window.location.href = "admin/action/result.php";
                    }
                    else{
                        $('#result').css("color", "red").html("Please enter the correct username and password");
                    }
                }
            });
        }
    });
});