<?php
	session_start();
	if(isset($_REQUEST['submit'])){
		include('../db_connection.php');
		include('../utilities.php');
		$sql = "SELECT * FROM users_tbl WHERE user_email = '".$_REQUEST['user_email']."' AND user_password =  '".$_REQUEST['user_password']."' AND is_approved = '1'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			$l = ($row['is_admin'] == '1') ? "location: ".baseurl()."/admin-account.php" : "location: ".baseurl()."/blogs.php";
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['admin'] = $row['is_admin'];
			$_SESSION['approved'] = $row['is_approved'];
			$_SESSION['user_name'] = $row['user_name'];

		}
		else{
			$l = "location: ".baseurl()."/login.php?status=fail";
		}
		header($l);
	}
	else{
		die('Access Denied!!');
	}
?>