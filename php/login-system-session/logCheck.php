<?php

	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			$user = $_SESSION['current_user'];

			if($user['username'] == $username && $user['password'] == $password){
				$_SESSION['flag'] = true;
				header('location: home.php');
			}else{
				echo "invalid user...";
			}
		}
	}


?>