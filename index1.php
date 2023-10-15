<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page </title>
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
    <?php
    include("frontfiles/header.php");
    ?>
    <div class="main-data-section">
        <div class="container">
            <div class="content-1">
                
                <h2>
                    <?php
                    if (!empty($_SESSION["name"])) {
                        echo "WELCOME  :  " . $_SESSION["name"];
                        ?>
                        <a href="logout.php">Logout</a>
                        <?php
                    }
                    ?>
                </h2>
                
                <img src="images/welcome.png" alt="none">
                <p>
                    Blood is universally recognized as the most precious element that sustains life. It saves
                    innumerable lives across the world in a variety of conditions. The need for blood is great - on any
                    given day, approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of
                    blood components are transfused every year. Donate Blood Despite the increase in the number of
                    donors, blood remains in short supply during emergencies, mainly attributed to the lack of
                    information and accessibility. We positively believe this tool can overcome most of these challenges
                    by effectively connecting the blood donors with the blood recipients.
                </p>
            </div>
        </div>
    </div>


    <div class="slider">
        <div class="container">
            <div class="photo">
                <div class="photo-collage">
                    <img src="images/slider1.jpg" alt="1">
                    <img src="images/slider2.jpg" alt="2">
                    <img src="images/slider3.jpg" alt="3">
                    <img src="images/slider4.jpg" alt="4">
                </div>

            </div>
        </div>
    </div>
    <div class="ribben">
        <div class="container">
            <div class="rib"></div>
        </div>
    </div>

    <div class="data">
        <div class="container">
            <div class="data-main-1">
                <h3>Blood bank:</h3>
                <p>We welcome you to in our WebSite. If you are a donor , We appreciate you signing up online as a
                    Donor. If you need blood we are happy to serve you. This blood donor list is hosted by
                    www.lifesaver.com on behalf of "Life Saver Blood Bank" as a public service without any profit
                    motive.This is a free service. While the Organisers have taken all steps to obtain accurate and
                    up-to-date information of potential blood donors, the Organisers and ICM Computers do not guarantee
                    accuracy of the information contained herein or the suitability of the persons listed as any
                    liability for direct or consequential damage to any person using this blood donor list including
                    loss of life or damage due to infection of any nature arising out of blood transfusion from persons
                    whose names have been listed in this website. We request donors to update contact details regularly.
                </p>
            </div>
        </div>
    </div>

    <?php
    include("frontfiles/footer.php");
    ?>


</body>

</html>