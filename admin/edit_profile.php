<?php

session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"onbs");
$name="";
$email="";
$password="";
$class="";
$query = "select * from admin where email = '$_SESSION[email]'";
$query_run = mysqli_query($connection,$query);
while ($row=mysqli_fetch_assoc($query_run)) 
{
	$name=$row['name'];
	$email=$row['email'];
	$password=$row['password'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
</head>
<body>

	<form action=""method="post">
		<div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" value="<?php echo $password;?>">
      </div>
				<button type="submit" name="update_profile" class="btn btn-primary">Update</button>
	</form>

</body>
</html>