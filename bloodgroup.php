<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group</title>
    <style>
        table{
            margin:5% 0%;
            padding: 5px;
        }
        th,
        tr,
        table,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            height: 49px;
            text-align: center;

        }
    </style>
</head>

<body>
    <?php
    include("frontfiles/header.php");
    ?>
    <div class="container">
        <?php
    include("class_function/class_crud.php");

        $table1 = "blood_information";

        $result = $obj->selectfun($table1);

        if (mysqli_num_rows($result) > 0) {
            echo "<table >
                <tr>
                    <th>ID</th>
                    <th>Blood Name</th>
                    <th>Blood Group Detail A</th>
                </tr>";

            while ($res = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>" . $res['sno'] . "</td>
                    <td>" . $res['grp_name'] . "</td>
                    <td>" . $res['grp_detail'] . "</td>
                </tr>";
            }

            echo "</table>";
        } else {
            echo "No data available.";
        }

        ?>
    </div>

    <?php
    include("frontfiles/footer.php");
    ?>
</body>

</html>