<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$user_name = mysqli_real_escape_string($mysqli, $_POST['user_name']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
		
	// checking empty fields
	if(empty($user_name) || empty($password) || empty($name)) {
				
		if(empty($user_name)) {
			echo "<font color='red'>User Name field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO users(user_name,password,name) VALUES('$user_name','$password','$name')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
