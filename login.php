<?php
  session_start();
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"onbs");

  if(isset($_POST['login']))
  {
    $query = "select * from users where email = '$_POST[email]' AND password = '$_POST[password]'";
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run))
    {
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['class'] = $_POST['class'];
      while($row = mysqli_fetch_assoc($query_run))
      {
        $_SESSION['class'] = $row['class'];
        echo "<script>
        window.location.href = 'dashboard.php';
        </script>";
      }
    }
    else
    {
      echo "<script>alert('Please Enter correct email id and password');
      window.location.href = 'index.php';
      </script>";
    }
  }
?>