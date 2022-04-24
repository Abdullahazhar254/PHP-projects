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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<?php include 'dashboard.php'; ?>
<?php

if(isset($_POST['btninsert']))
{
	
	$bname=$_POST['bname'];
	$bday=$_POST['days'];
    $btiming=$_POST['btiming'];
    $sdate=$_POST['sdate'];
	$edate=$_POST['edate'];
	
	$query="INSERT INTO batch(b_name,b_timing,d_id,b_start_date,b_end_date) VALUES ('$bname','$btiming','$bday','$sdate','$edate')";
	$result=mysqli_query($link,$query);
    if($result)
    {
        
       
    }
    else
    {
        //echo("Error description: " . mysqli_error($link));

        echo "<script>alert('Please Select another name it is already taken');
        window.location.href='batchindex.php';
        </script>";
    }
    mysqli_close($link);
    echo "<script>
        window.location.href='batchindex.php';
        </script>";
}

?><div  class="col-lg-9 col-lg-offset-3">
    <form method="post">
    
                      <div class="container-contact100">

        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                    Batch
                </span>
        
                                            <div class="wrap-input100 validate-input">
                                                  
                                                    <input type="text" name="bname" class="input100" placeholder="Enter Name" required />
                                            </div>
                                              <div class="form-group">
                                                   
                                                    <select name="days">
					                            	<option>Select a day</option>
                                                    <?php
							                        $get_day="SELECT * FROM days";
							                        $run_day=mysqli_query($link, $get_day);
							                        while($row_days=mysqli_fetch_array($run_day)){
							                    	$day_id=$row_days['d_id'];
							                    	$day_name=$row_days['d_name'];
								                    echo "<option value='$day_id'>$day_name</option>";
							}
						?>
                       
					</select>
                    
                                            </div>
                                            <label><span></span> time:</label>
                                              <div class="wrap-input100 validate-input">
                                                    <input type="time" name="btiming" class="input100" required />

                                            </div>
                                           
                                        
                                              
                                          
                                            <label><span></span> start date:</label>
                                              <div class="wrap-input100 validate-input">
                                                    <input type="date" name="sdate" class="input100" required />

                                            </div>
                                          
                                            <label><span></span> end date:</label>
                                              <div class="wrap-input100 validate-input">
                                                    <input type="date" name="edate" class="input100" required />

                                            </div>
                                                    <div class="container-contact100-form-btn">
                                               <button class="contact100-form-btn">
                                                 
                                          <input type="submit" name="btninsert" value="Insert" class="contact100-form-btn"/><br><br>
                                            
                                                
                                                    </button>
                </div>
                                          
                                            
                                    </form>
                                </div>
                            </div>
                           <!--===============================================================================================-->
    <script src="vendoriu/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendoriu/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->

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