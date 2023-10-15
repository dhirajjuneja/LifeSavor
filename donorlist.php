<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor List</title>
    <link rel="stylesheet" href="css/donorlist.css">
</head>

<body>
    <?php
    include("frontfiles/header.php");
    ?>

    <div class="blood-grp">
        <div class="container">
            <div class="grp">
                <label for="Blood Group">Choose Your Blood Group:</label>

                <select name="blood" id="blood">
                    <option value="1">select the bloodgrp</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
            </div>
            <div id="result">
                <?php
                include('C:/xampp/htdocs/bloodbankproject/bloodbankproject/database/connection.php');

                $query = " SELECT bloodregistration.*, trust_registattion.t_name FROM bloodregistration LEFT JOIN trust_registattion ON bloodregistration.trustname = trust_registattion.t_id WHERE bloodregistration.status = '1'";

                $result = mysqli_query($conn, $query);

                $number = 1;
                $str = "";
                $str .= "<table>
                    <tr>";
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
                $str .= "<th> Trust Name</th>";
                $str .= "<th> Date</th>";
                $str .= "</tr><br>";

                while ($res = mysqli_fetch_assoc($result)) {
                    $str .= "<tr>";
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
                    $str .= "</tr>";
                }
                $str .= "</table>";
                echo $str;
                ?>

            </div>
        </div>
    </div>

    <script src="js/jquery-3.7.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').change(function (e) {
                e.preventDefault();
                var data = $(this).val();
                $.ajax({
                    type: "post",
                    url: "php/donorlistpage.php",
                    data: {
                        'data': data
                    },
                    success: function (data) {
                        $('#result').html(data);
                    }
     });
            });
        });
    </script>

</body>

</html>