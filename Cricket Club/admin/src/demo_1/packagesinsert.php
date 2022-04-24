<?php
include 'connection.php';
 if(!isset($_SERVER['HTTP_REFERER']))
 {
  header('location: login/adminlogin.php');
 }
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert</title>
  
 
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
	
	$prole=$_POST['prole'];
	$pdes=$_POST['pdes'];
    $pprice=$_POST['pprice'];
	
	$query="INSERT INTO packages(p_role,p_des,p_price) VALUES ('$prole','$pdes','$pprice')";
	$result=mysqli_query($link,$query);

    mysqli_close($link);
    echo "<script>
        window.location.href='packagesindex.php';
        </script>";
}

?>
   <div  class="col-lg-9 col-lg-offset-3">
    <form method="post">
        
    
                      <div class="container-contact100">

        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                Packages
                </span>
                                    
                <div class="wrap-input100 validate-input">
                                                  
                                                    <input type="text" name="prole" class="input100" placeholder="Enter Name" required />
                                            </div>
                                            <div class="wrap-input100 validate-input">
                                                  
                                                    <textarea type="text" name="pdes" class="input100" placeholder="Enter Description" required ></textarea>
                                            </div>
                    
                                            
                                          
                                              <div class="wrap-input100 validate-input">
                                                    <input type="text" name="pprice" class="input100" placeholder="Enter Price" required />

                                            </div>
                                                    <div class="container-contact100-form-btn">
                                               <button class="contact100-form-btn">
                                                 
                                          <input type="submit" name="btninsert" value="Insert" class="contact100-form-btn"/><br><br>
                                            
                                                
                                                    </button>
                </div>
                <div class="col-lg-1"></div>
                </div>    
            <div class="col-lg-3"></div>
                                            
                                    </form>
                                </div>
                            </div>
                           <!--===============================================================================================-->
    <script src="vendoriu/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendoriu/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendoriu/bootstrap/js/popper.js"></script>
    <script src="vendoriu/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendoriu/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendoriu/daterangepicker/moment.min.js"></script>
    <script src="vendoriu/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendoriu/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="jsf/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>