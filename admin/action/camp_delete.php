<?php

include("../../class_function/class_crud.php");
if($_GET['sno']){
    $id = $_GET['sno'];

    $table1 = "camp_list";
    $var = " sno='$id'";

    $data = $obj->deletelogin($table1, $var);

if($data){
    header('Location:camp_main.php');
}
}
?>
