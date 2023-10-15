<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor List</title>
   <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <?php
    include("frontfiles/header.php");
    ?>

    <div class="header">
        <div class="container">
            <div class="logo">
                <img src="images/contact.png" alt="" id="con">
            </div>
            <div class="form">
                <form action="">
                    <label for="name">Name</label><br>
                    <input type="text" id="con-name" placeholder="enter the name"><br>

                    <label for="email">Email</label><br>
                    <input type="text" id="con-email"placeholder="enter the email"><br>

                    <label for="number">Number</label><br>
                    <input type="number" id="con-num"placeholder="enter the number"><br>

                    <div class="message">
                        <label for="subject">Subject</label><br>
                        <textarea id="subject" name="subject" rows="5" cols="30">
                    </textarea><br>
                    </div>

                    <button type="button" id="click">Send Us</button>
                    <div id="result"></div>
                </form>
            </div>
        </div>
    </div>

    <?php
    include("frontfiles/footer.php");
    ?>
</body>
<script src="js/jquery-3.7.0.min.js"></script>
<script src="js/contactus.js"></script>
</html>