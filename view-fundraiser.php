<?php
include('includes/utilities.php');
include('includes/db_connection.php');
$url_link = isset($_REQUEST['url_link']) ? $_REQUEST['url_link'] : "";

if($url_link == '')
	die("Can't find anything......");
$sql = "SELECT * FROM fundraisers_tbl WHERE url_link = '".$url_link."' AND is_approved = '1'";
$result = $conn->query($sql);
if($result->num_rows > 0){
	$row = $result->fetch_assoc();
}
?><!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title><?=$row['fundraiser_title']?></title>

	<link href="//fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600&display=swap" rel="stylesheet">
	<link href="//fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?=baseurl()?>/starter_assets/css/style-liberty.css">
</head>
<body>

	<meta name="robots" content="noindex">
	<body><link rel="stylesheet" href="<?=baseurl()?>/assests/css/font-awesome.min.css">
		<!-- New toolbar-->
		<style>
		* {
			box-sizing: border-box;
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
		}


		#w3lDemoBar.w3l-demo-bar {
			top: 0;
			right: 0;
			bottom: 0;
			z-index: 9999;
			padding: 40px 5px;
			padding-top:70px;
			margin-bottom: 70px;
			background: #0D1326;
			border-top-left-radius: 9px;
			border-bottom-left-radius: 9px;
		}

		#w3lDemoBar.w3l-demo-bar a {
			display: block;
			color: #e6ebff;
			text-decoration: none;
			line-height: 24px;
			opacity: .6;
			margin-bottom: 20px;
			text-align: center;
		}

		#w3lDemoBar.w3l-demo-bar span.w3l-icon {
			display: block;
		}

		#w3lDemoBar.w3l-demo-bar a:hover {
			opacity: 1;
		}

		#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
			color: #e6ebff;
		}
		#w3lDemoBar.w3l-demo-bar .responsive-icons {
			margin-top: 30px;
			border-top: 1px solid #41414d;
			padding-top: 40px;
		}
		#w3lDemoBar.w3l-demo-bar .demo-btns {
			border-top: 1px solid #41414d;
			padding-top: 30px;
		}
		#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
			font-size: 26px;
		}
		#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
			margin-bottom:0;
		}
		.toggle-right-sidebar span {
			background: #0D1326;
			width: 50px;
			height: 50px;
			line-height: 50px;
			text-align: center;
			color: #e6ebff;
			border-radius: 50px;
			font-size: 26px;
			cursor: pointer;
			opacity: .5;
		}
		.pull-right {
			float: right;
			position: fixed;
			right: 0px;
			top: 70px;
			width: 90px;
			z-index: 99999;
			text-align: center;
		}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
	width: 90px;
	position: fixed;
	height: 100%;
	z-index: 1000;
	right: 0px;
	top: 0;
	margin-top: 60px;
	-webkit-transition: all .5s ease-in-out;
	-moz-transition: all .5s ease-in-out;
	-o-transition: all .5s ease-in-out;
	transition: all .5s ease-in-out;
	overflow-y: auto;
}


/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
	margin-right: -300px !important;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
	#w3lDemoBar.w3l-demo-bar a.desktop-mode{
		display: none;

	}
}
@media (max-width: 767px) {
	#w3lDemoBar.w3l-demo-bar a.tablet-mode{
		display: none;

	}
}
@media (max-width: 568px) {
	#w3lDemoBar.w3l-demo-bar a.mobile-mode{
		display: none;
	}
	#w3lDemoBar.w3l-demo-bar .responsive-icons {
		margin-top: 0px;
		border-top: none;
		padding-top: 0px;
	}
	#right-sidebar,.pull-right {
		width: 90px;
	}
	#w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
		margin-bottom: 0;
	}
}
</style>
</div>
<div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
style="overflow: hidden; outline: none;">
</div>
</div>
</div>
</div>

<!-- header -->
<header class="w3l-header">
	<div class="container">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-sm-3 px-0">
			<a class="navbar-brand" href="index.html">
				<a class="navbar-brand" href="#index.html">
					<img src="<?=baseurl()?>/assets/img/IMG_20201205_215755_825-2.jpg" alt="Your logo" title="Your logo" style="height:35px;" />
				</a> 


				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="fa icon-expand fa-bars"></span>
				<span class="fa icon-close fa-times"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<nav class="mx-auto">
					<div class="search-bar">
						<form class="search">
							<input type="search" class="search__input" name="search" placeholder="Discover news, articles and more"
							onload="equalWidth()" required>
							<span class="fa fa-search search__icon"></span>
						</form>
					</div>
				</nav>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?=baseurl()?>/index.html">Main Website</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?=baseurl()?>/starter/index.html">Home</a>
					</li>
					<li class="nav-item @@contact__active">
						<a href="<?=baseurl()?>/starter/Team.html" class="nav-link">Team</a>
					</li>
					<li class="nav-item @@contact__active">
						<a href="<?=baseurl()?>/starter/boa.html" class="nav-link">Advisors</a>
					</li>
					<li class="nav-item">
						<a href="<?=baseurl()?>/blogs.php" class="nav-link">Blogs</a>
					</li>
					<li class="nav-item @@contact__active active ">
						<a href="<?=baseurl()?>/fundraiser.php" class="nav-link">Fundraising</a>
					</li>
					<li class="nav-item @@contact__active">
						<a class="nav-link" href="<?=baseurl()?>/contact.php">Contact</a>
					</li>
				</ul>
			</div>
			<!-- toggle switch for light and dark theme -->
			<div class="mobile-position">
				<nav class="navigation">
					<div class="theme-switch-wrapper">
						<label class="theme-switch" for="checkbox">
							<input type="checkbox" id="checkbox">
							<div class="mode-container">
								<i class="gg-sun"></i>
								<i class="gg-moon"></i>
							</div>
						</label>
					</div>
				</nav>
			</div>
			<!-- //toggle switch for light and dark theme -->
		</div>
	</nav>
	<!--//nav-->
</header>
<!-- single post -->
<section class="text-11 py-5">
	<div class="text11 py-lg-5 py-md-4">
		<div class="container">
			<div class="blog-title px-md-5">
				<h3 class="title-big" style="align-content: center;"><?=$row['fundraiser_title']?></h3>
				<ul class="blog-list">
					<li>
						<p> Posted on <strong><?=$row['date_posted']?></strong></p>
					</li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="text11-content">
						<p class="mt-4 mb-3"><?=$row['description']?></p>
						<hr class="mt-5 mb-3">
						<h5>Payment Information</h5>
						<p class="mt-4 mb-3"><?=$row['payment_info']?></p>

						<div class="social-share-blog mt-5">
							<ul class="column3 social m-0 p-0">
								<li>
									<p class="m-0 mr-sm-4 mr-2">Share this post :</p>
								</li>
								<li><a href="#facebook" class="facebook"><span class="fa fa-facebook-square"></span></a>
								</li>
								<li><a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a></li>
								<li><a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
								<li><a href="#envelope" class="mail"><span class="fa fa-envelope"></span></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

<?php
	include('includes/footer.php');
?>