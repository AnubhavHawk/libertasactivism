<?php
	if(isset($_REQUEST['submit'])){
		include('../utilities.php');
		include('../db_connection.php');


		date_default_timezone_set('Asia/Kolkata');

		// get the current time  
		$date_posted = date('d M, Y');
		echo "Date: ".$date_posted;
		$url_link = generateSeoURL($_REQUEST['blog_title']);
		$blog_text = mysqli_real_escape_string($conn, $_REQUEST['blog_text']);
		$author_id = $_SESSION['user_id']; // Who is logged-in.

		if($_FILES['blog_img']['name'] != "")
		{
			$file = explode("/", $_FILES['blog_img']['type']);
			$ext = end($file);
			$ext = strtolower($ext);
			echo "<br>Extension : ".$ext."<br>";

			if( !in_array($ext, array("jpg", "jpeg", "png")))
			{
				$l = 'location: '.baseurl()."/new-blog.php?status=img";
				header($l);
			}
			else
			{
				// move the file to the blog_img folder
				$img_name = $url_link.".$ext";
				$location = "../../assets/img/blog_img/".$img_name;
				echo "moved: ".move_uploaded_file($_FILES['blog_img']['tmp_name'] , $location);



				$sql = "INSERT INTO blogs_tbl(blog_title, blog_text, author_id, blog_img, blog_date, url_link) VALUES ('".$_REQUEST['blog_title']."', '".$_REQUEST['blog_text']."', '".$author_id."', '".$img_name."', '".$date_posted."', '".$url_link."' )";
				$result = $conn->query($sql);

				$l = "location: ".baseurl()."/new-blog.php?status=";
				if($result){
					$l = "location: ".baseurl()."/read/".$url_link;
				}
				else
					$l .= 'fail';
				header($l);
			}
		}
		else{
			$l = 'location:'.baseurl()."/new-blog.php?status=img";	
			header($l);
		}
	}
	else{
		die('Access Denied!!');
	}
?>