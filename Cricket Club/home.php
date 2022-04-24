<!DOCTYPE html>
<html lang="en">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="cssp/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="cssp/style.css">
    
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="cssp/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="cssp/colors/orange.css" />
<?php include 'links.php'?>

<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	
	<?php include 'header.php'?>
	
	<section  style="background-color:#319DEA;">
	<?php
                        $currentDate=date('Y-m-d');
                        include "connection.php";
                        $query = "SELECT * FROM notice where  notice.n_enddate>='$currentDate' ";
                        $result = mysqli_query($link, $query);
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
										echo "<tr tr class=row100>";
										
                                            echo " <marquee> <h3 style=color:white class=column100 column2 data-column=column2>" . $row['n_detail'] . "</h3></marquee>";
                                           
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                            } 
                        } else{
                            echo "Failed";
                        }
                        mysqli_close($link);
                        ?>


	</section>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
    <br/>
    <?php if(!isset($_SESSION['user'] ))
    {?>
<section>

		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				
				<div class="col-md-12">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Membership</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular">Register Today</h4>
							
							<a href="packages.php" class="btn btn-white-fill expand">Register</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>



	<section id="pricing" >
	<!--Starting Subscribe-main-->
<div id="pricing" class="pricing-main pad-top-100 pad-bottom-100" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="block-title text-center" style="color:white">
                    Register Now
                </h2>
                <p style="color:white">Want To Participate In Training And Book Grounds? Register Now</p>
            </div>
            
                <!-- item -->
                <div class="col-md-offset-3">
                <div class="col-md-8 col-sm-8 text-center">
                    <div  class="panel panel-pricing">
                        
                      
                      
                        <?php
                        
                       include 'connection.php';
                       $query = "SELECT * FROM packages";
                      
                        
                        $result = mysqli_query($link, $query);
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){

                                       
                                   
                                       echo" <div class=panel-heading   style=background-color:green>";
                          
                                            

                                        echo "<h3>" . $row['p_role'] . "</h3>";
                                        echo"</div>";
                                        echo "<div class=panel-body text-center>";
                                        echo "<strong>&#36 ". $row['p_price'] . "</strong>";
                                        echo"</div>";
                                        echo "<div class=panel-body text-center>";
                                      
                                        echo "<div class=panel-body text-center> OFFRING";
                                        
                                        echo "<strong><pre>" . $row['p_des'] . "</pre></strong>";
                                        echo"</div>";
                        
                                            
                                           echo" <div  class=panel-footer >";
                                            echo "<a  href='login/signup.php?id=". $row['p_id'] ."' title='Update Record' data-toggle='tooltip'  class=btn btn-blue  >Register Now</a> ";
                                            echo" </div>";
                             
                                    }
                            } 
                        } else{
                            echo "Failed";
                        }
                        mysqli_close($link);
                    }
                        ?>
                       
                    </div>
                </div>
                </div>
                <!-- /item -->
                <!-- item -->
               
                <!-- /item -->
                <!-- item -->
	</section>

			</div>
		</div>
	</div>
	<?php include 'footer.php'?>
	<?php include 'scripts.php'?>
    