<?php

	$file_info = $_FILES['myfile'];
	$path = 'upload/'.$file_info['name'];

	if(move_uploaded_file($file_info['tmp_name'], $path))
	{
		echo "success";
	}else{
		echo "error";
	}
?>