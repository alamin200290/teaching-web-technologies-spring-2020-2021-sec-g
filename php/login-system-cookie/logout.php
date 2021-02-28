<?php

	//session_start();
	//unset($_SESSION['flag']);
	
	setcookie('flag', true, time()-10, '/');
	header('location: login.html');

?>