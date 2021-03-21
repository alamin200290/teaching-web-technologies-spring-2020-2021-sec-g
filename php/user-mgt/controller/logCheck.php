<?php

	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			
			$status = validateUser($username, $password);

			if($status){
				$_SESSION['flag'] = true;
				$_SESSION['username'] = $username;

				header('location: ../view/home.php');
			}else{
				echo "invalid user...";
			}
		}
	}


?>