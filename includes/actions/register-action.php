<?php
	if(isset($_REQUEST['submit'])){
		include('../db_connection.php');
		include('../utilities.php');
		$sql = "INSERT INTO users_tbl(user_email, user_name, user_password) VALUES('".$_REQUEST['user_email']."', '".$_REQUEST['user_name']."', '".$_REQUEST['user_password']."')";
		$l = "location: ".baseurl()."/register.php?status=";
		if($conn->query($sql)){
			$l .= 'success';
		}
		else
			$l .= 'fail';
		header($l);
	}
	else{
		die('Access Denied!!');
	}
?>