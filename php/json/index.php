<?php

	//$myfile = fopen('users.json', 'r');
	//$data = fread($myfile, filesize('users.json'));
	/*$data = '{
				"Id" 	: 12,
				"name"	: "alamin",
				"email"	: "alamin@aiub.edu"
			}';

	$user = json_decode($data, true);
	print_r($user['name']);*/

	$name 		= 'alamin';
	$password 	= '123';
	$email 		= 'alamin@aiub.edu';

	$user = [
				'name' => $name,
				'password' => $password,
				'email'	   => $email	
			];

	$json = json_encode($user);

	echo $json;

?>