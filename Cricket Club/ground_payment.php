<?php 
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment Form</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css">
</head>

<body>
<?php
if(isset($_POST['btninsert']))
{
	include 'connection.php';
	$id=$_SESSION["id"];
    $gid=$_SESSION["gid"];
    $date=$_SESSION["date"];
    $gcard=$_POST['gcard'];

	

	
        
        $query1="INSERT INTO ground_booking (gb_member,gb_ground,gb_date,gb_status,g_card) VALUES ('$id','$gid','$date',1,'$gcard')";
        $result1=mysqli_query($link,$query1);
        if($result1)
        {
            echo "<script>
            alert('You Have Sucessfully Booked The Ground');
            window.location.href='home.php';
            </script>";
        }
        else
        {
            echo "failed";   
        }
    
    

}

    mysqli_close($link);


?>
<form method="post">
    <div class="container-fluid">
       
        <div class="creditCardForm">
            <div class="heading">
                <h1>Confirm Purchase</h1>
            </div>
            <div class="payment">
                <form>
                    <div class="form-group owner">
                        <label for="owner">Credit Card Owner Name</label>
                        <input type="text" class="form-control" id="owner">
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" name="gcard"class="form-control"  id="cardNumber">
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>Expiration Date</label>
                        <select>
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select>
                            <option value="20"> 2020</option>
                            <option value="21"> 2021</option>
                            <option value="16"> 2022</option>
                            <option value="17"> 2023</option>
                            <option value="18"> 2024</option>
                            <option value="19"> 2025</option>
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="assets/images/visa.jpg" id="visa">
                        <img src="assets/images/mastercard.jpg" id="mastercard">
                        <img src="assets/images/amex.jpg" id="amex">
                    </div>
                    <div class="form-group" id="pay-now">
                        <button type="submit"  class="btn btn-default" name="btninsert" >Confirm</button>
                    </div>
                </form>
            </div>
        </div>

       
    </div>
</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
