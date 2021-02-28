<?php

	session_start();

	if(isset($_POST['submit'])){

		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			//$user = $_SESSION['current_user'];

			if(trim($_COOKIE['username']) == $username && trim($_COOKIE['password']) == $password){
				//$_SESSION['flag'] = true;
				setcookie('flag', true, time()+3600, '/');
				header('location: home.php');
			}else{
				echo "invalid user...";
			}
		}
	}


?>