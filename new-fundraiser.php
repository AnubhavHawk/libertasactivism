<?php
	if(isset($_REQUEST['status'])){
		if($_REQUEST['status'] == 'success')
			$msg = "We have recieved your application successfully! And after review, it will be posted on the fundraisers section.";
		else
			$msg = "Unable to apply, please try again later.";
		?>
		<script>
			alert('<?=$msg?>');
		</script>
		<?php
	}
	include('includes/utilities.php');
	include('includes/headers.php');
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
        <li class="nav-item">
          <a href="Blogs.html" class="nav-link">Blogs</a>
        </li>
        <li class="nav-item active">
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
<div class="p-5">
	<div class="container">
            <div class="heading">
                <h3 class="category-title mb-3">Fundraiser Application</h3>
                <p class="mb-2">We build a culture where we enable opinions to be formed</p>
            </div>
            <div class="row">
                <div class="col-lg-10 bg-white p-5 rounded" style="box-shadow: 0 3px 9px rgb(0 0 0 / 5%);">
                    <form action="<?=baseurl()?>/includes/actions/apply-fundraiser-action.php" method="post" >
                        <div class="row">
                        	<div class="form-group col-12">
	                            <div class="form-input">
	                                <input type="text" class="form-control p-4" name="fund_title" placeholder="Enter the title for fundraiser *"
	                                    required="" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-input">
	                                <input type="email" class="form-control p-4" name="fund_email" placeholder="Enter your email *"
	                                    required />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-input">
	                                <input type="tel" class="form-control p-4" name="fund_mobile" placeholder="Enter your Mobile Number *"
	                                    required />
	                            </div>
	                        </div>
	                        <div class="col-md-12 mt-3">
	                            <div class="form-input">
	                                <textarea class="form-control" rows="5" name="fund_description" placeholder="Enter the description and reason for the fundraiser."></textarea>
	                            </div>
	                        </div>
	                        <div class="col-md-12 mt-3">
	                            <div class="form-input">
	                                <textarea class="form-control" rows="3" name="fund_payment" placeholder="Enter payment related information, UPI, bank account, IFSC code, etc."></textarea>
	                            </div>
	                        </div>
	                        <div class="col-12 mt-1">
	                        	<small class="text-secondary">Explore other fundraisers <a href="<?=baseurl()?>/fundraiser.php">Fundraisers</a></small>
	                        </div>

	                        <div class="col-12 mt-4">
		                        <div class="text-left">
		                            <input type="submit" name="submit" class="btn btn-style btn-primary" value="Apply Now">
		                        </div>
	                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
<?php
	include('includes/footer.php');
?>