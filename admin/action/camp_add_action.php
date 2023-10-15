<?php
include("../../class_function/class_crud.php");

if (isset($_POST['t_name'])) {
    $t_name = $_POST['t_name'];
    $c_name = $_POST['c_name'];
    $date = $_POST['date'];

    $table1 = "camp_list";
    $var = " (`trust_name`,`camp_name`,`camp_date`)
     VALUES( '$t_name', '$c_name','$date')";
    $result = $obj->insertfunction($table1, $var);


    if ($result) {
        echo "successfull completed";
    } else {
        echo "there is a problem";
    }

}



?>