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
            <li class="active">You are inside the staff dashboard of TDK-Lamda Stationary System</li>
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
              <h3 class="panel-Description">Dashboard</h3>
            </div>
            <div class="panel-body">
              <form enctype="multipart/form-data" method="post" action="issue_now_confirm.php">
                  <div class="form-group">
                    <label for="itemno">Stationary Number</label>
                      <select id="element_1" name="itemno" class="form-control" required>
                        <option value="" selected="selected"></option>
                            <?php
                            $conn = new mysqli('127.0.0.1', 'root', '', 'stationary')
                            or die ('Cannot connect to db');
                            $result = $conn->query("select itemno from items where issued=0");
                                while ($row = $result->fetch_assoc()) 
                                  {
                                  unset($booknum);
                                  $booknum = $row['itemno'];
                                  echo '<option value="'.$booknum.'">'.$booknum.'</option>';
                                  }
                              echo "</select>";
                              mysqli_close($conn);
                              ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="bkDescription">Description</label>
                      <select id="element_1" name="Description" class="form-control" required>
                        <option value="" selected="selected"></option>
                            <?php
                            $conn = new mysqli('127.0.0.1', 'root', '', 'stationary')
                            or die ('Cannot connect to db');
                            $result = $conn->query("select Description from items where issued=0");
                                while ($row = $result->fetch_assoc()) 
                                  {
                                  unset($Description);
                                  $Description = $row['Description'];
                                  echo '<option value="'.$Description.'">'.$Description.'</option>';
                                  }
                              echo "</select>";
                              mysqli_close($conn);
                              ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="regnum">Register Number</label>
                      <select id="element_1" name="empno" class="form-control" required>
                        <option value="" selected="selected"></option>
                            <?php
                            $conn = new mysqli('127.0.0.1', 'root', '', 'stationary')
                            or die ('Cannot connect to db');
                            $result = $conn->query("select empno from login_staff");
                                while ($row = $result->fetch_assoc()) 
                                  {
                                  unset($empno);
                                  $empno = $row['empno'];
                                  echo '<option value="'.$empno.'">'.$empno.'</option>';
                                  }
                              echo "</select>";
                              mysqli_close($conn);
                              ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="stud_name">Staff Name</label>
                      <select id="element_1" name="staff_name" class="form-control" required>
                        <option value="" selected="selected"></option>
                            <?php
                            $conn = new mysqli('127.0.0.1', 'root', '', 'stationary')
                            or die ('Cannot connect to db');
                            $result = $conn->query("select staff_name from login_staff");
                              while ($row = $result->fetch_assoc()) 
                                {
                                unset($staff_name);
                                $staff_name = $row['staff_name'];
                                echo '<option value="'.$staff_name.'">'.$staff_name.'</option>';
                                }
                              echo "</select>";
                              mysqli_close($conn);
                              ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="date">Issue-Date(YYYY-MM-DD)</label>
                    <input class="form-control" type="text" id="element_5" name="date" value="<?php echo date('Y/m/d');?>"required/>
                  </div>
                  <div class="form-group">
                    <label for="date">Return Date(YYYY-MM-DD)</label>
                    <input class="form-control" type="text" id="element_5" name="rdate" value="<?php
                    $date=date_create(date('Y/m/d'));
                    date_add($date,date_interval_create_from_date_string("15 days"));
                    echo date_format($date,"Y-m-d");
                    ?>">
                  </div>
                  <button type="submit" class="btn btn-default main-color-bg btn-login col-md-4 col-md-offset-4">Issue Now</button>
                </form>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
  </body>
</html>
