<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trust List</title>
    <link rel="stylesheet" href="css/donorlist.css">
    <style>
        .box_class {
            border: 3px solid red;
            padding: 19px;
            text-align: center;
            width: 200px;
            height: 200px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 249px;
            margin-top: 27px;
            margin-left: 39px;
        }

        .box_class img {
            height: 164px;
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
    } else {
        $str = '<div class="row">';

        while ($res = mysqli_fetch_assoc($result)) {
            $imagePath = 'uploads/' . $res['t_logo'];
            $str .= '<div class = "box_class">
                <a href="trust_detail_list.php?id=' . $res['t_id'] . '">
                    <img src="' . $imagePath . '" alt="Logo">
                    <div class="name">' . $res['t_name'] . '</div>
                </a>
            </div>';
        }

        $str .= '</div>';
        echo $str;

    }
    ?>
    <?php
    include("frontfiles/footer.php");
    ?>
</body>
<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/donorlist.js"></script>

</html>