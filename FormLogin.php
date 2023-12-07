<?php
include "./config.php";
?>
<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}

		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			max-width: 400px;
			margin: 0 auto;
		}

		input[type=text],
		input[type=password],
		input[type=email] {
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			width: 100%;
			margin-bottom: 20px;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			float: right;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

		.container {
			padding: 16px;
		}
	</style>
</head>

<body>
	<h2 style="text-align:center;">Login</h2>

	<form action="./proses_login_relawan.php" method="post">
		<div class="container">
			<label><b>Email/Username</b></label>
			<input type="text" placeholder="Enter Email/Username" name="email" required>

			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<label for="role"><b>Login as</b></label>
			<!-- <select name="role" required>
				<option value="" disabled selected>--Select Role--</option>
				<option value="volunteer">Volunteer</option>
				<option value="admin">Admin</option>
			</select> -->

			<input type="submit" value="login">

			<p>Forgot password? <a href="forgot_password.php">Click here</a></p>
		</div>
	</form>
</body>

</html>