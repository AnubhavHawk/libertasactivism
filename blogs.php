<?php
include('includes/utilities.php');
include('includes/headers.php');
?>
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
          <a href="Team.html" class="nav-link">Team</a>
        </li>
        <li class="nav-item @@contact__active">
          <a href="boa.html" class="nav-link">Advisors</a>
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

<div class="w3l-homeblock2 w3l-homeblock5 py-5">
    <div class="container pt-md-4 pb-md-5">
        <!-- block -->
        <h3 class="category-title mb-3"> The Insightful Blogs</h3>
        <p class="mb-md-5 mb-3 max-width">Spreading Knowledge Like Never Before</p>
        <?php
            if(isset($_SESSION['user_id'])){
                ?>
                <a href="<?=baseurl()?>/new-blog.php" class="btn btn-primary mb-5">Write blog</a>
                <?php
            }
        ?>
        <div class="row">

            <?php
                include('includes/db_connection.php');
                $sql = "SELECT * FROM blogs_tbl b INNER JOIN users_tbl u ON b.author_id = u.user_id ORDER BY blog_id DESC, blog_date ASC";
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                    ?>
                        <div class="col-lg-6">
                            <div class="bg-clr-white hover-box">
                                <div class="row">
                                    <div class="col-sm-5 position-relative">
                                        <a href="TrialofChicago7.html" class="image-mobile">
                                            <img class="card-img-bottom d-block radius-image-full" src="<?=baseurl()?>/assets/img/blog_img/<?=$row['blog_img']?>" height="200px" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="col-sm-7 card-body blog-details align-self">
                                        <a href="<?=baseurl()?>/read/<?=$row['url_link']?>" class="blog-desc"><?=$row['blog_title']?>
                                        </a>
                                        <div class="author align-items-center">
                                            <img src="<?=baseurl()?>/assets/img/author.png" alt="" class="img-fluid rounded-circle">
                                            <ul class="blog-meta">
                                                <li>
                                                    <a href="#" class="text-capitalize"><?=$row['user_name']?></a> 
                                                </li>
                                                <li class="meta-item blog-lesson">
                                                    <span class="meta-value"> May 30, 2021 </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                  }
                }
                else{
                  ?>
                  <div class="col-md-12 mt-5 text-center">
                    <h4 class="text-warning">No Fundraisers running at the moment.</h4>
                  </div>
                  <?php
                }
              ?>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>