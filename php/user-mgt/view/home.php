<?php
	session_start();
	$title = "Home Page";
	include('header.php');
?>
	
	<h1>Welcome home, <?php echo $_SESSION['current_user']['username']; ?></h1>
	
	<a href="create.php"> Create User</a> |
	<a href="user_list.php"> User List</a> |
	<a href="../controller/logout.php"> Logout</a>

<?php
	include('footer.php');
?>
