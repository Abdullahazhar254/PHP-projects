<?php include 'connection.php';

session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
<?php

if(isset($_POST['btninsert']))
{
	include 'connection.php';
	$id=$_GET['id'];
	$_SESSION["id"]=$_GET['id'];
	$_SESSION["CNIC"]=$_POST['mcnic'];
	$_SESSION["Email"]=$_POST['memail'];
    $_SESSION["Fname"]=$_POST['mfirstname'];
	$_SESSION["Lname"]=$_POST['mlastname'];
	$_SESSION["Uname"]=$_POST['musername'];
	$mpassword=$_POST['mpassword'];
	$_SESSION["Password"]=md5($mpassword);

	$mcnic=$_POST['mcnic'];
	$memail=$_POST['memail'];
    $mfirstname=$_POST['mfirstname'];
	$mlastname=$_POST['mlastname'];
	$musername=$_POST['musername'];
	$mpassword=$_POST['mpassword'];
	$encryptPass=md5($mpassword);

	$sql_u = "SELECT * FROM member WHERE m_username='$musername'";
	$sql_e = "SELECT * FROM member WHERE m_email='$memail'";
	$res_u = mysqli_query($link, $sql_u);
	$res_e = mysqli_query($link, $sql_e);

	if (mysqli_num_rows($res_u) > 0) {
	  $name_error = "Sorry... username is already taken please choose a diffrent one"; 	
	}else if(mysqli_num_rows($res_e) > 0){
	  $email_error = "Sorry... email is already taken please choose a diffrent one"; 	
	}
	else{
	if($id>=2)
	{
		//echo $_SESSION["CNIC"];
		header("location: ../payment.php");
	}
	else
	{	
	$query="INSERT INTO member (m_cnic,m_email,m_firstname,m_lastname,m_username,m_password,p_role) VALUES ('$mcnic','$memail','$mfirstname','$mlastname','$musername','$encryptPass','$id')";
	$result=mysqli_query($link,$query);
	if($result)
	{
		$_SESSION['message']='You have sucessfully registerd! Please go to login page and login with your username and password';
		
		
		
		//header("location: login.php");
	}
	else
	{
		$_SESSION['message1']='Unsucessfull';	
    }
}
    mysqli_close($link);
}

}
?>



<div class="limiter">
		<div class="container-login100" style="background-image:url(images/bgs.png);">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
			<a href="../packages.php"><img style="width:50px" src="../images/back.png" /></a>

			<span class=login100-form-title p-b-49> Sign Up</span>

			<?php if (isset($email_error)): ?>
<div class="row">
					<div class="col-sm-12 col-sm-offset-12">
					<div class="alert alert-info text-center" style="background-image:linear-gradient(to right,#64f3e7,#13dad3)">
  <?php echo $email_error; ?>
  </div>
  </div>
  </div>
<?php endif ?>

<?php if (isset($name_error)): ?>
<div class="row">
					<div class="col-sm-12 col-sm-offset-12">
					<div class="alert alert-info text-center" style="background-image:linear-gradient(to right,#64f3e7,#13dad3)">
  <?php echo $name_error; ?>
  </div>
  </div>
  </div>
<?php endif ?>


					<?php 
					if(isset($_SESSION['message'])){
						?>
					<div class="row">
					<div class="col-sm-12 col-sm-offset-12">
					<div class="alert alert-info text-center" style="background-image:linear-gradient(to right,#64f3e7,#13dad3)">
					
					<?php echo $_SESSION['message']; ?>
					<br/>
				   <a href="login.php"  style="color:white"><button  type="submit"> Processed to login</a><button>
					</div>
					</div>
					</div>
				<?php
	unset($_SESSION['message']);
}

if(isset($_SESSION['message1'])){
	?>
<div class="row">
<div class="col-sm-12 col-sm-offset-12">
<div class="alert alert-info text-center" style="background-image:linear-gradient(to right,#64f3e7,#13dad3)">
<?php echo $_SESSION['message1']; ?>
</div>
</div>
</div>
<?php
unset($_SESSION['message1']);
}
?>
				<form  method="post">
						<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">FirstName</span>
						<input class="input100" type="text" name="mfirstname" required placeholder="Type your Firstname">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Lastname</span>
						<input class="input100" type="text" name="mlastname" required placeholder="Type your Lastname">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
                    
                        <div class="wrap-input100 validate-input m-b-23" data-validate = "CNIC">
						<span class="label-input100">CNIC</span>
						<input class="input100" id="cnic" maxlength="13" type="text"  pattern="^\d{13}$" name="mcnic" required placeholder="Type your Cnic Number">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
                    
                        <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="memail" required placeholder="Type your Email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="musername" required placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
                    
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="mpassword" required placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<br/>
					
					<br/>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>

                        <?php
                        
                       // include 'connection.php';
                       // $query = "SELECT * FROM packages where p_id==$_GET['id']";
                      
                        
                       //  $result = mysqli_query($link, $query);
                       //  if($result){
                       //      if(mysqli_num_rows($result) > 0){
                       //              while($row = mysqli_fetch_array($result)){
                                      
                                            echo "<button type=submit name=btninsert class=login100-form-btn ?id=". $_GET['id']."'data-toggle='tooltip'  class=btn btn-blue>Sign Up</button> ";
                                            
                             
                        //             }
                        //     } 
                        // } else{
                        //     echo "Failed";
                        // }
                        // mysqli_close($link);
                        ?>
							
						</div>
					</div>
				
					
					
					
					
</form>
					
		
				
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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
</body>
</html>