<?php 

session_start();
?>
<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
<nav class="navbar">
		<div class="container">
		
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand"  href="#"><img src="img/pakcricketclub.png" style="height:60px;width:80px;" data-active-url="img/pakcricketclubGREEN.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="home.php">Home</a></li>
					<li><a href="services.php">Services</a></li>
					
					<li> <a href="batches.php">Batches</a></li>
				<?php 	
				
				?>
					<li><a href="groundgallery.php">Ground Booking</a></li>
				
                    
                    <?php  if(isset($_SESSION['admin_email'] )){?>
						
              <span style="margin:1px; padding: 2px; font-size:18px; text-transform: uppercase; font-weight: bold;color: skyblue;"> Hello <?= $_SESSION['admin_email'] ?> </span>
			  <a href="adminindex.php" style="font-size:14px"  class="btn btn-blue" >Dashboard</a>
              <a href="login/adminlogout.php" style="font-size:14px" class="btn btn-blue">Log Out</a>
              

            <?php } elseif (isset($_SESSION['user'])) { ?>

				
             <a href="userprofile.php" style="margin: 2px; font-size:18px; text-transform: uppercase;font-weight: bold;color: skyblue"> Hello <?= $_SESSION['n']; ?> </a>
              
			 <a href="login/logout.php" style="font-size:14px" class="btn btn-blue">Log Out</a>
            <?php } else{ ?>
            <li><a href="login/login.php"  class="btn btn-blue">Log In</a></li>

            <li><a href="packages.php"  class="btn btn-blue">Register</a></li>

          <?php } ?>
                    
					
                    
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">Play With Passion.</h3>
							<h1 class="white typed">Cricket Is The Real Passion.</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
    </header>
