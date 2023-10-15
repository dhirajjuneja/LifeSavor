<?php
$enroll=$_GET['sno'];

include('../../database/connection.php');

// include("C:/xampp/htdocs/bloodbankproject/bloodbankproject/function/selectfunction.php");

// $table1 = 'trust_registration';

// $var =" `status`=1 WHERE t_id ='$enroll'";

// $res = $obj->selectfun($table1, $var);
// $result = mysqli_fetch_assoc($res);

$sql="UPDATE `trust_registattion` SET `status`=1 WHERE t_id ='$enroll'";

$result=mysqli_query($conn,$sql);


if($result){
    header('location:check_trust_status.php');
}
else{
    echo"there is an error";
}


?>