<?php
$enroll=$_GET['sno'];

include('../../database/connection.php');

$sql=" UPDATE `bloodregistration` SET `status`=0 WHERE sno='$enroll'";

$result=mysqli_query($conn,$sql);

if($result){
    header('location:checkstatus.php');
}
else{
    echo"there is an error";
}

?>