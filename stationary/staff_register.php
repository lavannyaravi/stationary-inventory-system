
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="images/favicon.jpg">

    <title>Stationary System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/figure.css" rel="stylesheet">
    
    <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("p1").value;
        var confirmPassword = document.getElementById("p2").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
<?php
      include('session_staff.php');
    ?>
  </head>
  <body>


    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span>     TDK-LAMBDA Stationary System</h1>
          </div>
        </div>
      </div>
    </header>
<br><br><br>


        <div class="container">
          <div class="row">
            <div class="wrap-login col-md-4 col-md-offset-4">
            <br>
              <h2 style="margin-bottom: 30px;"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>    Admin&nbsp    |&nbsp Registration</h2>
              <form method="post" action="staff_register_insert.php" onsubmit="return Validate()">
                <div class="form-group">
                  <label for="">Admin ID</label>
                  <input type="text" class="form-control" id="" placeholder="Admin ID" name="staffid">
                </div>
                <div class="form-group">
                  <label for="">Admin Name</label>
                  <input type="text" class="form-control" id="" placeholder="Admin Name" name="staffname" required>
                </div>
                <div class="form-group">
                    <label for="">Department</label>
                    <select id="" name="department" class="form-control" required>
                      <option value="" selected=""></option>
                      <option value="MCA" >MCA</option>
                      <option value="MBA" >MBA</option>
                      <option value="M Arch" >M Arch</option>
                    </select>
                  </div>
                  <div class="form-group">
                  <label for="">E mail</label>
                  <input type="email" class="form-control" id="" placeholder="Your E-mail" name="staffmail" required>
                </div>
                <div class="form-group">
                  <label for="">Admin Mobile</label>
                  <input type="text" class="form-control" id="" placeholder="Mobile Number" name="staffmobile" required>
                </div>
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" class="form-control" id="" placeholder="User Name" name="username" required>
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" class="form-control" id="p1" placeholder="Password" name="admin_password1" required>
                </div>
                <div class="form-group">
                  <label for="">Confirm Password</label>
                  <input type="password" class="form-control" id="p2" placeholder="Password" name="admin_password2" required>
                </div>
                
                <button type="submit" class="btn btn-default main-color-bg btn-login col-md-4 col-md-offset-4">Register</button>
              </form>

              </div>
            </div>
        </div>

        <br><br><br>
        <div class="col-md-4 col-md-offset-4">
            <p> &nbsp &nbsp &nbsp &copy; 2017  All Rights Reserved |TDK-LAMBDA</p>
          </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
