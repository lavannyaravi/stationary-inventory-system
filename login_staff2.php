<?php
   include("dbConnect.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($con,$_POST['staff_user']);
      $mypassword = mysqli_real_escape_string($con,$_POST['stud_pass']);
      $sql = "SELECT id FROM login_staff WHERE staff_user = '$myusername' and staff_password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) 
      {
         $_SESSION['login_user'] = $myusername;
         header("location: welcome.php");
      }else 
      {
         header( "location: login_failed.php");
      }
   }
?>
