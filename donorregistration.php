<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <style> button#res_sub {
      margin: 5% 37%;
      padding: 1% 7%;
    background-color: #ad00ff;
  }</style>
  <link rel="stylesheet" href="css/donorreg.css">
</head>

<body>
  <?php
  include("frontfiles/header.php");
  ?>
  <div class="form">
    <section class="container">
      <header> Donor Registration Form</header>
      <form class="form">
        <div class="input-box">
          <label> Name</label>
          <input type="text" id="res_name" placeholder="Enter full name" required />
        </div>

        <div class="input-box">
          <label>Email </label>
          <input type="text" id="res_email" placeholder="Enter email address" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" id="res_no" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" id="res_bdate" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">

            <div class="gender">
              <input type="radio" id="check-male" name="gender" value="male" />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" value="female" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" value="other" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>

        <div class="input-box address">
          <label>Address</label>
          <input type="text" id="res_addr" placeholder="Enter street address" required />

          <div class="column">
            <div class="select-box">
              <select id="res_grp">
                <option hidden>Blood Group</option>
                <option>O+</option>
                <option>O</option>
                <option>A-</option>
                <option>A+</option>
                <option>AB+</option>
                <option>AB-</option>
                <option>B-</option>
                <option>B+</option>
              </select>
            </div>



            <div class="select-box">
              <select id="trust_grp">
                <option hidden>Select Trust</option>
      
              <?php
               
                include("class_function/class_crud.php");

                $table1 = "trust_registattion";
                $var = " status=1";
                $result = $obj->selectfun($table1, $var);
                $data = 
                $t_name="";
                while($data=mysqli_fetch_assoc($result)){
                    $t_name.= "<option value=".$data['t_id'].">".$data['t_name']."</option>";
                }
                echo $t_name;
              ?>
              </select>
            </div>

            
            <input type="text" id="res_city" placeholder="Enter your city" required />
          </div>
          <div class="column">
            <input type="text" id="res_weight" placeholder="Enter your Weight" required />
            <input type="number" id="res_temp" placeholder="Enter your Temperature" required />
          </div>
            <input type="number" id="res_pass" placeholder="Enter your Password" required />
          </div>
        </div>
        <button class="form" type="button" id="res_sub">Submit</button>
      </form>
      <div id="result"></div>
    </section>
  </div>

  <?php
  include("frontfiles/footer.php");
  ?>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function () {
    $('#res_sub').click(function (e) {
      e.preventDefault();
      var name = $('#res_name').val();
      var email = $('#res_email').val();
      var number = $('#res_no').val();
      var bdate = $('#res_bdate').val();
      var gender = $("input[type='radio']:checked").val();
      var address = $('#res_addr').val();
      var grp = $('#res_grp').val();
      var city = $('#res_city').val();
      var weight = $('#res_weight').val();
      var temp = $('#res_temp').val();
      var trust_grp = $('#trust_grp').val();
      var res_pass = $('#res_pass').val();

      if (trust_grp =='') {
          alert('Please select a trust.');
          return;
      }
      
      $.ajax({
        type: "post",
        url: "php/donorregpage.php",
        data: {
          'name': name,
          'email': email,
          'number': number,
          'bdate': bdate,
          'gender': gender,
          'address': address,
          'grp': grp,
          'city': city,
          'weight': weight,
          'temp': temp,
          'trust_grp': trust_grp,
          'pass':res_pass
        },
        success: function (data) {
          $('#result').html(data);
        }
      });
    });
  });
</script>

</html>