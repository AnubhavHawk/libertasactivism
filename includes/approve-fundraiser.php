<?php
	include('utilities.php');
	if(!isset($_SESSION['admin']) || (isset($_SESSION['admin']) && $_SESSION['admin'] == '0') || (!isset($_REQUEST['id']))){
		die('Access denied!!');
	}
	else{
		include('db_connection.php');
		$sql = "UPDATE fundraisers_tbl SET is_approved = '1' WHERE fundraise_id = ".$_REQUEST['id'];
		$l = "location: ".baseurl()."/admin-funds.php?status=";
		if($conn->query($sql)){
			$l .= 'success';
		}
		else
			$l .= 'fail';
		header($l);
	}

?>