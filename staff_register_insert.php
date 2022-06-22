
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="images/favicon.jpg">


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
            <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span>     FSKKP'S Stationary System</h1>
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
              <?php             
              require_once("dbConnect.php");
              $admin_id=$_POST['staffid'];
              $admin_name=$_POST['staffname'];
              $department=$_POST['department'];
              $admin_email=$_POST['staffmail'];
              $admin_mobile=$_POST['staffmobile'];
              $admin_user=$_POST['username'];
              $admin_password=$_POST['admin_password1'];
              $query="INSERT INTO login_admin VALUES (DEFAULT,'$admin_name','$department','$admin_email', '$admin_mobile', '$admin_user','$admin_password');";
              $result=mysqli_query($con,$query);
              if ($result)
              {
              echo "New Admin Added Successfully!";
              header( "refresh:3;url=home.html" );
              }
              else {
                echo "Failed:Database has encountered an error while uploading!!!";
                header( "refresh:3;url=home.html" );
              }
              mysqli_close($con);
              ?>
              </div>
            </div>
        </div>

        <br><br><br>
        <div class="col-md-4 col-md-offset-4">
            <p> &nbsp &nbsp &nbsp &copy; 2017  All Rights Reserved |TDK-Lamda </p>
          </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
