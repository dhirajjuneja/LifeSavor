<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update page</title>
    <style>
        .campdata {
            min-height: 69vh;
        }

        * {
            overflow-x: hidden;
        }

        .campdata {
            min-height: 69vh;
        }

        .container .form {
            margin-top: 30px;
        }


        .form .input-box {
            width: 40%;
            margin-top: 20px;
        }

        .camp-sub {
            margin-top: 18px;
            margin-left: 141px;
        }

        #camp_sub {
            width: 171px;
            height: 38px;
        }

        #trust_name {
            width: 198px;
            height: 32px;
        }

        #update {
            width: 99px;
            height: 36px;
            font-size: 18px;
            color: red;
            border-radius: 8px;
        }

        .input-box label {
            color: #333;
        }

        .form :where(.input-box input, .select-box) {
            position: relative;
            height: 50px;
            width: 83%;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 8px;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 0 15px;
        }

        .input-box input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .form .column {
            display: flex;
            column-gap: 15px;
        }
    </style>

</head>

<body>
    <?php
    include("header.php");
    ?>
    <section class="campdata">
        <div class="container">
            <form class="form" method="POST" >
                <div class="input-box">
                    <label>Trust Name</label>
                    <select id="trust_name" name="trust_name">
                        <?php
                        include('C:/xampp/htdocs/bloodbankproject/bloodbankproject/database/connection.php');

                        $sql = "SELECT * FROM trust_registattion";

                        $result = mysqli_query($conn, $sql);

                        $str = "";

                        while ($res = mysqli_fetch_assoc($result)) {

                            $str .= "<option value=" . $res['t_name'] . ">" . $res['t_name'] . "</option>";
                        }
                        echo $str;
                        ?>
                    </select>
                </div>

                <?php

        include("../../class_function/class_crud.php");

                $id = $_GET['sno'];

                $table1 = "camp_list";
                $var = " sno='$id'";

                $res = $obj->selectfun($table1, $var);

                $result = mysqli_fetch_assoc($res);
                ?>

                <div class="input-box address">
                    <label>CampName</label>
                    <input type="text" id="camp_name" name="camp_name" value="<?php echo $result['camp_name']; ?>"
                        required />
                </div>

                <div class="input-box">
                    <label>Camp Date</label>
                    <input type="text" id="camp_date" name="camp_date" value="<?php echo $result['camp_date']; ?>"
                        required />
                </div>

                <div class="camp-sub">
                    <input type="submit" id="update" name="update" value="submit" />
                </div>

            </form>
        </div>
    </section>

    <?php
    include("footer.php");
    ?>

</body>
</html>

<?php


if (isset($_POST["update"])) {
    $trustname = $_POST['trust_name'];
    $campname = $_POST['camp_name'];
    $camp_date = $_POST['camp_date'];

    $table1 = "camp_list";

    $var = " trust_name = '$trustname', camp_name = '$campname', camp_date = '$camp_date' WHERE sno = '$id'";

    $data = $obj->updatefun($table1, $var);

    if ($data) {
        header('Location:camp_main.php');
    } else {
        echo "not inserted";
    }
}
?>