<?php
	$title = "Home Page";
	//include('header.php');
	//include('header.php');
	//include_once('header.php');

	require('header.php');
	//require_once('header.php');
?>
	
	<h1>Welcome home, <?php echo $_SESSION['username']; ?></h1>
	
	<a href="create.php"> Create User</a> |
	<a href="user_list.php"> User List</a> |
	<a href="../controller/logout.php"> Logout</a>

<?php
	include('footer.php');
?>
