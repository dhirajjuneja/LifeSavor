<?php
// session_start();

include("C:/xampp/htdocs/bloodbankproject/bloodbankproject/class_function/class_crud.php");

if(isset($_POST['user']) && isset($_POST['pass'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $table1 = "trust_registattion";
    $var1 = " t_email='$username' AND password='$password'";
    $result1 = $obj->selectfun($table1, $var1);

    
    $table2 = "bloodregistration";
    $var2 = " r_email='$username' AND password='$password'";
    $result2 = $obj->selectfun($table2, $var2);


    $table3 = "loginpage";
    $var3 = " user_name='$username' AND password_name='$password'";
    $result3 = $obj->selectfun($table3, $var3);

    if (mysqli_num_rows($result1) > 0 || mysqli_num_rows($result2) > 0 ) {
        echo ("done");
    }
    else if(mysqli_num_rows($result3) > 0){
        // $_SESSION['username'] = $username;
        echo ("adminDone");
       
    }else{
        echo ("there is a problem");
       
    }
    
   
}



?>
