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
          </div>
        </div>
      </div>
    </header>
    <section id="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="active">You are inside the student dashboard of TDK-LAMBDA Stationary System</li>
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
        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title">Dashboard</h3>
            </div>
            <div class="panel-body">
              <?php
              require_once("dbConnect.php");
              $result = mysqli_query($con,"SELECT * FROM items");
              echo "<table class='table table-bordered table-hover' border='2'>
              <tr>
              <th>Stationary No</th>
              <th>itemname</th>
              <th>Description</th>
              <th>color</th>
              <th>brand</th>
              <th>Total Quantity</th>
              <th>Request</th>
              </tr>";
              if (mysqli_num_rows($result)==0)
              echo "Stationary Database is empty!!!";
              while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['itemno'] . "</td>";
                echo "<td>" . $row['itemname'] . "</td>";
                echo "<td>" . $row['description'] . "</td>";
                echo "<td>" . $row['color'] . "</td>";
                echo "<td>" . $row['brand'] . "</td>";
                echo "<td>" . $row['quant'] . "</td>";
                echo "<td><a href=\"viewbook_stu_insert.php?itemno=$row[itemno]\">Make a Request</a></td>";
                }
              echo "</table>";
              $myusername=$_SESSION['login_user'];
              echo $myusername;
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
