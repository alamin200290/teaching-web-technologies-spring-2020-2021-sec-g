<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome home, XYZ</h1>
	<a href="logout.php"> Logout</a>
</body>
</html>

<?php
	}else{
		header('location: login.html');
	}
?>

