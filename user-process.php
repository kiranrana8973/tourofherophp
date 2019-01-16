<?php
	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn,"tourofheroes");
	
	$sql="insert into users set
			fullName='".$_POST['fullName']."',
			dob='".$_POST['dob']."',
			gender='".$_POST['gender']."',
			username='".$_POST['username']."',
			password='".$_POST['password']."'
	";
	$query= mysqli_query($conn,$sql);
	if($query){
		echo "inserted";
	}else{
		
		echo "failed";
	}
?>

