<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.jpg">
    <Description></Description>
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
            <li class="active"><a href="dashboard_stu.php">Dashboard</a></li>
            <li><a href="help_stu.php">Help</a></li>
            <li><a href="contact_stu.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">WeItemNamelcome to Staff Dashboard</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Stationary System | Dashboard <small>Manage your stationary here</small></h1>
          </div>
        </div>
      </div>
    </header>
    <section id="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="active">You are inside the student dashboard of FSKKP'S Stationary System</li>
          </ol>
      </div>
    </section>
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="dashboard_stu.php" class="list-group-item">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="viewbook_stu.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View Stationary</a>
              <a href="searchbook_stu.php" class="list-group-item "><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search Stationary</a>
              <a href="mybook_stu.php" class="list-group-item "><span class="glyphicon glyphicon-book" aria-hidden="true"></span> My Stationary Status</a>
            </div>
/ 

        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-Description">Dashboard</h3>
            </div>
            <div class="panel-body">         
            <?php             
              require_once("dbConnect.php");
              if(isset($_POST['update']))
                {

                  $itemno=$_POST['itemno'];
                  $ItemName = $_POST['ItemName'];
                  $Description = $_POST['Description'];
                  $brand = $_POST['brand'];
                  $Colour = $_POST['Colour'];

                  $myusername=$_SESSION['login_user'];

                  $result = mysqli_query($con,"SELECT staff_name FROM login_staff where staff_user='$myusername'");
                  $row = mysqli_fetch_array($result);
                  $username=$row['staff_name']; 

                  $result = mysqli_query($con, "SELECT quant FROM items WHERE itemno='$itemno'");
                  $row = mysqli_fetch_array($result);
                  $quant = $row['quant'];
                  $date = date('Y-m-d H:i:s');

                  $quantity = $_POST['quantity'];


                  if($quant<= $quantity){echo "YOUR REQUEST EXCEEDS FROM THE AMOUNT OF QUANTITY";}
                  else{

                  $quant = $quant - $quantity;
                  
           

                  $result = mysqli_query($con, "INSERT INTO requests (itemno,username,quantity,status,timedate) VALUES ('$itemno','$myusername','$quantity','Pending','$date')");


                  $result = mysqli_query($con, "UPDATE items SET quant='$quant' WHERE itemno='$itemno'");
                  

                }
                  

                   $result = mysqli_query($con, "SELECT * FROM items WHERE itemno='$itemno'");

              
              while($row = mysqli_fetch_array($result))
              {
                $ItemName = $row['ItemName'];
                $Description = $row['Description'];
                $brand = $row['brand'];
                $Colour = $row['Colour'];
                $quant = $row['quant'];

              }
                  // header("Location: viewbook_stu.php");


                }
            ?>

            <?php             
              $itemno = $_GET['itemno'];
              
              //selecting data associated with this particular id
              $result = mysqli_query($con, "SELECT * FROM items WHERE itemno='$itemno'");

              
              while($row = mysqli_fetch_array($result))
              {
                $ItemName = $row['ItemName'];
                $Description = $row['Description'];
                $brand = $row['brand'];
                $Colour = $row['Colour'];
                $quant = $row['quant'];

              }


            ?>


                <form name="form1" method="post" action="viewbook_stu_insert.php">
                  <table border="0">
                    <tr> 
                      <td>ItemName</td>
                      <td><?php echo $ItemName;?></td>
                    </tr>
                    <tr> 
                      <td>Description</td>
                      <td><?php echo $Description;?></td>
                    </tr>
                    <tr> 
                      <td>Brand</td>
                      <td><?php echo $brand;?></td>
                    </tr>
                    <tr> 
                      <td>Colour</td>
                      <td><?php echo $Colour;?></td>
                    </tr>
                    <tr> 
                      <td>Total Quantity</td>
                      <td><?php echo $quant;?></td>
                    </tr>
                    <tr> 
                      <td>Quantity</td>
                      <td><input type="text" name="quantity" value=<?php echo $_GET['quantity'];?>></td>
                    </tr>
                    <tr>
                      <td><input type="hidden" name="itemno" value=<?php echo $_GET['itemno'];?>></td>
                      <td><input type="submit" name="update" value="Update"></td>
                    </tr>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
