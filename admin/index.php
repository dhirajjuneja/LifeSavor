<!Doctype html>
<html>

<head>
    <title>
        This is the login page
    </title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="js/login_admin.js"></script>

</head>

<body>
    <div class="mainlogin">
        <h1>Login page</h1>
        <form method="POST">

            <label for="name">UserName</label>
            <input type="text" id="name" name="name"><br><br>

            <label for="password">Password</label>
            <input type="password" id="pass" name="pass" required><br><br>

            <button type="button" id="butt">Submit</button>&nbsp;
            <button type="button" id="can">Cancel</button>

        </form>
        <div id="result"></div>
    </div>
    
</body>

</html>