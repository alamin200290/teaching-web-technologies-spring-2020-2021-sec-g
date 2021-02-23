<?php

	session_start();
	unset($_SESSION['flag']);
	header('location: login.html');

?>