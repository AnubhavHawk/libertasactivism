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
					<a class="nav-link" href="../index.html">Main Website</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.html">Home</a>
				</li>
				<li class="nav-item @@contact__active">
					<a href="Team.html" class="nav-link">Team</a>
				</li>
				<li class="nav-item @@contact__active">
					<a href="boa.html" class="nav-link">Advisors</a>
				</li>
				<li class="nav-item active ">
					<a href="Blogs.html" class="nav-link">Blogs</a>
				</li>
				<li class="nav-item @@contact__active">
					<a href="fundraiser.html" class="nav-link">Fundraising</a>
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