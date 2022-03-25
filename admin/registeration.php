<?php

$connection = mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"onbs");

if(isset($_POST['register']))
{
	$query = "insert into admin values(null,'$_POST[name]','$_POST[email]','$_POST[password]')";
	$query_run = mysqli_query($connection,$query);
	if($query_run)
	{
      echo "<script>alert('Registration successfully...You may now login.');
      window.location.href = 'index.php';
      </script>";
    }
	else
	{
      echo "<script>alert('Registration failed...try again');
      window.location.href = 'register.php';
      </script>";
    }
}

?>