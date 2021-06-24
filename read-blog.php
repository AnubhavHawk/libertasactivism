<?php
if(isset($_REQUEST['status'])){
	if($_REQUEST['status'] == 'success')
		$msg = "Blog posted successfully.";
	else{
		$msg = "Unable to post blog, please try again later.";
	}
	?>
	<script>
		alert('<?=$msg?>');
	</script>
	<?php
}
include('includes/utilities.php');
include('includes/headers.php');
include('includes/db_connection.php');
?>	
<!-- header -->
<header class="w3l-header">
	<div class="container">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-sm-3 px-0">
			<a class="navbar-brand" href="<?=baseurl()?>/index.html">
				<img src="<?=baseurl()?>/assets/img/IMG_20201205_215755_825-2.jpg" alt="Your logo" title="Your logo" style="height:70px;">
			</a> 


			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
			data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
			aria-label="Toggle navigation">
			<!-- <span class="navbar-toggler-icon"></span> -->
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
				<li class="nav-item active">
					<a href="Blogs.html" class="nav-link">Blogs</a>
				</li>
				<li class="nav-item">
					<a href="<?=baseurl()?>/fundraiser.php" class="nav-link">Fundraising</a>
				</li>
				<li class="nav-item @@contact__active">
					<a class="nav-link" href="contact.html">Contact</a>
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
	</nav>
</div>
<!--//nav-->
</header>
<!-- header ends -->
<!-- single post -->


<?php
$sql = "SELECT b.*, u.user_name FROM blogs_tbl b INNER JOIN users_tbl u ON b.author_id = u.user_id AND b.url_link  = '".$_REQUEST['url_link']."'";
$result = $conn->query($sql);
if($result->num_rows > 0){
	$row = $result->fetch_assoc();
	$b = 1;
}
?>
<section class="text-11 py-5">
	<div class="text11 py-lg-5 py-md-4">
		<div class="container">
			<?php
			if(isset($b)){
				?>
				<div class="blog-title px-md-5">
					<h3 class="title-big text-capitalize" style="align-content: center;"><?=$row['blog_title']?></h3>
					<ul class="blog-list">
						<li>
							<p> Posted on <strong><?=$row['blog_date']?></strong></p>
						</li>
						<li>
							<p> By <a href="#author"><strong class="text-capitalize"><?=$row['user_name']?></strong></a></p>
						</li>
					</ul>
				</div>
				<?php
			}
			else{
				?>
				<h1 class="text-center"><b>No Such blog exits.</b></h1>
				<?php		
			}
			?>

		</div>
		<?php
		if(isset($b)){
			?>
			<script>
				document.title = "<?=$row['blog_title']?>";
			</script>
			<div class="image mb-sm-5 mb-4">
				<div class="rounded col-lg-12" style="background-size: cover!important; background-repeat: no-repeat!important; background-position: center!important; min-height: 300px; max-height: 800px; background: url('<?=baseurl()?>/assets/img/blog_img/<?=$row['blog_img']?>');">
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<div class="text11-content">
							<p class="mt-4 mb-3"><?=$row['blog_text']?></p>

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
			<?php
		}        	
		?>
	</div>
</section>
<!-- //single post -->
<?php
include('includes/footer.php');
?>

</html>