<?php

	if(isset($_POST['submit'])){

		$name 		=  $_POST['myname'];
		$password	=  $_POST['password'];

		if($name == "" || $password == ""){
			echo "Null submission...";
		}else{
			echo $name;
			echo "<br>";
			echo $password;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>NAME</legend>
			Name: 		<input type="text" name="myname" value=""> <br>
			password: 	<input type="password" name="password" value=""> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>