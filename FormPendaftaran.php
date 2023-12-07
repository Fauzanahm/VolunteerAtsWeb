<?php
include("./config.php")
?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration Form</title>
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
			max-width: 600px;
			margin: 0 auto;
		}

		input[type=text],
		input[type=password],
		input[type=email],
		textarea {
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

	<h2 style="text-align:center;">Registration Form</h2>

	<form action="./proses_daftar_relawan.php" method="post">
		<div class="container">
			<label for="name"><b>Name</b></label>
			<input type="text" placeholder="Enter Name" name="name" required>

			<label for="email"><b>Email</b></label>
			<input type="email" placeholder="Enter Email" name="email" required>

			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<label for="nohp"><b>Phone</b></label>
			<input type="text" placeholder="Enter Phone Number" name="nohp" required>

			<label for="alamat"><b>Address</b></label>
			<textarea placeholder="Enter Address" name="alamat" required></textarea>

			<!-- <label for="status"><b>Role</b></label>
			<select name="status" required>
				<option value="" disabled selected>--Select Role--</option>
				<option value="volunteer">Volunteer</option>
				<option value="admin">Admin</option>
			</select> -->

	<button type="submit" value="Register">
			Register
	</button>
		</div>
	</form>
</body>
</html>