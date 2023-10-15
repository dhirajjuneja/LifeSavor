<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trust List</title>
    <link rel="stylesheet" href="css/donorlist.css">
    <style>
        table {
            text-align: center;
            position: relative;
            left: 20%;
        }
    </style>

</head>

<body>

    <?php

    include("C:/xampp/htdocs/bloodbankproject/bloodbankproject/frontfiles/header.php");

    include("class_function/class_crud.php");

    $table1 = "trust_registattion";
    $var = " status=1";
    $result = $obj->selectfun($table1, $var);

    $number = 1;
    if (mysqli_num_rows($result) === 0) {
        echo '<p style="font-size: 50px; text-align: center; color: red;">No records found.</p>';
    }
     else {
    $str = "";
    $str .= "<table>
    <tr>";
    $str .= "<th> No</th>";
    $str .= "<th> Name</th>";
    $str .= "<th> Address</th>";
    $str .= "<th> Email</th>";
    $str .= "<th> Number</th>";
    $str .= "<th> Registration Id</th>";
    $str .= "<th> Authorized Name</th>";

    $str .= "</tr><br>";

    while ($res = mysqli_fetch_assoc($result)) {
        $str .= "<tr>";
        $str .= "<td> " . $number . "</td>";
        $number++;
        $str .= "<td> " . $res['t_name'] . "</td>";
        $str .= "<td> " . $res['t_addr'] . "</td>";
        $str .= "<td> " . $res['t_email'] . "</td>";
        $str .= "<td> " . $res['t_num'] . "</td>";
        $str .= "<td> " . $res['t_reg'] . "</td>";
        $str .= "<td> " . $res['t_auth'] . "</td>";
        $str .= "</tr>";
    }
    $str .= "</table>";
    echo $str;
     }
    ?>
</body>
<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/donorlist.js"></script>

</html>