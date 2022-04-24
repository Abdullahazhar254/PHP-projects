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
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendoriu/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
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
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>    
</head>
<body style="background-color:#f2f2f2">

<?php
include 'dashboard.php';
    if(isset($_POST['btnupdate']))
    {
        include "connection.php";
        $id=$_GET['id'];
	    $bfmember=$_POST['bfmember'];
        $bfbatch=$_POST['bfbatch'];
        $query1 = "UPDATE batch_form SET  bf_member='$bfmember' , bf_batch='$bfbatch' WHERE bf_id = '$id'";
        $result = mysqli_query($link, $query1);
        if($result)
        {
            echo "<script>
            window.location.href='batch_formindex.php';
            </script>";
        }
        else
        {
            echo "<script> alert('There is no such id')

            window.location.href='batch_formindex.php'
            </script>";
        }
        mysqli_close($link);
    }
    else{
        if(isset($_GET['id']))
        {
            include "connection.php";
            $id=$_GET['id'];
            $query = "SELECT * FROM batch_form WHERE bf_id = '$id'";
            $result = mysqli_query($link, $query);
            if(mysqli_num_rows($result) == 1)
            {
                $row = mysqli_fetch_array($result , MYSQLI_ASSOC);
            }
            mysqli_close($link);
        }
    }
    

    if(isset($_POST['btnback']))
    {
        echo "<script>
        window.location.href='batch_formindex.php'
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
                                                    <input type="number" name="bfmember" class="input100" placeholder="Enter Member" value="<?php echo $row["bf_member"]; ?>" required />
                                            </div>
                                     
                                                    
                                            <div class="wrap-input100 validate-input">
                                                    <input type="number" name="bfbatch" class="input100" placeholder="Enter Batch" value="<?php echo $row["bf_batch"]; ?>" required />
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
                              <script src="vendoriuf/jquery/jquery-3.2.1.min.js"></script>
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
    <script src="vendoriuf/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="jsiu/main.js"></script>