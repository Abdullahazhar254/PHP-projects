<?php
include 'connection.php';
if(!isset($_SERVER['HTTP_REFERER']))
{
    header('location: ../../../login/adminlogin.php');
}
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
    $ntitle=$_POST['ntitle'];
    $ndetail=$_POST['ndetail'];
    $nstartdate=$_POST['nstartdate'];
    $nenddate=$_POST['nenddate'];
    
    $query="INSERT INTO notice (n_title,n_detail,n_startdate,n_enddate) VALUES ('$ntitle','$ndetail','$nstartdate','$nenddate')";
    $result=mysqli_query($link,$query);
    echo "<script>
        window.location.href='noticeindex.php';
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
                   Notice
                </span>
                <div class="wrap-input100 validate-input">
                                                    <input type="text" name="ntitle" class="input100" placeholder="Enter Title" required />
                                            </div>
                                                    
                            <div class="wrap-input100 validate-input">
                                                    <textarea type="text" name="ndetail" class="input100" placeholder="Enter Notice" required ></textarea>
                                            </div>
                                            <label><span></span> start date:</label>
                                                    
                                                    <div class="wrap-input100 validate-input">
                                                            <input type="date" name="nstartdate" class="input100"  required />
                                                    </div>
                                                    <label><span></span>end date:</label>
                                                    
                                            <div class="wrap-input100 validate-input">
                                                    <input type="date" name="nenddate" class="input100"  required />
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
    <script src="vendorfiu/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendorfiu/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="jiu/main.js"></script>
     