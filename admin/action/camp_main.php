<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camp List</title>
    <style>
        body {
            overflow-x: hidden;
        }

        tr,
        th,
        td,
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            height: 52px;
            width: 101px;
        }

        td {
            height: 74px;
        }

        tr {
            text-align: center;
        }

        label {
            font-size: 25px;
            color: rebeccapurple;
            font-weight: bold;
            border-bottom: 1px solid rebeccapurple;
        }

        .campdata {
            min-height: 67vh;
        }

        .grp {
            position: relative;
            top: 11px;
        }

        select {
            font-size: 20px;
            color: rebeccapurple;
        }

        #result {
            margin: 0 auto;
            max-width: 1200px;

        }

        .add-camp-button {
            text-align: center;
            margin-top: 15px;
        }

        #camp {
            width: 124px;
            height: 31px;
        }

        .blood-grp {
            min-height: 67vh;
        }

        #result {
            position: relative;
            top: 22px;
        }

        .input-box input[type="submit"] {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>

</head>

<body>
    <?php
    include("header.php");
    ?>
    <form action="camp_add.php" method="post">
    <div class="blood-grp">
        <div class="container">
            <div class="alldata">
                <div class="add-camp-button">
                    <button type='submit' id='res_sub'>Add new camp</button>
                </div>


                <div class="grp">
                    <label for="Blood Group">Camp List:</label>
                </div>
                <div id="result">
                    <?php


                    // include('../../database/connection.php');
                    // $sql = "SELECT * FROM camp_list";
                    // $result = mysqli_query($conn, $sql);


                    include("../../class_function/class_crud.php");
                    $table1 = 'camp_list';
                    $obj1 = $obj->selectfun($table1);



                    $number = 1;
                    $str = "";
                    $str .= "<table><tr>";
                    $str .= "<th>No</th>";
                    $str .= "<th>Trust Name</th>";
                    $str .= "<th> Camp Name</th>";
                    $str .= "<th> Camp Date</th>";
                    $str .= "<th> Action</th>";
                    $str .= "</tr><br>";

                    while ($res = mysqli_fetch_assoc($obj1)) {
                        $str .= "<tr>";
                        $str .= "<td> " . $number . "</td>";
                        $number++;
                        $str .= "<td> " . $res['trust_name'] . "</td>";
                        $str .= "<td> " . $res['camp_name'] . "</td>";
                        $str .= "<td> " . $res['camp_date'] . "</td>";
                        $str .= "<td> " . "<a href='camp_update.php?sno=$res[sno]'>UPDATE</a>" . "  " . "<a href='camp_delete.php?sno=$res[sno]' class='del'>Delete</a>" . "</td>";
                        $str .= "</tr>";
                    }
                    $str .= "</table>";
                    echo $str;
                    ?>
                </div>
            </div>
        </div>
    </div>
    </form>
    <?php
    include("footer.php");
    ?>

</body>

</html>