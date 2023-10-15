<?php
include('C:/xampp/htdocs/bloodbankproject/bloodbankproject/database/connection.php');

if (isset($_POST['data'])) {
    $data = $_POST['data'];

    $query = " SELECT bloodregistration.*, trust_registattion.t_name FROM bloodregistration LEFT JOIN trust_registattion ON bloodregistration.trustname = trust_registattion.t_id WHERE bloodregistration.r_grp = '$data'  AND  bloodregistration.status = '1'";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) === 0) {
        echo '<p style="font-size: 50px; text-align: center; color: red;">No records found.</p>';
    }
     else {
    $number = 1;
    $str = "";
    $str .= "<tbody><tr>";
    $str .= "<th>No</th>";
    $str .= "<th>name</th>";
    $str .= "<th> Email</th>";
    $str .= "<th> Number</th>";
    $str .= "<th> Bdate</th>";
    $str .= "<th> Gender</th>";
    $str .= "<th> Address</th>";
    $str .= "<th> Group </th>";
    $str .= "<th> City </th>";
    $str .= "<th> Weight</th>";
    $str .= "<th> Temperature</th>";
    $str .= "<th> Trusts Name</th>";
    $str .= "<th> Date</th>";
    $str.="</tr>";

    while ($res = mysqli_fetch_assoc($result)) {
        $str .= "<tbody><tr>";
        $str .= "<td> " . $number . "</td>";
        $number++;
        $str .= "<td> " . $res['r_name'] . "</td>";
        $str .= "<td> " . $res['r_email'] . "</td>";
        $str .= "<td> " . $res['r_no'] . "</td>";
        $str .= "<td> " . $res['r_bdate'] . "</td>";
        $str .= "<td> " . $res['r_gen'] . "</td>";
        $str .= "<td> " . $res['r_addr'] . "</td>";
        $str .= "<td> " . $res['r_grp'] . "</td>";
        $str .= "<td> " . $res['r_city'] . "</td>";
        $str .= "<td> " . $res['r_weight'] . "</td>";
        $str .= "<td> " . $res['r_temp'] . "</td>";
        $str .= "<td> " . $res['t_name'] . "</td>";
        $str .= "<td> " . $res['donorDate'] . "</td>";
        $str .= "</tr></tbody>";
    }
    
        echo $str;
    }
}
?>