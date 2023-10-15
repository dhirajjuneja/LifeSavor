<?php
// session_start();
include("../../class_function/class_crud.php");

if (isset($_POST['user'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];


    $table3 = "loginpage";
    $var3 = " user_name='$username' AND password_name='$password'";
    $result3 = $obj->selectfun($table3, $var3);

    if (mysqli_num_rows($result3) > 0) {
        echo "done";
    } else {
        // $_SESSION['username']=$username;
        echo " not done";
    }
}
?>