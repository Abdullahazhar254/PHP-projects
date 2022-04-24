<?php
include 'connection.php';
 if(!isset($_SERVER['HTTP_REFERER']))
 {
     header('location: login/adminlogin.php');
 }
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>   
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
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cssiu/util.css">
	<link rel="stylesheet" type="text/css" href="cssiu/main.css">
<!--===============================================================================================--> 
</head>
<body style="background-color:#f2f2f2">
<?php include 'dashboard.php';?>
<?php
    if(isset($_POST['btnupdate']))
    {
        include "connection.php";
       $id=$_GET['id'];
	   $gbstatus=$_POST['status'];
        $query1 = "UPDATE ground_booking SET gb_status='$gbstatus'  WHERE gb_id = '$id'";
        $result = mysqli_query($link, $query1);
        if($result)
        {
            echo "<script>
        window.location.href='groundbookingindex.php';
        </script>";
        }
        else
        {
            echo mysqli_error($link);
            echo "Try Again";
        }
        mysqli_close($link);
    }
    else{
        
    }
    

    if(isset($_POST['btnback']))
    {
        echo "<script>
        window.location.href='groundbookingindex.php';
        </script>";
    }
?>
    
    <div  class="col-lg-3 col-lg-offset-3">
    <form method="post">
                      <div class="container-contact100">
               
        <div class="wrap-contact100">
           
              				  
                        
                <div class="col-lg-offset-2" style="text-width:50px">  <select name="status" style="font-size:16px">
                           	<?php
							$get_day="SELECT * FROM ground_status";
							$run_day=mysqli_query($link, $get_day);
                            while($row_days=mysqli_fetch_array($run_day,MYSQLI_NUM))
                            {
                                echo "<option  value =".$row_days["0"].">".$row_days["1"]."</option>";
							}
						?>
                    </select>
                    </div> 
                    <br/>
                    <br/>
                            <div class="col-lg-6"></div><button class="contact100-form-btn">
                           <input type="submit" name="btnupdate" value="Update" class="contact100-form-btn" />
                           </button>  <br/>
                           <div class="col-lg-6"></div>  <button class="contact100-form-btn">
                            <input type="submit" name="btnback" value="Back" class="contact100-form-btn" />
                            </button>
                        </form>
                    </div>
                    
                </div>    
          
  
    
</body>
</html>
<script src="vendorfiu/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendorfiu/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendorfiu/bootstrap/js/popper.js"></script>
    <script src="vendorfiu/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendorfiu/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendorfiu/daterangepicker/moment.min.js"></script>
    <script src="vendorfiu/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendorf/countdowntime/countdowntime.js"></script>
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