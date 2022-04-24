<?php
include 'connection.php';

session_start();
?>
<!DOCTYPE html>
<html>
<head>
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendoriu/bootstrap/css/bootstrap.min.css">
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

<?php
include 'dashboard.php';
if(isset($_POST['btninsert']))
{
	include 'connection.php';
	$mcnic=$_POST['mcnic'];
	$memail=$_POST['memail'];
    $mfirstname=$_POST['mfirstname'];
	$mlastname=$_POST['mlastname'];
	$musername=$_POST['musername'];
    $mpassword=$_POST['mpassword'];
    $mrole=$_POST['mrole'];
	
	$query="INSERT INTO member (m_cnic,m_email,m_firstname,m_lastname,m_username,m_password,p_role) VALUES ('$mcnic','$memail','$mfirstname','$mlastname','$musername','$mpassword','$mrole')";
    $result=mysqli_query($link,$query);
    echo "<script> alert
        window.location.href='memberindex.php'
        </script>";
	if($result)
	{
		echo 'Successfull';
	}
	else
	{
		echo 'Failed';	
    }
    mysqli_close($link);
}
?>
    
    <div  class="col-lg-8 col-lg-offset-1">
    <form method="post">
                      <div class="container-contact100">
               
        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                    Member 
                </span>      
                  							
                                                    
                                            <div class="wrap-input100 validate-input">
                                                  <input type="text" name="mcnic" class="input100" placeholder="Enter CNIC"  required />
                                            </div>
                                                   
                                                    
                                            <div class="wrap-input100 validate-input">
                                             <input type="text" name="memail" class="input100" placeholder="Enter Email"  required />
                                            </div>
                                          
                                                    
                                            <div class="wrap-input100 validate-input">
                                                    <input type="text" name="mfirstname" class="input100" placeholder="Enter First Nmae"  required />
                                            </div>
                                        
                                            <div class="wrap-input100 validate-input">
                                                    <input type="text" name="mlastname" class="input100" placeholder="Enter Last Name"  required />
                                            </div>
                                           
                                                    
                                            <div class="wrap-input100 validate-input">
                                                    <input type="text" name="musername" class="input100" placeholder="Enter User Name"  required />
                                            </div>
                                           
                                                    
                                            <div class="wrap-input100 validate-input">
                                                    <input type="password" name="mpassword" class="input100" placeholder="Enter Password"  required />
                                            </div>
                                     
                                                    
                                            <div class="wrap-input100 validate-input">
                                                    <input type="text    " name="mrole" class="input100" placeholder="Enter Role"  required />
                                            </div>
                                            <div class="container-contact100-form-btn">
                                               <button class="contact100-form-btn">
                       							 
                                          <input type="submit" name="btninsert" value="Insert" class="contact100-form-btn"/><br><br>
                                            </button>
                									</div>
                                    </form>
                                </div>

</body>
</html>
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
