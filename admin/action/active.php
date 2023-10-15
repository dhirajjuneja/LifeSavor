<?php
// $enroll = $_GET['sno'];

// include('../../database/connection.php');

// date_default_timezone_set('Asia/Kolkata');
// $timestore=date('Y-m-d');

// $sql = "UPDATE `bloodregistration` SET `status` = 1, `donorDate`='".$timestore."'  WHERE sno = '$enroll'";

// $result = mysqli_query($conn, $sql);
// if ($result) {
//     header('location:checkstatus.php');
// } else {
//     echo "There was an error.";
// }

?>
<?php


$enroll = $_GET['sno'];

include("../../class_function/class_crud.php");
date_default_timezone_set('Asia/Kolkata');
$timestore=date('Y-m-d');
$table1 =`bloodregistration`;
$val = "  `status` = 1, `donorDate`='".$timestore."'  WHERE sno = '$enroll'";

$obj1= $obj->updatefun($table1 ,$val);


if ($result) {
    header('location:checkstatus.php');
} else {
    echo "There was an error.";
}



?>

