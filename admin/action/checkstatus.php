<!doctype html>
<html>

<head>
    <title> This is the status page</title>
    <style>
        table,
        th,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table {
            margin-top: 44px;
        }

        td {
            height: 32px;
            text-align: center;
            width: 112px;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php
    include("header.php");
    ?>


    <div class="container">
        <?php
       include('../../database/connection.php');

        include("../../class_function/class_crud.php");
        $table1 = 'bloodregistration';
        
     $result = $obj->selectfun($table1);
        if (mysqli_num_rows($result) > 0) {

            echo "<table >
                <tr>
                    <th>Sno</th>
                    <th>NAME</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>B date</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Group</th>
                    <th>City</th>
                    <th>Weight</th>
                    <th>Temperature</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>";
            $sno = 1;
            while ($res = mysqli_fetch_array($result)) {
                if ($res['11'] == 0) {
                    echo "<tr>
                    <td>" . $sno . "</td>
                    <td>" . $res[1] . "</td>
                    <td>" . $res[2] . "</td>
                    <td>" . $res[3] . "</td>
                    <td>" . $res[4] . "</td>
                    <td>" . $res[5] . "</td>
                    <td>" . $res[6] . "</td>
                    <td>" . $res[7] . "</td>
                    <td>" . $res[8] . "</td>
                    <td>" . $res[9] . "</td>
                    <td>" . $res[10] . "</td>
                    <td style='color:red'> Deactivated </td>
                    <td><a href='active.php?sno=$res[0]'>Active</a></td>
                </tr>";
                } else {
                    echo "<tr>
                        <td>" . $sno . "</td>
                        <td>" . $res[1] . "</td>
                        <td>" . $res[2] . "</td>
                        <td>" . $res[3] . "</td>
                        <td>" . $res[4] . "</td>
                        <td>" . $res[5] . "</td>
                        <td>" . $res[6] . "</td>
                        <td>" . $res[7] . "</td>
                        <td>" . $res[8] . "</td>
                        <td>" . $res[9] . "</td>
                        <td>" . $res[10] . "</td>
                        <td style='color:green'> activated </td>
                        <td><a href='deactive.php?sno=$res[0]'>Deactive</a></td>
                    </tr>";
                }
                $sno++;
            }
            echo "</table>";
        }

        mysqli_close($conn);
        ?>
    </div>


    <?php
    include("footer.php");
    ?>

</body>

</html>