 <?php
   include("dbConnect.php");
   session_start();
   $user_check = $_SESSION['login_admin'];
   $ses_sql = mysqli_query($con,"select admin_user from login_admin where admin_user = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['admin_user'];
   if(!isset($_SESSION['login_admin'])){
      header("location:login_admin.html");
   }
?>
