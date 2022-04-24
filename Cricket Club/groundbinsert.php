<?php 
    include 'connection.php';
    session_start();
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
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
</style>
</head>
<body>
<?php
   $id=$_SESSION['id'];
if(isset($_GET['id']))
{
    
    include "connection.php";
    $id=$_GET['id'];
    $query = "SELECT * FROM ground WHERE g_id = '$id'";
    $result = mysqli_query($link, $query);
    if(mysqli_num_rows($result) == 1)
    {
        $row = mysqli_fetch_array($result , MYSQLI_ASSOC);
    }
  
    mysqli_close($link);
    
}
if(isset($_POST['btninsert']))
{  $id1=$_GET['id'];
     $_SESSION['gid']=$_GET['id'];
     $gid=$_SESSION["gid"];
    include "connection.php";    
    $date=$_POST['date'];
    

    $query="SELECT * FROM ground_booking WHERE gb_ground='$gid' AND gb_date='$date'";
    $result=mysqli_query($link,$query);
    $rowCheck=mysqli_num_rows($result);
	if($rowCheck>0)
	{
        echo "<script>alert('Sorry! Ground is already booked')</script>";
      
        
        
      
    

    }
    else
    {
        header("location: ground_payment.php");
         
    }
  
    $_SESSION["date"]=$_POST['date'];
	
	
    
    mysqli_close($link);
}

?>
    
   <form method="post">
                      <div class="container-contact100">

        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
            <span class="contact100-form-title" style="color:#3AA945">
            Ground Name
        </span>
                <span class="contact100-form-title" style="color:#3AA945"><b>
                <?php echo $row["g_name"]; ?>
            
              
               
               
            </b>
                </span>
                                          
                                                    <label><span  ></span>  </label>

                                         
                                            <div class="wrap-input100 validate-input">
                                                    
                                                    <input type="date" name="date" class="input100" placeholder="Booking Date" required />
                                            </div>

                                             <div class="container-contact100-form-btn">
                                               <button class="contact100-form-btn">
                                                 
                                          <input type="submit" name="btninsert" value="Book" class="contact100-form-btn"/><br><br>
                                            
                                                
                                                    </button>

                                            
                                         
                                            
                                    </form>
                                   



                                   






</body>

</html>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
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