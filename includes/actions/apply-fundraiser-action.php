<?php
	if(isset($_REQUEST['submit'])){
		include('../db_connection.php');
		include('../utilities.php');

		date_default_timezone_set('Asia/Kolkata');

		// get the current time  
		$date_posted = date('d-m-Y');
		$url_link = generateSeoURL($_REQUEST['fund_title']);
		$sql = "INSERT INTO fundraisers_tbl(fundraiser_title, raiser_email, raiser_mobile, payment_info, description, date_posted, url_link) VALUES('".$_REQUEST['fund_title']."', '".$_REQUEST['fund_email']."', '".$_REQUEST['fund_mobile']."', '".$_REQUEST['fund_payment']."', '".$_REQUEST['fund_description']."', '$date_posted', '$url_link')";

		$l = "location: ".baseurl()."/new-fundraiser.php?status=";
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