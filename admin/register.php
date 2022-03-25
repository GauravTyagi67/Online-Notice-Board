<!DOCTYPE html>
<html>
<head>
	<title>Registeration Form</title>
	<!--==================== icon link ====================-->
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

<!--==================== Header Section Start ====================-->
<div class="row"id="header">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h3>Online Notice Board System</h3>
	</div>
	<div class="col-md-4"></div>
</div>
<!--==================== Header Section End ====================-->

<!--==================== Login form start ====================-->
<section id="login-form">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 m-auto block">
			<center><h4>Admin Registeration Form</h4></center>
			<form action="registeration.php"method="post">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name"class="form-control"placeholder="Enter Your Name"required="">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email"class="form-control"placeholder="Enter Your Email"required="">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password"class="form-control"placeholder="Enter Your Password"required="">
				</div>
				<button type="submit"name="register"class="btn btn-primary">Register</button>
				<a href="index.php"name="login"class="btn btn-success">Go To Login</a>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</section>
<!--==================== Login form End ====================-->

</body>
</html>