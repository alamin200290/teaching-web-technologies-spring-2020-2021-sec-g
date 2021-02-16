

<?php
	
	//print 'Hello PHP';
	//print('hello php');
	//echo "HELLO PHP"." XYZ";

	/*$a = 10;
	$name = "abc";
	$cgpa = 3.5;*/

	//$student = array('1111-111', 'alamin', 'SE', 'alamin@aiub.edu');
	//$student = ['1111-111', 'alamin', 'SE', 'alamin@aiub.edu'];
	
	/*$students = [
					['1111-111', 'alamin', 'SE', 'alamin@aiub.edu'],
					['2222-111', 'xyz', 'CSSE', 'xyz@aiub.edu'],
					['3333-111', 'abc', 'CSE', 'abc@aiub.edu']
				];*/

	/*$student = [
					'id'	=>1, 
					'name'	=>'alamin', 
					'dept'	=>'SE', 
					'email'	=>'alamin@aiub.edu'
				];

	echo $student['email'];*/

	/*$students = [
					's1'=> [
						'id'	=>1, 
						'name'	=>'alamin', 
						'dept'	=>'SE', 
						'email'	=>'alamin@aiub.edu'
					],

					's2'=> [
						'id'	=>2, 
						'name'	=>'abc', 
						'dept'	=>'SE', 
						'email'	=>'abc@aiub.edu'
					],

					's3'=> [
						'id'	=>3, 
						'name'	=>'xyz', 
						'dept'	=>'CSE', 
						'email'	=>'xyz@aiub.edu'
					]
				];

	echo $students['s3']['email'];*/

	/*$a = 12;

	if($a === '12'){
		echo "true";
	}else{
		echo "false";
	}*/


	/*$student = [
					'id'	=>1, 
					'name'	=>'alamin', 
					'dept'	=>'SE', 
					'email'	=>'alamin@aiub.edu'
				];*/


	/*foreach ($student as $val) {
		echo $val;
		echo "-";
	}*/

	/*$student = [ 1, 'alamin', 'SE', 'alamin@aiub.edu' ];

	for ($i=0; $i < count($student); $i++) { 
		echo $student[$i];
		echo " | ";
	}*/

	/*function sum($a=0, $b=0){

		return $a+$b;
	}

	echo sum(5);*/

	/*while () {
		echo "test";
	}*/

	/*$myfile = fopen('abc.txt', 'r');
	$data = fread($myfile, filesize('abc.txt'));
	echo $data;
	fclose($myfile);*/

	/*$myfile = fopen('abc.txt', 'w');
	fwrite($myfile, 'This is file write example...');
	echo "done!";
	fclose($myfile);*/

	echo "<h1>printing from <br> apache server....</h1>";
?>

<!DOCTYPE html>
<html>
<head>
	<title> This is PHP page</title>
</head>
<body>
	<h3>this is another section where we can write any text.... </h3>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>1</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>Alamin</td>
		</tr>
	</table>
</body>
</html>