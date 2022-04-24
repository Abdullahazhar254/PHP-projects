<?php
include 'connection.php';
 if(!isset($_SERVER['HTTP_REFERER']))
 {
     header('location: ../../../login/adminlogin.php');
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
    if(isset($_POST['btnupdate']))
    {
        include "connection.php";
    $id=$_GET['id'];
    $bname=$_POST['bname'];
	$bday=$_POST['day'];
    $btiming=$_POST['btiming'];
    $sdate=$_POST['sdate'];
	$edate=$_POST['edate'];

        $sel_day="SELECT * FROM days WHERE d_id='$id'";
        $run_day=mysqli_query($link, $sel_day);
        $row_days=mysqli_fetch_array($run_day);
        $day_edit_name=$row_days['d_name'];
		
        
        $query1 = "UPDATE batch SET b_name='$bname',b_timing='$btiming',d_id='$bday',b_start_date='$sdate',b_end_date='$edate' WHERE b_id = '$id'";
        $result = mysqli_query($link, $query1);
        if($result)
        {
            echo "<script>
            window.location.href='batchindex.php';
            </script>";
            exit();
        }
        else
        {
          
            
            echo "<script>alert('Please Select another name it is already taken');
            window.location.href='batchindex.php';
            </script>";
            
        }
        mysqli_close($link);
    }
    else{
        if(isset($_GET['id']))
        {
            include "connection.php";
            $id=$_GET['id'];
            $query = "SELECT * FROM batch WHERE b_id = '$id'";
            $result = mysqli_query($link, $query);
			$dayIdSelected=0;
            if(mysqli_num_rows($result) == 1)
            {
                $row = mysqli_fetch_array($result , MYSQLI_ASSOC);
				$dayIdSelected=$row['d_id'];
            }
            
        }
    }
   

    if(isset($_POST['btnback']))
    {
        echo "<script>
        window.location.href='batchindex.php';
        </script>";
    }
    
   
?>
    
   <form method="post">
       <div  class="col-lg-12 col-lg-offset-5">
                      <div class="container-contact100">
                     
        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                Update Record
                </span>
                        
                            <div class="wrap-input100 validate-input">
                          
                                <input type="text" name="bname" class="input100" value="<?php echo $row["b_name"]; ?>" placeholder="Enter Name" required />
                            </div>
                            <div>
                           
                            <div style="text-width:50px"></div>   <select name="day" style="font-size:16px">
                           	<?php
							$get_day="SELECT * FROM days";
							$run_day=mysqli_query($link, $get_day);
                            while($row_days=mysqli_fetch_array($run_day))
                            {
								$day_id=$row_days['d_id'];
								$day_name=$row_days['d_name'];
								if($day_id==$dayIdSelected)
								echo "<option  value='$day_id' selected>$day_name</option>";
								else
								echo "<option value='$day_id'>$day_name</option>";
							}
						?>
					</select>
	
                            </div>
                            <br/>
                            <label style="font-size:16px">time:</label>
                            <div class="wrap-input100 validate-input">
                            
                                <input type="time" name="btiming" class="input100"  value="<?php echo $row["b_timing"]; ?>" required />
                            </div>
                           
                        <label style="font-size:16px">Start Date:</label>
                        <div class="wrap-input100 validate-input">
                       
                            <input type="date" name="sdate" class="input100"  value="<?php echo $row["b_start_date"]; ?>" required />
                        </div>
                        <label style="font-size:16px">End Date:</label>
                        <div class="wrap-input100 validate-input">
                       
                            <input type="date" name="edate" class="input100"  value="<?php echo $row["b_end_date"]; ?>" required />
                        </div>
                            <div class="col-lg-4"></div><button class="contact100-form-btn">
                           <input type="submit" name="btnupdate" value="Update" class="contact100-form-btn" />
                           </button>  <br/>
                           <div class="col-lg-4"></div>  <button class="contact100-form-btn">
                            <input type="submit" name="btnback" value="Back" class="contact100-form-btn" />
                            </button>
                            
         
                    </div>
                    </div>            
                </div>    
 
    
</body>
</html>