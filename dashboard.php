<?php
session_start();
if(isset($_POST['update_profile']))
{
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"onbs");
  $query = "update users set fname='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]',password='$_POST[password]',class=$_POST[class] where email='$_SESSION[email]'";
  $query_run = mysqli_query($connection,$query);
  if($query_run)
  {
    echo "<script type='text/javascript'>
    alert('Profile Updated successfully...');
    window.location.href = 'dashboard.php'
    </script>";
  }
  else
  {
    echo "<script type='text/javascript'>
    alert('Can't update try again...');
    window.location.href = 'dashboard.php'
    </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Online Notice Board System</title>
	<!--==================== icon link ====================-->
	<link rel="icon" type="icon" href="image/pen.ico">
	<!--==================== css file link ====================-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--==================== js file link ====================-->
	<script type="text/javascript"src="js/bootstrap.js"></script>
	<script type="text/javascript"src="js/bootstrap.min.js"></script>
	<script type="text/javascript"src="js/juqery_latest.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#edit_profile_button").click(function(){
          $("#main_content").load('edit_profile.php');
        });

        $("#view_notice_button").click(function(){
          $("#main_content").load('view_notice.php');
        });

      });
    </script>
  </head>
  <body>
    <!-- Header section code start here  -->
    <div class="row" id="header">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3>Online Notice Board</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <br>
    <section id="container">
      <div class="row">
        <div class="col-md-2" id="left_sidebar">
          <img src="images/img.png" class="img-rounded" width="200px" height="200px">
          <b><?php echo $_SESSION['email'];?></b><hr>
          <button type="button" class="btn btn-primary btn-block" id="edit_profile_button">Edit Profile</button>
          <button type="button" class="btn btn-warning btn-block" id="view_notice_button">View All Notices</button>
          <a href="logout.php" type="button" class="btn btn-success btn-block">Logout</a><br>
        </div>
        <div class="col-md-8" id="main_content">
          <h2>Welcome to user Dashboard</h2>
          <p>
          This is the admin Dashboard page. Here admin can mangage notice board system. He can create a notice, delete a notice and all the replies of the notice.</p>
          <p>
          This is the admin Dashboard page. Here admin can mangage notice board system. He can create a notice, delete a notice and all the replies of the notice.</p>
          <p>
          This is the admin Dashboard page. Here admin can mangage notice board system. He can create a notice, delete a notice and all the replies of the notice.</p>
        </div>
      </div>
    </section>
  </body>
</html>