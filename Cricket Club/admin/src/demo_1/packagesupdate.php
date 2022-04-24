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
<?php include 'dashboard.php';
    if(isset($_POST['btnupdate']))
    {
        include "connection.php";
        $id=$_GET['id'];
        $prole=$_POST['prole'];
        $pdes=$_POST['pdes'];
        $pprice=$_POST['pprice'];

        $query1 = "UPDATE packages SET p_role='$prole',p_des='$pdes',p_price='$pprice' WHERE p_id = '$id'";
        $result = mysqli_query($link, $query1);
        if($result)
        {
            echo "<script>
        window.location.href='packagesindex.php';
        </script>";
        }
        else
        {echo mysqli_error($link);
            echo "Try Again";
        }
        mysqli_close($link);
    }
    else{
        if(isset($_GET['id']))
        {
            include "connection.php";
            $id=$_GET['id'];
            $query = "SELECT * FROM packages WHERE p_id = '$id'";
            $result = mysqli_query($link, $query);
			
            if(mysqli_num_rows($result) == 1)
            {
                $row = mysqli_fetch_array($result , MYSQLI_ASSOC);
				
            }
            
        }
    }
   

    if(isset($_POST['btnback']))
    {
        echo "<script>
        window.location.href='packagesindex.php';
        </script>";
    }
    
   
?>
    
    <div  class="col-lg-7 col-lg-offset-1">
    <form method="post">
    
                      <div class="container-contact100">

        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                Packages
                </span>
                        
                            <div class="wrap-input100 validate-input">
                          
                                <input type="text" name="prole" class="input100" value="<?php echo $row["p_role"]; ?>" placeholder="Enter Name" required />
                            </div>
                            <div class="wrap-input100 validate-input">
                          
                                <textarea type="text" name="pdes" class="input100" value="<?php echo $row["p_des"]; ?>" placeholder="Enter Description" required ></textarea>
                            </div>
                            <br/>
                     
                            <div class="wrap-input100 validate-input">
                            
                                <input type="text" name="pprice" class="input100"  value="<?php echo $row["p_price"];  ?>" placeholder="Enter Price" required />
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