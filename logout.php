<?php
	session_start();
	session_destroy();
	include('includes/utilities.php');
	$l = "location: ".baseurl()."/index.html";
	header($l);
?>