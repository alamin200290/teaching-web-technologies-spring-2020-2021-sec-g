<?php
	session_start();
	if(!isset($_SESSION['flag'])){
		header('location: login.html');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
</head>
<body>