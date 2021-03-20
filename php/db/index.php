<?php

	//create connection
	$conn	= mysqli_connect('localhost', 'root', '', 'webtech');

	/*if($conn){
		echo "success";
	}else{
		die('DB connection error...');
	}*/

	/*$sql = "select * from users";
	$result = mysqli_query($conn, $sql);

	echo "<table border=1>
			<tr>
				<td>ID</td>
				<td>Username</td>
				<td>Email</td>
				<td>Type</td>
			</tr>";

	while ($row = mysqli_fetch_assoc($result)) {

		echo 	"<tr>
					<td>{$row['id']}</td>
					<td>{$row['username']}</td>
					<td>{$row['email']}</td>
					<td>{$row['type']}</td>
				</tr>";
	}

	echo "</table>";*/

/*	$sql = "select * from users where username='' and password=''";
	
	//query
	$result = mysqli_query($conn, $sql);
	//array 
	$row = mysqli_fetch_assoc($result)
	//connection close
	mysqli_close($conn);*/


	$sql = "insert into users values('', 'test', 'test', 'test@gmail.com', 'admin')";
	$result = mysqli_query($conn, $sql);

	print_r($result);
?>