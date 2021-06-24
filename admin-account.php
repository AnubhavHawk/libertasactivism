<?php
	include('includes/utilities.php');
	if(!isset($_SESSION['admin']) || (isset($_SESSION['admin']) && $_SESSION['admin'] == '0')){
		die('Access denied!!');
	}
	else{
		if(isset($_REQUEST['status'])){
			if($_REQUEST['status'] == 'success')
				$msg = "Approved Successfully!";
			else
				$msg = "Unable to approve, please try again later.";
			?>
			<script>
				alert('<?=$msg?>');
			</script>
			<?php
		}
		include('includes/headers.php');
		?>
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
								<a class="nav-link" href="<?=baseurl()?>/admin-funds.php">Review Fundraisers</a>
							</li>
							<li class="nav-item active">
								<a href="<?=baseurl()?>/admin-account.php" class="nav-link">Review Accounts</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link"><?=$_SESSION['user_name']?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?=baseurl()?>/logout.php">Logout</a>
							</li>
						</ul>
					</div>
				</nav>
				</div>
			<!--//nav-->
		</header>

		<div class="p-5 row">
			<div class="col-12 mb-4 text-secondary"><h4>Review Users and approve</h4></div>
			<?php
				include('includes/db_connection.php');
				$sql = "SELECT user_name, user_id, user_email, is_approved FROM users_tbl ORDER BY user_id DESC";
				$result = $conn->query($sql);
				if($result->num_rows > 0){
					$i = 1;
					while($row = $result->fetch_assoc()){
						?>
						<div class="col-md-10 bg-white mb-2 rounded p-3">
							<div class="row">
								<div class="col-4">
									<h3><b><?=$i?>. </b><?=$row['user_name']?></h3>
								</div>
								<div class="col-4">
									<h3><?=$row['user_email']?></h3>
								</div>
								<div class="col-4 text-right">
									<?php
									if($row['is_approved'] == '1'){
										?>
										<span class="btn btn-secondary btn-disabled">Already Approved</span>
										<?php
									}
									else{
										?>
										<a href="<?=baseurl()?>/includes/approve-profile.php?id=<?=$row['user_id']?>" class="btn btn-primary">Approve</a>
										<?php	
									}
									?>
								</div>
							</div>
						</div>
						<?php
						$i++;
					}
				}
				else{
					?>
					<div class="col-md-10 bg-white border border-primary mb-2 text-center rounded p-3">
						<h4>No Profiles available</h4>
					</div>
					<?php
				}
			?>
		</div>
		<?php
		include('includes/footer.php');
	}
?>	