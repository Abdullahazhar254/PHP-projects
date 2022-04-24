<?php
include 'connection.php';

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Insert</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fontsiu/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendoriu/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendoriu/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendoriu/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendoriu/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendoriu/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cssiu/util.css">
	<link rel="stylesheet" type="text/css" href="cssiu/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color:#f2f2f2">
<?php include 'dashboard.php';?>
	<?php

if(isset($_POST['btninsert']))
{
	include 'connection.php';
	$adname=$_POST['adname'];
	$ademail=$_POST['ademail'];
	$adpass=$_POST['adpass'];
	$adusername=$_POST['adusername'];
    
    $sql_u = "SELECT * FROM admin WHERE ad_username='$adusername'";
	$sql_e = "SELECT * FROM admin WHERE ad_email='$ademail'";
	$res_u = mysqli_query($link, $sql_u);
	$res_e = mysqli_query($link, $sql_e);

	if (mysqli_num_rows($res_u) > 0) {
	  $name_error = "Sorry... username already taken please choose a diffrent one"; 	
	}else if(mysqli_num_rows($res_e) > 0){
	  $email_error = "Sorry... email already taken please choose a diffrent one"; 	
    }
    else
    {
    $query="INSERT INTO admin(ad_name,ad_email,ad_pass,ad_username) VALUES ('$adname','$ademail','$adpass','$adusername')";
    
	$result=mysqli_query($link,$query);
    mysqli_close($link);
   
    if($result)
    {
        echo "<script>
        window.location.href='adminindex.php';
        </script>";
    	echo "yes";
    }
    else
    {
    	echo "fail";
    }
}
}
?>
<div  class="col-lg-9 col-lg-offset-3">
<form method="post">
<div class="container-contact100">

<div class="wrap-contact100">
    <form class="contact100-form validate-form">
        <span class="contact100-form-title">
                    Admin
                </span>
                <?php if (isset($name_error)): ?>
<div class="row">
					<div class="col-sm-12 col-sm-offset-12">
					<div class="alert alert-info text-center">
  <?php echo $name_error; ?>
  </div>
  </div>
  </div>
<?php endif ?>
                
                <?php if (isset($email_error)): ?>
<div class="row">
					<div class="col-sm-12 col-sm-offset-12">
					<div class="alert alert-info text-center">
  <?php echo $email_error; ?>
  </div>
  </div>
  </div>
<?php endif ?>
                                            <div class="wrap-input100 validate-input">
                                                 
                                                    <input type="text" name="adname" class="input100" placeholder="Enter Name"  required />
                                            </div>
                                              <div class="wrap-input100 validate-input">
                                                   
                                                    <input type="email" name="ademail" class="input100" placeholder="Enter Email"  required />
                                            </div>
                                              <div class="wrap-input100 validate-input">
                                       
                                                    <input type="password" name="adpass" class="input100" placeholder="Enter Password" required />
                                            </div>
                                               <div class="wrap-input100 validate-input">
                                    
                                                    <input type="text" name="adusername" class="input100" placeholder="Enter User Name" required />
                                            </div>
                                              <div class="container-contact100-form-btn">
                                               <button class="contact100-form-btn">
                       							 
                                          <input type="submit" name="btninsert" value="Insert" class="contact100-form-btn"/><br><br>
                                            
                                        		
                    								</button>
                </div>
                                            
                                    </form>
                                </div>
                                </div>

                           
</body>
</html>
 <script src="vendoriu/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendoriu/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
    <script src="vendoriu/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendoriu/daterangepicker/moment.min.js"></script>
    <script src="vendorfiu/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendorfiu/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="jiu/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>