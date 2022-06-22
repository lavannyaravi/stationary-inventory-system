

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
    <?php
      include('session.php');
    ?>
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Stationary System</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="dashboard_stu.php">Dashboard</a></li>
            <li class="active"><a href="help.php">Change Password</a></li>
            <li><a href="contact_stu.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome to Staff Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Stationary System |  <small>Privacy always priorities</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="active">You are inside the Change Password tab of TDK-Lamda Stationary System</li>
          </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="help.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Change password
              </a>
            </div>


        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-Description">Change Password</h3>
            </div>
            <div class="panel-body">
              <?php             
              require_once("dbConnect.php");
              if(isset($_POST['update']))
                {

                  $password=$_POST['password'];


                  $myusername=$_SESSION['login_user'];

                  $result = mysqli_query($con,"SELECT * FROM login_staff where staff_user='$myusername'");

                  $result = mysqli_query($con, "UPDATE login_staff SET staff_password='$password' WHERE staff_user='$myusername'");
                  
                  echo "Password has been updated";
                 
                }
            ?>

            <?php             
              $itemno = $_GET['itemno'];
              
              //selecting data associated with this particular id
              $myusername=$_SESSION['login_user'];

              $result = mysqli_query($con,"SELECT * FROM login_staff where staff_user='$myusername'");

              
              while($row = mysqli_fetch_array($result))
              {
                $staff_name = $row['staff_name'];
                $staff_password = $row['staff_password'];

              }

            ?>
              <h3> Welcome to the HelpDesk of TDK-Lamda Stationary System. </h3>
              <br>
              <form name="form1" method="post" action="help_stu.php">
                  <table border="0">
                    <tr> 
                      <td>Username</td>
                      <td>: <?php echo $staff_name;?></td>
                    </tr>
                    <tr> 
                      <td>Current Password</td>
                      <td>: <?php echo $staff_password;?></td>
                    </tr>
                    <tr> 
                      <td>New Password</td>
                      <td><input type="text" name="password" value=<?php echo $_GET['password'];?>></td>
                    </tr>
                    <tr>

                      <td><input type="submit" name="update" value="Update"></td>
                    </tr>
                  </table>
                </form>
              <br><br><br><br><br><br><br>
              <h5 style='color:red;'>*Make Sure You Logout your session after use</h5>
            </div>
          </div>

        </div>
        </div>
      </div>
    </section>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
