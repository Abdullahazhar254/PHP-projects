<?php 
include 'connection.php';

?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="cssp/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="cssp/style.css">
    
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="cssp/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="cssp/colors/orange.css" />
<?php include 'links.php'?>


	
	<?php include 'header.php'?>

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendorf/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendorf/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendorf/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="cssf/util.css">
    <link rel="stylesheet" type="text/css" href="cssf/main.css">
<!--===============================================================================================-->

<style>
.button {
  background-color: green;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

</style>


<body>

	
<div id="pricing" style="background-image:url(bgs.png);background-repeat:no-repeat;">
                   
				   <div>
									  
				   
									  <div class="container">
										  <div class="row">
											  <div class="col-lg-2"></div>
												  <div class="col-lg-8">
													  <div class="page-header ">
														  <h2 style="text-align:center;color:white">Open Batches</h2><br><br>
													  </div>
													  <div>
														  
														 </div>
						   
							 
								   
									   
									   
						   
								   <div class="table100 ver1 m-b-110">
									   <table data-vertable="ver6">
										   <thead>
											   <tr class="row100 head">
														   <th class="column100 column2" data-column="column1">ID</th>
														   <th class="column100 column2" data-column="column2">Name</th>
														   <th class="column100 column3" data-column="column3">Timing</th>
														   <th class="column100 column4" data-column="column4">Day</th>
														   <th class="column100 column3" data-column="column3">Start Date</th>
														   <th class="column100 column4" data-column="column4">End Date</th>
														   <th class="column100 column4" data-column="column4"></th>
														   
														   
														   
													   </tr>
												   </thead>
											   
										   </div>
												   <tbody>
										   <?php
										   $currentDate=date('Y-m-d');
										  include 'connection.php';
										  //$query = "SELECT * FROM batch";
										  $query="SELECT batch.b_id,batch.b_name,batch.b_timing,batch.b_start_date,batch.b_end_date,days.d_name FROM batch inner join days on batch.d_id=days.d_id && batch.b_end_date>='$currentDate' ";
										   
										   $result = mysqli_query($link, $query);
										   if($result){
											   if(mysqli_num_rows($result) > 0){
													   while($row = mysqli_fetch_array($result)){
														   echo "<tr class=row100>";
															   echo "<td class=column100 column1 data-column=column1>" . $row['b_id'] . "</td>";
															   echo "<td class=column100 column2 data-column=column2>" . $row['b_name'] . "</td>";
															   echo "<td class=column100 column3 data-column=column3>" . $row['b_timing'] . "</td>";
															   echo "<td class=column100 column4 data-column=column4>" . $row['d_name'] . "</td>";
															   echo "<td class=column100 column4 data-column=column4>" . $row['b_start_date'] . "</td>";
															   echo "<td class=column100 column4 data-column=column4>" . $row['b_end_date'] . "</td>";
															 if(isset($_SESSION['user'])&&($_SESSION['p_id']>=2))
															 {
																echo "<td class=column100 column5 data-column=column5>";
																echo "<a href='batch_forminsert.php?id=". $row['b_id'] ."' data-toggle='tooltip'> <span class=button button2> Enroll Now</span> </a>";
																 echo "</td>";
															 }
															 else if(isset($_SESSION['user'])&&($_SESSION['p_id']<=2))
															 {
																echo "<td class=column100 column5 data-column=column5>";
																echo "<a href='paymentfree.php?id=". $row['b_id'] ."' data-toggle='tooltip'> <span class=button button2> Enroll Now</span> </a>";
																 echo "</td>";
															 }  
															  
                                        					echo "</tr>";
														  
													   }
											   } 
										   } else{
											   echo "Failed";
										   }
										   mysqli_close($link);
										   ?>
										 
                                    
										 </tbody>                            
															   </table>  
											 
									   </div>
								   <div class="col-lg-2"></div>
							   </div>        
						   </div>
						   </div>
						<!-- Expired Batches-->

						   <div>
									  
				   
									  <div class="container">
										  <div class="row">
											  <div class="col-lg-2"></div>
												  <div class="col-lg-8">
													  <div class="page-header ">
														  <h2 style="text-align:center;color:white">Closed Batches</h2><br><br>
													  </div>
													  <div>
														  
														 </div>
						   
							 
								   
									   
									   
						   
								   <div class="table100 ver1 m-b-110">
									   <table data-vertable="ver6">
										   <thead>
											   <tr class="row100 head">
														   <th class="column100 column2" data-column="column1">ID</th>
														   <th class="column100 column2" data-column="column2">Name</th>
														   <th class="column100 column3" data-column="column3">Timing</th>
														   <th class="column100 column4" data-column="column4">Day</th>
														   <th class="column100 column3" data-column="column3">Start Date</th>
														   <th class="column100 column4" data-column="column4">End Date</th>
													
														   
														   
														   
													   </tr>
												   </thead>
											   
										   </div>
												   <tbody>
										   <?php
										   $currentDate=date('Y-m-d');
										  include 'connection.php';
										  //$query = "SELECT * FROM batch";
										  $query="SELECT batch.b_id,batch.b_name,batch.b_timing,batch.b_start_date,batch.b_end_date,days.d_name FROM batch inner join days on batch.d_id=days.d_id && batch.b_end_date<='$currentDate' ";
										   
										   $result = mysqli_query($link, $query);
										   if($result){
											   if(mysqli_num_rows($result) > 0){
													   while($row = mysqli_fetch_array($result)){
														   echo "<tr class=row100>";
															   echo "<td class=column100 column1 data-column=column1>" . $row['b_id'] . "</td>";
															   echo "<td class=column100 column2 data-column=column2>" . $row['b_name'] . "</td>";
															   echo "<td class=column100 column3 data-column=column3>" . $row['b_timing'] . "</td>";
															   echo "<td class=column100 column4 data-column=column4>" . $row['d_name'] . "</td>";
															   echo "<td class=column100 column4 data-column=column4>" . $row['b_start_date'] . "</td>";
															   echo "<td class=column100 column4 data-column=column4>" . $row['b_end_date'] . "</td>";
			
															 
                                           					 echo "</td>";
                                        					echo "</tr>";
														  
													   }
											   } 
										   } else{
											   echo "Failed";
										   }
										   mysqli_close($link);
										   ?>
										 
                                    
										 </tbody>                            
															   </table>  
											 
									   </div>
								   <div class="col-lg-2"></div>
							   </div>        
						   </div>



						   </div>
						   </div>


				   </body>
				 
			
			
				

    
    </html>
    <?php include 'footer.php'?>
    <?php include 'scripts.php'?> 
	 <!--===============================================================================================-->  
					   <script src="vendorf/jquery/jquery-3.2.1.min.js"></script>
				   <!--===============================================================================================-->
					   <script src="vendorf/bootstrap/js/popper.js"></script>
					   <script src="vendorf/bootstrap/js/bootstrap.min.js"></script>
				   <!--===============================================================================================-->
					   <script src="vendorf/select2/select2.min.js"></script>
				   <!--===============================================================================================-->
					   <script src="jsf/main.js"></script>