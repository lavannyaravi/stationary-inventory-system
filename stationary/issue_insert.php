<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.jpg">
    <title>Stationary System</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <?php
      include('session_staff.php');
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
            <li class="active"><a href="dashboard_staff.php">Dashboard</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome to Admin Dashboard</a></li>
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
            <li class="active">You are inside the staff dashboard of TDK-LAMBDA Stationary System</li>
          </ol>
      </div>
    </section>
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="dashboard_staff.php" class="list-group-item">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="viewbook_staff.php" class="list-group-item"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View Stationary</a>
              <a href="addnewbook.php" class="list-group-item"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Add New Stationary</a>
              <a href="deletebook.php" class="list-group-item"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Delete Stationary</a>
              <a href="issue.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Stationary Order</a>
              <a href="addnewstudent.php" class="list-group-item"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add a Staff</a>
              <a href="viewstudent.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> View Staff</a>
            </div>
        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Dashboard</h3>
            </div>
             <div class="panel-body">         


            <?php
              $username = $_GET['username'];             
              $itemno = $_GET['itemno'];
 
              //selecting data associated with this particular id
              $result = mysqli_query($con, "SELECT * FROM requests,items WHERE requests.itemno = items.itemno AND requests.status = 'Pending'");
              if($result){}
                else{echo "try";}
              
              while($row = mysqli_fetch_array($result))
              {
                $timedate = $row['timedate'];
                $quant = $row['quant'];
                $quantity = $row['quantity'];
                $status = $row['status'];
              }

              
              //$newtotal = $_POST['newtotal'];
              $newtotal = $quant - $quantity;
              $result = mysqli_query($con, "UPDATE requests,items SET requests.status='Approved', items.quant='$newtotal' WHERE requests.itemno = items.itemno AND items.itemno='$itemno' AND requests.username='$username'");
                header( "refresh:3;url=issue.php" );

            ?>

<!-- 
                <form name="form1" method="post" action="viewbook_stu_insert.php">
                  <table border="0">
                    <tr> 
                      <td>itemname</td>
                      <td><?php echo $itemname;?></td>
                    </tr>
                    <tr> 
                      <td>description</td>
                      <td><?php echo $description;?></td>
                    </tr>
                    <tr> 
                      <td>Brand</td>
                      <td><?php echo $color;?></td>
                    </tr>
                    <tr> 
                      <td>brand</td>
                      <td><?php echo $brand;?></td>
                    </tr>
                    <tr> 
                      <td>Total Quantity</td>
                      <td><?php echo $quant;?></td>
                    </tr>
                    <tr> 
                      <td>Quantity</td>
                      <td><input type="text" name="quantity" value="0"></td>
                    </tr>
                    <tr>
                      <td><input type="hidden" name="itemno" value=<?php echo $_GET['itemno'];?>></td>
                      <td><input type="submit" name="update" value="Update"></td>
                    </tr>
                  </table>
                </form> -->
              </div>
        </div>
        </div>
      </div>
    </section>
  </body>
</html>
