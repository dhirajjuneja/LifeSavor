<?php
// session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        This is the login page
    </title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/login.js"></script>
</head>

<body>
    <?php
    include("frontfiles/header.php");
    ?>
    <div class="mainlogin">
        <h1>Login page</h1>
        <form method="post">

            <label for="name">UserName</label>
            <input type="text" id="name" name="username"><br><br>

            <label for="password">Password</label>
            <input type="password" id="pass" name="userpassword" required><br><br>

            <button type="button" id="butt">submit</button>&nbsp;
            <button type="button" id="can">Cancel</button>

        </form>
        <div id="result"></div>
    </div>
   

</body>

</html>