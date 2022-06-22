<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <li class="active"><a href="dashboard_stu.php">Dashboard</a></li>
          
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
            <h1><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Stationary System | Dashboard <small>Manage your stationary here</small></h1>
            <echo>    
          </div>
        </div>
      </div>
    </header>
    <section id="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="active">You are inside the student dashboard of TDK-Lambda Stationary System</li>
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
              <a href="viewbook_stu.php" class="list-group-item"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View Stationary</a>
              <a href="searchbook_stu.php" class="list-group-item "><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search Stationary</a>
              <a href="mybook_stu.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> My Stationary Status</a>
            </div>
        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-Description">Dashboard</h3>
            </div>
            <div class="panel-body">
                            <div class="panel-heading main-color-bg">


              <h4 class="panel-Description">Pending</h4>
            </div>
            <?php

              require_once("dbConnect.php");
              $result = mysqli_query($con,"SELECT * FROM requests,items WHERE requests.itemno = items.itemno AND requests.status = 'Pending'");
              echo "<table class='table table-bordered table-hover' border='2'>

              <tr>
              <th>Username</th>
              <th>Order Date</th>
              <th>Available Unit</th>
              <th>Request Quantity</th>
              <th>Status</th>
              <th>Action</th>
              </tr>";
              if (mysqli_num_rows($result)==0)
              echo "";
              while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['timedate'] . "</td>";
                echo "<td>" . $row['quant'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";

                }
              echo "</table>";
             
              ?>
              


              <div class="panel-heading main-color-bg">
              <h4 class="panel-Description">Approved</h4>
              </div>
              <?php
              require_once("dbConnect.php");
              $result = mysqli_query($con,"SELECT * FROM requests,items WHERE requests.itemno = items.itemno AND requests.status = 'Approved'");
              echo "<table class='table table-bordered table-hover' border='2'>
              <tr>
              <th>Username</th>
              <th>Order Date</th>
              <th>Available Unit</th>
              <th>Request Quantity</th>
              <th>Status</th>
              </tr>";
              if (mysqli_num_rows($result)==0)
              echo "";
              while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['timedate'] . "</td>";
                echo "<td>" . $row['quant'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                }
              echo "</table>";
              ?>

              <div class="panel-heading main-color-bg">
              <h4 class="panel-Description">Rejected</h4>
              </div>
              <?php
              require_once("dbConnect.php");
              $result = mysqli_query($con,"SELECT * FROM requests,items WHERE requests.itemno = items.itemno AND requests.status = 'Rejected'");
              echo "<table class='table table-bordered table-hover' border='2'>
              <tr>
              <th>Username</th>
              <th>Order Date</th>
              <th>Available Unit</th>
              <th>Request Quantity</th>
              <th>Status</th>
              </tr>";
              if (mysqli_num_rows($result)==0)
              echo "";
              while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['timedate'] . "</td>";
                echo "<td>" . $row['quant'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                }
              echo "</table>";
              mysqli_close($con);
              ?>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
  </body>
</html>
