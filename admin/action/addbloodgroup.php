<!doctype html>
<html>

<head>
    <title> This is the connected page</title>
    <link rel="stylesheet" href="../css/addbloodgrp.css">
</head>

<body>
    <?php
    include("header.php");
    ?>

    <div class="section">
        <div class="container">
            <div class="main-section">
                <div class="section-1">
                    <div class="add-class">
                        <a >Manage Blood Group</a>
                    </div>
                </div>

                <div class="main-section2">
                    <div class="section-2-1">
                        <div class="data">
                            <?php
                         include("../../class_function/class_crud.php");

                            $table1 = "bloodgroup_table";

                            $result = $obj->selectfun($table1);

                            $str = "";
                            $number=1;
                            $str .= "<table class='content-table'><thead><tr>
                                        <th>Sno</th>
                                        <th>Bloodgroup</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        </thead></tr>";
         
                            while ($res = mysqli_fetch_assoc($result)) {
                                $str .= "<tbody><tr>";

                                $str.="<td> ".$number."</td>";
                                $number++;
                                
                                $str .= "<td> " . $res['bloodgroup'] . "</td>";

                                $str .= "<td> " . $res['status'] . "</td>";

                                $str .= "<td> " . "<a href='update_blood.php?sno=$res[sno]'>Edit</a>" . "/" . "<a href='delete_blood.php?sno=$res[sno]' class='del'>Delete</a>" . "</td>";

                                $str .= "</tr></tbody>";
                            }
                            echo $str;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <?php
   include("footer.php");
   ?>
</body>

<script src="../js/jquery-3.7.0.min.js"></script>
<script src="../js/blood.js"></script>

</html>