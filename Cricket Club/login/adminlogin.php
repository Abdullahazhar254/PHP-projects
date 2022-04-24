<?php 

session_start();
include ("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	 
	<div class="limiter">
		<div class="container-login100" style="background-image:url(images/dynamic.png);">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
			<a href="../home.php"><img style="width:50px" src="../images/back.png" /></a>
					<span class="login100-form-title p-b-49">
					Admin Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
					<form action="adminlogin.php" method="post">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="adusername" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="adpass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<br>
                    <br>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="Admin_login"  class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					</form>

					
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<?php 

	//Login Script Start
  if (isset($_POST['Admin_login'])){
    $admin_username= ($_POST['adusername']);
    $admin_password= ($_POST['adpass']);
    $select_admin="SELECT * FROM admin WHERE ad_username='$admin_username' AND ad_pass='$admin_password'";
    $run_admin=mysqli_query($link, $select_admin);
    $row_count=mysqli_num_rows($run_admin);
    if ($row_count==1) {
      $_SESSION['admin_email']=$admin_username; //create session variable
	  header("location: ../admin/src/demo_1/batchindex.php");
      
    }
    else{
      echo "<script>alert('Invalid Email or Password')</script>";
    }
  }  //Login Script End

?>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>