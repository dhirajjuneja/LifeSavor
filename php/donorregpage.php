<?php
include("../class_function/class_crud.php");

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $bdate = $_POST['bdate'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $grp = $_POST['grp'];
    $city = $_POST['city'];
    $weight = $_POST['weight'];
    $temp = $_POST['temp'];
    $trust_grp = $_POST['trust_grp'];
    $pass = $_POST['pass'];
    
    $table = "bloodregistration";
    $var = " r_name = '$name' AND r_email = '$email' AND r_grp = '$grp' AND donorDate >= DATE_SUB(CURDATE(), INTERVAL 3 MONTH)";

    $result= $obj->selectfun($table, $var);

    if (mysqli_num_rows($result) > 0) {
        echo '<p style="font-size: 50px; text-align: center; color: red;">Opps sorry!!...You are not eligible to donate blood.</p>';
    } else {
        $table1 = "bloodregistration";
        $var1 = " (`r_name`, `r_email`, `r_no`, `r_bdate`, `r_gen`, `r_addr`, `r_grp`, `r_city`, `r_weight`, `r_temp`, `trustname`, `password`)
        VALUES ('$name', '$email', '$number', '$bdate', '$gender', '$address', '$grp', '$city', '$weight', '$temp', '$trust_grp', '$pass') ";

        $result1 = $obj->insertfunction($table1, $var1);

        if ($result1) {
            echo '<p style="font-size: 30px; text-align: center; color: green;">Successfully completed registration!</p>';
        } else {
            echo "There was a problem with the registration.";
        }
    }
} else {
    echo "Invalid data.";
}
?>