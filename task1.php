<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="t2.css">
</head>
<body>
<div class="main">
	<div class="register">
		<h2>Global Tech Intern</h2>
		<form id="register" method="post">
			<label>First Name: </label>
			<br>
			<input type="text" name="fname" id="name" placeholder="Enter Your First Name">
			<br><br>
			<label>Last Name: </label>
			<br>
			<input type="text" name="lname" id="name" placeholder="Enter Your Last Name">
			<br><br>
			<label>Age: </label>
			<br>
			<input type="number" name="age" id="name" placeholder="Enter Your Age">
			<br><br>
			<label>Email: </label>
			<br>
			<input type="email" name="email" id="name" placeholder="Enter Your Email">
			<br><br>
			<label>Mobile No.:</label>
			<br>
			<input type="number" name="mobile" id="name" placeholder="Enter Mobile No.">
			<br><br>
			<label>College Name: </label>
			<br>
			<input type="text" name="clg" id="name" placeholder="Enter Name of College">
			<br><br>
			<label>Gender: </label>
			<br>
			&nbsp;&nbsp;&nbsp;
			<input type="radio" name="gender" id="male">
			&nbsp;
			<span id="male">Male</span>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="gender" id="female">
			&nbsp;
			<span id="female">Female</span>
			<br><br>
			<input type="submit" value="Submit" name="submit" id="submit">
		</form>
	</div>
</div>
</body>
</html>