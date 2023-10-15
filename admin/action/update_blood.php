<?php

include("../../class_function/class_crud.php");

$id = $_GET['sno'];

$table1 = "bloodgroup_table";
$var = " sno='$id'";

$res = $obj->selectfun($table1, $var);
$result = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update page</title>
    <link rel="stylesheet" href="../css/update_blood.css">
</head>

<body>
    <?php
    include("header.php");
    ?>
    <div class="container">
        <div class="main-form">
            <h1>Update form</h1>
            <form id="upform" method="post">

                <label for="blood">BloodGroup</label>
                <input type="text" id="blood-grp" name="blood-grp" value="<?php echo $result['bloodgroup']; ?>"><br><br>

                <label for="status">Status</label>
                <input type="text" id="status" name="status" value="<?php echo $result['status']; ?>">
                <br><br>

                <input type="submit" name="update" value="update"><br><br>

            </form>
        </div>
    </div>
<?php
include("footer.php");
?>
</body>

</html>
<?php

if (isset($_POST["update"])) {
    $blood = $_POST['blood-grp'];
    $status = $_POST['status'];

    $table1 = "bloodgroup_table";
    $var = " bloodgroup='$blood' ,status='$status' WHERE sno='$id'";
    $data = $obj->updatefun($table1, $var);

    if ($data) {
        header('Location:addbloodgroup.php');
    } else {
        echo "not inserted";
    }
}
?>