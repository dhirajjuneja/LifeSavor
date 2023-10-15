<?php
// session_start();
// $data = $_SESSION['username'];
// if ($data == true) {

// } else {
//     header('location:../index.php');
// }

?>
<!doctype html>
<html>

<head>
    <title> This is the connected page</title>
    <!-- <link rel="stylesheet" href="../css/result.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .section-1 {
            min-width: 40%;
        }

        .main-section {
            display: flex;
            padding-top: 96px;
        }

        .add-class {
            text-align: center;
            min-height: 100%;
            display: flex;
            flex-direction: column;
            padding-left: 60px;
        }

        .add-class a {
            padding-top: 30px;
            font-size: 24px;
            text-decoration: none;
            color: darkred;
        }

        .section {
            height: 76vh;
            background-color: white;
        }

        .section-2-data p {
            padding-top: 15px;
            font-family: 'Source Sans Pro', sans-serif;
        }
    </style>

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
                        <a href="addbloodgroup.php">Add Blood Group</a><br>
                        <a href="checkstatus.php">Check User status</a><br><br>
                        <a href="check_trust_status.php">Check Trust status</a><br><br>
                        <a href="camp_main.php">Check Camp status</a><br><br>
                    </div>
                </div>
                <div class="section-2">
                    <div class="section-2-data">
                        <img src="../images/welcome.png" alt="none">
                        <p>Blood is universally recognized as the most precious element that sustains life. It saves
                            innumerable lives across the world in a variety of conditions. The need for blood is great -
                            on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29
                            million units of blood components are transfused every year. Donate Blood Despite the
                            increase in the number of donors, blood remains in short supply during emergencies, mainly
                            attributed to the lack of information and accessibility. We positively believe this tool can
                            overcome most of these challenges by effectively connecting the blood donors with the blood
                            recipients. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>