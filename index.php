<?php

$conn = mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,"tourofheroes");

/* if($db){
	
	echo "connected";
}
else{
	echo "failed";
} */

?>

<html>
	<head>
	</head>
	
	
	<body>
		<form action="user-process.php" method="post">
			<label>fullname</label>
			<input type="text" name="fullName">
			<br>
			
			<label>DOB</label>
			<input type="date" name="dob">
			<br>
			
			<label>Gender</label>
			<input type="radio" name="gender" value="male">male
			<input type="radio" name="gender" value="male">male
			<br>
			
			<label>username</label>
			<input type="text" name="username">
			<br>
			
			<label>password</label>
			<input type="text" name="password">
			<br>
			
			<input type="submit" value="submit">
		
		</form>
	
	</body>


</html>