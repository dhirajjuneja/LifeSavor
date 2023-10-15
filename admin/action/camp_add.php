<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADD NEW CAMP</title>
  <style>form {
    margin-top: 39px;
}

label {
    font-size: 23px;
    color: gray;
}

input[type="text"],
select {
    width: 214px;
    height: 52px;
    text-align: center;
    margin-top: 18px;
    margin-bottom: 11px;
    border-radius: 7px;
}

input[type="date"],
select {
    width: 214px;
    height: 52px;
    text-align: center;
    margin-top: 18px;
    margin-bottom: 11px;
    border-radius: 7px;
}

#con {
    margin-top: 26px;
    border: 5px solid red;
    border-radius: 25px;
}

.message {
    position: relative;
    left: 36%;
    bottom: 18rem;
}

.form {
    margin-bottom: 10%;
}

textarea {
    height: 237px;
    margin-top: 18px;
    width: 284px;
    border-radius: 9px;
}
.camp-sub input[type="submit"] {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        </style>
  <script src="../js/jquery-3.7.0.min.js"></script>
 
  <script>
    $(document).ready(function() {
      $("#camp_sub").click(function(e) {
        e.preventDefault();
        var t_name = $('#trust_name').val();
        var c_name = $('#camp_name').val();
        var date = $('#camp_date').val();
        if (c_name == "" || date== "" ) {
          alert("Please enter the above data.");
          return false;
        }
        
        $.ajax({
          type: "post",
          url: "camp_add_action.php",
          data: {
            t_name: t_name,
            c_name: c_name,
            date: date 
          },
          success: function(data) {

            $('#result').html(data);
          }
        });
      });
    });
  </script>
</head>

<body>
  <?php
  include("header.php");
  ?>
  <div class="form">
  <section class="campdata">
        <div class="container">
            <form class="form">
                <div class="input-box">
                    <form class="form" method="POST">
                        <label>Trust Name</label>
                        <select id="trust_name">

                            <?php

                            // include('../../database/connection.php');
                            // $sql = " SELECT * FROM trust_registattion";
                            // $result = mysqli_query($conn, $sql);
                            // $str = "";




                            include("../../class_function/class_crud.php");
                            $table1 = "trust_registattion";
                            $result = $obj->selectfun($table1);
                           






                            while ($res = mysqli_fetch_assoc($result)) {
                                $str .= "<option value=" . $res['t_name'] . ">" . $res['t_name'] . "</option>";
                            }
                            echo $str;
                            ?>
                        </select>
                </div>
              
                <div class="input-box address">
                    <label>CampName</label>
                    <input type="text" id="camp_name" name="camp_name"  />
                </div>

                <div class="input-box">
                    <label>Camp Date</label>
                    <input type="date" id="camp_date" name="camp_date" >
                </div>
                <div class="camp-sub">
                    <input type="submit" id="camp_sub" name="update" value="submit" />
                </div>
                <p id="result"></p>
            </form>
    </section>
  </div>
  <?php
  include("footer.php");
  ?>
</body>

</html>
