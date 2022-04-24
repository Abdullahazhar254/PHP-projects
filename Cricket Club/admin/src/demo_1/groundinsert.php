<?php 
    include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
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
    $name=$_POST['txtname'];
    $detail=$_POST['txtdetail'];
    $amount=$_POST['txtamount'];
    $query="INSERT INTO ground (g_name,g_detail,g_amount) VALUES ('$name','$detail','$amount')";
    $result=mysqli_query($link,$query);
    if($result==true)
	{
		for($i=0;$i<count($_FILES['files']['name']);$i++)
        {
            $r= mysqli_query($link,"SELECT max(g_id) from ground");
			$g_Id = mysqli_fetch_row($r);
			$ig_id = $g_Id[0];
            $filetmp=$_FILES['files']['tmp_name'][$i];
            $filename=$_FILES['files']['name'][$i];
            $path="images/".$filename;
            move_uploaded_file($filetmp,$path);
            $query1="INSERT INTO ground_image (gi_image,gi_gid) VALUES ('$filename','$ig_id')";
            $result1=mysqli_query($link,$query1);
            
        
        }
		if($result1)
		{
			echo "<script>
            window.location.href='groundindex.php';
            </script>";
			}
			else
			{
				echo "Try Again";
				echo mysqli_error($link);
			}
	}
	
	
	else
	{
		echo "Failed";
	}
}

?>
     <div  class="col-lg-5 col-lg-offset-2">
    <form  method="post" enctype="multipart/form-data">
   

                      <div class="container-contact100">
               
        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <span class="contact100-form-title">
                Insert Ground
                </span>
                <div class="wrap-input100 validate-input">
                                               
                                                    <input type="text" name="txtname" class="input100" placeholder="Enter Name"  required />
                                            </div>
                                            <div class="wrap-input100 validate-input">
                                                    
                                                    <textarea name="txtdetail" class="input100" placeholder="Enter Details" required ></textarea>
                                                    </div>
                                                    <div class="wrap-input100 validate-input">
                                                  
                                                    <input type="text" name="txtamount" class="input100" placeholder="Enter Amount" required />
                                            </div>
                                            <div class="form-group">
                                                <label> Image:</label>
                                                <input type="file" name="files[]" id="file" multiple>
                                            </div>
                                            
                                            <div class="container-contact100-form-btn">
                                               <button class="contact100-form-btn">
                       							 
                                          <input type="submit" name="btninsert" value="Insert" class="contact100-form-btn"/><br><br>
                                            
                                        		
                    								</button>
                </div>
                                            
                                    </form>
                                </div>
                            <div class="col-lg-3"></div>
                        </div>
                            
                                
                    </div>
                <div class="col-lg-2"></div>
            </div>        
        </div>
    
</body>
</html>