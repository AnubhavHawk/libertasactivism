		
<!-- footer-28 block -->
<section class="app-footer">
	<footer class="footer-28 py-5">
		<div class="footer-bg-layer">
			<div class="container py-lg-3">
				<div class="row footer-top-28">
					<div class="col-lg-4 footer-list-28 copy-right mb-lg-0 mb-sm-5 mt-sm-0 mt-4">
						<a class="navbar-brand mb-3" href="index.html">
							<span class="fa fa-newspaper-o"></span> LibertasBlog</a>
							<p class="copy-footer-28"> © 2021. All Rights Reserved. </p>
							<h5 class="mt-2">Design by Arora Hussain Pvt. Ltd.</h5>
						</div>
						<div class="col-lg-8 row">
							<div class="col-sm-4 col-6 footer-list-28">
								<h6 class="footer-title-28">Useful links</h6>
								<ul>
									<li><a href="<?=baseurl()?>/index.html">Main Website</a></li>
									<li><a href="<?=baseurl()?>/starter/Blogs.html">Blogs</a></li>
									<li><a href="<?=baseurl()?>/starter/Team.html">Team</a></li>
									<li><a href="<?=baseurl()?>/starter/boa.html">Advisors</a></li>
								</ul>
							</div>
							<div class="col-sm-4 col-6 footer-list-28">
								<h6 class="footer-title-28">Categories</h6>
								<ul>
									<li>International Relations</li>
									<li>Student Activism</a></li>
									<li>Legal Affairs</li>
									<li>History</li>
								</ul>
							</div>
							<div class="col-sm-4 col-6 footer-list-28 mt-sm-0 mt-4">
								<h6 class="footer-title-28">Social Media</h6>
								<ul class="social-icons">
									<li class="facebook">
										<a href="#facebook"><span class="fa fa-facebook"></span> Facebook</a></li>
										<li class="twitter"> <a href="#twitter"><span class="fa fa-twitter"></span> Twitter</a></li>
										<li class="linkedin"> <a href="#linkedin"><span class="fa fa-linkedin"></span> Linkedin</a></li>
										<li class="dribbble"><a href="#dribbble"><span class="fa fa-dribbble"></span> Dribbble</a></li>
									</ul>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</section>

	<!-- Template JavaScript -->
	<script src="<?=baseurl()?>/starter_assets/js/jquery-3.3.1.min.js"></script>

	<!-- theme changer js -->
	<script src="<?=baseurl()?>/starter_assets/js/theme-change.js"></script>
	<script src="<?=baseurl()?>/starter_assets/js/bootstrap.min.js"></script>

	<script>
	    // When the user scrolls down 20px from the top of the document, show the button
	    window.onscroll = function () {
	    	scrollFunction()
	    };

	    function scrollFunction() {
	    	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	    		document.getElementById("movetop").style.display = "block";
	    	} else {
	    		document.getElementById("movetop").style.display = "none";
	    	}
	    }

	    // When the user clicks on the button, scroll to the top of the document
	    function topFunction() {
	    	document.body.scrollTop = 0;
	    	document.documentElement.scrollTop = 0;
	    }
	</script>
	<!-- /move top -->
</section>
<!-- //footer-28 block -->

<!-- disable body scroll which navbar is in active -->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
</body>
</html>