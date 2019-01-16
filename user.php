<html>
	<head>
	</head>
	
	
	<body>
		<?php
			$conn = mysqli_connect("localhost","root","");
			$db = mysqli_select_db($conn,"tourofheroes");
			
			$sql= "select * from users";
			$query= mysqli_query($conn,$sql);
			
			/* echo "<pre>";
			print_r($query);
			echo  "</pre>"; 
			exit; */
			$count = mysqli_num_rows($query);
		 	if($count){
				$data= array();
				while($row=mysqli_fetch_assoc($query)){
					$data[]=$row;
				}
			echo "<pre>";
			print_r($data);
			echo  "</pre>";
				
			}else{
				echo "no data";
			} 
		?>
	
	</body>


</html>