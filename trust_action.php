<?php

include("class_function/class_crud.php");

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $address = $_POST['addr'];
    $email = $_POST['email'];
    $number = $_POST['no'];
    $Registration_id = $_POST['Registration_id'];
    $certificate = $_POST['certificate'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["trust_logo"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $authorities_name = $_POST['authorities_name'];
    $password = $_POST['password'];

    $table1 = "trust_registattion";
    
 
    if (move_uploaded_file($_FILES["trust_logo"]["tmp_name"], $target_file)) {
        $image_name = basename($_FILES["trust_logo"]["name"]);

        $var = " (`t_name`, `t_addr`, `t_email`, `t_num`, `t_reg`, `t_certi`, `t_logo`, `t_auth`, `password`)
        VALUES ('$name', '$address', '$email', '$number', '$Registration_id', '$certificate', '$image_name', '$authorities_name', '$password')";

        $result = $obj->insertfunction($table1, $var);

        if ($result) {
            echo '<p style="font-size: 30px; text-align: center; color: green;">Successfully completed registration!</p>';
        } else {
            echo "There is a problem";
        }
    }
}

?>
