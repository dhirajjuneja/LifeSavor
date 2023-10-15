<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="css/donorreg.css">
  <style>
    div#trust {
      margin-top: 24px;
    }

    div#certi_file {
      margin-top: 20px;
    }

   
  </style>
  <script src="js/jquery-3.7.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $("#certi_file").hide();
      $("input[type='radio']").click(function () {
        var store = $(this).val();
        if (store == 'yes') {
          $("#certi_file").show();
        } else {
          $("#certi_file").hide();
        }
      });
    });
    $(document).ready(function () {
      $("#res_sub").click(function (e) {
        e.preventDefault();
        var name = $('#res_name').val().trim();
        var addr = $('#res_addr').val().trim();
        var no = $('#res_no').val().trim();
        var Registration_id = $('#Registration_id').val().trim();
        var email = $('#res_email').val().trim();
        var certificate = $('#certificate').val().trim();
        var trust_logo = $('#trust_logo').prop('files')[0];
        var authorities_name = $('#authorities_name').val().trim();
        var password = $('#password').val().trim();

        if (name === "") {
          alert("Please enter your name.");
          return false;
        }

        if (addr === "") {
          alert("Please enter your address.");
          return false;
        }

        if (email === "") {
          alert("Please enter your email address.");
          return false;
        }

        if (!isValidEmail(email)) {
          alert("Please enter a valid email address.");
          return false;
        }

        if (no === "") {
          alert("Please enter your phone number.");
          return false;
        }

        
        var formData = new FormData();
        formData.append('name', name);
        formData.append('addr', addr);
        formData.append('email', email);
        formData.append('no', no);
        formData.append('Registration_id', Registration_id);
        formData.append('certificate', certificate);
        formData.append('trust_logo', trust_logo);
        formData.append('authorities_name', authorities_name);
        formData.append('password', password);

        $.ajax({
          type: "POST",
          url: "trust_action.php",
          data: formData,
          processData: false,
          contentType: false,
          success: function (data) {

            $('#result').html(data);
          }
        });
      });
    });

    function isValidEmail(email) {
      var emailRegex = /\S+@\S+\.\S+/;
      return emailRegex.test(email);
    }

  </script>
</head>

<body>

  <?php include("C:/xampp/htdocs/bloodbankproject/bloodbankproject/frontfiles/header.php"); ?>


  <div class="form">
    <section class="container">
      <header>Trusts Registration Form</header>
      <form class="form">
        <div class="input-box">
          <label>Name</label>
          <input type="text" id="res_name" placeholder="Enter full name" required />
        </div>

        <div class="input-box address">
          <label>Address</label>
          <input type="text" id="res_addr" placeholder="Enter address" required />
        </div>

        <div class="input-box">
          <label>Email</label>
          <input type="text" id="res_email" placeholder="Enter email address" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" id="res_no" placeholder="Enter phone number" required />
          </div>
        </div>
        <div class="column">
          <div class="input-box">
            <label>Registration ID</label>
            <input type="text" id="Registration_id" placeholder="Enter Registration ID" required />
          </div>
        </div>

        <div class="input-box">
          <label>Certificate</label>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-yes" name="certificate" value="yes" />
              <label for="check-yes">Yes</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-no" name="certificate" value="no" />
              <label for="check-no">No</label>
            </div>
          </div>
        </div>

        <div id="certi_file">
          <label>Certificate</label>
          <input type="file" id="certificate" />
        </div>
        <div id="trust">
          <label>Trust Logo</label>
          <input type="file" id="trust_logo" />
        </div>

        <div class="input-box">
          <label>Authorities Name</label>
          <input type="text" id="authorities_name" placeholder="Enter authorities name" />
        </div>
        <div class="input-box">
          <label>password</label>
          <input type="text" id="password" placeholder="Enter password" />
        </div>

        <button type="button" id="res_sub">Submit</button>
      </form>
      <div id="result"></div>
    </section>
  </div>

  <?php include("frontfiles/footer.php"); ?>
</body>

</html>