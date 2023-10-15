<?php
include("../class_function/class_crud.php");
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];

    $table1 = "contactpage";

    $var = " (`donor_name`, `donor_email`, `donor_num`, `donor_sub`) 
    VALUES ( '$name', '$email', '$number', '$subject')";

    $result = $obj->insertfunction($table1, $var);

    if ($result) {
        echo "successfull completed";
    } else {
        echo "there is a problem";
    }

}



?>