<?php
    include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
     
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
<?php
include 'dashboard.php';
    if(isset($_POST['btnupdate']))
    {
        include "connection.php";
        $id=$_GET['id'];        
        $name=$_POST['txtname'];
        $detail=$_POST['txtdetail'];
        $amount=$_POST['txtamount'];
        $query="UPDATE ground SET g_name='$name' , g_detail='$detail' , g_amount='$amount' WHERE g_id = '$id' ";
        $result=mysqli_query($link,$query);
        if($result==true)
        {
            
        
            echo "<script>
            window.location.href='groundindex.php';
            </script>";
        }
        else
        {
            echo "Try Again";
        }
        mysqli_close($link);
    }
    else{
        if(isset($_GET['id']))
        {
            include "connection.php";
            $id=$_GET['id'];
            $query2 = "SELECT * FROM ground WHERE g_id = '$id'";
            $result2 = mysqli_query($link, $query2);
            if(mysqli_num_rows($result2) == 1)
            {
                $row = mysqli_fetch_array($result2 , MYSQLI_ASSOC);
            }
            mysqli_close($link);
        }
    }
    

    if(isset($_POST['btnback']))
    {
        echo "<script>
        window.location.href='groundindex.php';
        </script>";
    }
?>
    
    <div  class="col-lg-8 col-lg-offset-1">
    <form method="post">
                      <div class="container-contact100">
               
        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                    Update Record
                </span>
              				  
                        
                            <div class="wrap-input100 validate-input">
                                
                                <input type="text" name="txtname" class="input100" value="<?php echo $row["g_name"]; ?>" placeholder="Enter Name" required />
                            </div>
                            <div class="wrap-input100 validate-input">
                               
                                <textarea type="text" name="txtdetail" class="input100" value="<?php echo $row["g_detail"]; ?>"  placeholder="Enter Detail"  required ></textarea>
                            </div>
                            <div class="wrap-input100 validate-input">
                             
                                <input type="number" name="txtamount" class="input100" value="<?php echo $row["g_amount"]; ?>" placeholder="Enter Amount" required />
                            </div>
                            <div class="col-lg-4"></div><button class="contact100-form-btn">
                           <input type="submit" name="btnupdate" value="Update" class="contact100-form-btn" />
                           </button>  <br/>
                           <div class="col-lg-4"></div>  <button class="contact100-form-btn">
                            <input type="submit" name="btnback" value="Back" class="contact100-form-btn" />
                            </button>
                            
                        <form>
                    </div>
                    <div class="col-lg-2"></div>
                </div>    
            <div class="col-lg-4"></div>
        </div>        
    </div>
    
</body>
</html>