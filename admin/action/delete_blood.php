<?php

include("../../class_function/class_crud.php");
if($_GET['sno']){
    $sno=$_GET['sno'];

    $table1 = "bloodgroup_table";
    $var= " sno ='$sno'";

    $data = $obj->deletelogin($table1, $var);

if($data){
    header('Location:addbloodgroup.php');
}
}
?>
