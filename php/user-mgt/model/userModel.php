<?php
	
require_once('db.php');

function validateUser($username, $password){
	$conn = getConnection();
	$sql = "select * from users where username='{$username}' and password='{$password}'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	if(count($row) > 0){
		return true;
	}else{
		return false;
	}
}

function insertUser($user){
	$conn = getConnection();
	$sql = "insert into users values('', '{$user['username']}', '{$user['password']}', '{$user['email']}', '$user['type']')";

	$result = mysqli_query($conn, $sql)

	if($result){
		return true;
	}else{
		return false;
	}

}

function getUserbyId($id){
	
	$conn = getConnection();
	$sql = "select * from users where id='{$id}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	return $row;
}

function getAllUser(){

	$conn = getConnection();
	$sql = "select * from users";
	$result = mysqli_query($conn, $sql);
	$users = [];
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($users, $row);
	}
	return $users;
}

function updateUser($user){
	$conn = getConnection();
	$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}', type='$user['type']'";
	$result = mysqli_query($conn, $sql)
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function deleteUser($id){
	$conn = getConnection();
	$sql = "delete from users where id='{$id}";
	$result = mysqli_query($conn, $sql);
	
	if($result){
		return true;
	}else{
		return false;
	}
}

function getUserByName($username){
	$conn = getConnection();
	$sql = "select * from users where username='{$username}";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row;
}

?>