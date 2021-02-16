

<!DOCTYPE html>
<html>
<head>
	<title>Name Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>NAME</legend>
			Name: 		<input type="text" name="myname" value="<?php echo $_POST['myname']; ?>"> <br>
			password: 	<input type="password" name="password" value="<?=$_POST['password']?>"> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>