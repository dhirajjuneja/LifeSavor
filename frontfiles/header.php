<head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header-logo {
            background-color: red;
            border-bottom: 4px solid darkred;
            border-left: 4px solid darkred;
            border-right: 4px solid darkred;
        }

        li {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        .nav-item {
            background-color: red;
            border-bottom: 4px solid darkred;
        }

        .nav-list-item {
            display: flex;
        }

        .nav-list-item li a {
            font-family: 'Source Sans Pro', sans-serif;
            line-height: 1.8em;
            display: block;
            text-decoration: none;
            font-weight: normal;
            color: #ffffff;
            padding: 9px 12px;
            font-size: 1em;
            text-transform: capitalize;
            text-shadow: 0 1px 0 #5C2830;
            letter-spacing: 0px;
            border-bottom: 1px solid transparent;
        }

        .nav-list-item li a:hover {
            color: darkred;
            background-color: white;
            border-radius: 4px;
            border-bottom: 1px solid white;

        }
    </style>
</head>

<body>
    <div class="header-logo">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="pic">
                </a>
            </div>
        </div>
    </div>

    <div class="nav-item">
        <div class="container">
            <div class="nav-list">
                <ul class="nav-list-item">
                    <li>
                        <a href="index1.php">Home</a>
                    </li>
                    <li>
                        <a href="aboutus.php">About us</a>
                    </li>
                    <li>
                        <a href="bloodgroup.php">BloodGroups</a>
                    </li>
                    <li>
                        <a href="donorgallery.php">Donor Gallery</a>
                    </li>
                    <li>
                        <a href="donorregistration.php">Donor Registration</a>
                    </li>
                    <li>
                        <a href="registration.php">Trusts Registration</a>
                    </li>
                    <li>
                        <a href="donorlist.php">DonorList</a>
                    </li>
                    <li>
                        <a href="trust_list.php">Trusts List</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="contactus.php">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>