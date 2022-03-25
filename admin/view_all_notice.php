<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View All Notice</title>
    <!-- Bootstrap files -->
    <link rel="icon" type="icon" href="../image/pen.ico">
  <!--==================== css file link ====================-->
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <!--==================== js file link ====================-->
  <script type="text/javascript"src="../js/bootstrap.js"></script>
  <script type="text/javascript"src="../js/bootstrap.min.js"></script>
  </head>
  <body>
    <br>
    <center><h3>All Notices</h3></center><br>
    <?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"onbs");
    $query = 'select * from notice';
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
      ?>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['title'];?></h5>
          <p class="card-text"><?php echo $row['message'];?></p>
        </div>
      </div>
      <?php
    }
    ?>
  </body>
</html>
