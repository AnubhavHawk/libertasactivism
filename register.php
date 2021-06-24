<?php
	if(isset($_REQUEST['status'])){
		if($_REQUEST['status'] == 'success')
			$msg = "Registered Successfully!";
		else
			$msg = "Unable to register, please try again later.";
		?>
		<script>
			alert('<?=$msg?>');
		</script>
		<?php
	}
	include('includes/utilities.php');
	include('includes/headers.php');
	include('includes/navbar.php');
?>	
<div class="p-5">
	<div class="container">
            <div class="heading">
                <h3 class="category-title mb-3">Register Below</h3>
                <p class="mb-2">Create a quick account here for free.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 bg-white p-5 rounded" style="box-shadow: 0 3px 9px rgb(0 0 0 / 5%);">
                    <form action="<?=baseurl()?>/includes/actions/register-action.php" method="post" >
                        <div class="row">
                        	<div class="form-group col-12">
	                            <div class="form-input">
	                                <input type="text" class="form-control p-4" name="user_name" placeholder="Enter your name *"
	                                    required="" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-input">
	                                <input type="email" class="form-control p-4" name="user_email" placeholder="Enter your email *"
	                                    required />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-input">
	                                <input type="password" class="form-control p-4" name="user_password" placeholder="Enter your Password *"
	                                    required />
	                            </div>
	                        </div>
	                        <div class="col-12 mt-1">
	                        	<small class="text-secondary">Already registered? <a href="<?=baseurl()?>/login.php">Login Now</a></small>
	                        </div>

	                        <div class="col-12 mt-4">
		                        <div class="text-left">
		                            <input type="submit" name="submit" class="btn btn-style btn-primary" value="Submit">
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