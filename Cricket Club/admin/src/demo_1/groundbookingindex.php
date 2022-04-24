<?php 
include 'connection.php';

?>
<!DOCTYPE html>
<html>
<head>
    <!--===============================================================================================-->

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fontsf/font-awesome-4.7.0/css/font-awesome.min.css">
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
<meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>
<?php 
include 'dashboard.php';
?>
   <div>
                   

                   <div class="container">
                       <div class="row">
                       
                               <div class="col-lg-12">
                                   <div class="page-header ">
                                       <h2 class="col-lg-12" style="text-align:center">Ground Booking Details</h2>
                                   </div>
                                   <div>
                                       
                                      </div>

                            
                              <div class="table100 ver6 m-b-110">
                    <table data-vertable="">
                        <thead>
                                    <tr class="row100 head">
                                        <th class="column100 column2" data-column="column1">ID</th>
                                        <th class="column100 column2" data-column="column2">Member Name</th>
                                        <th class="column100 column3" data-column="column3">Ground Name</th>
                                        <th class="column100 column4" data-column="column4">Date</th>
                                        <th class="column100 column4" data-column="column4">Status</th>
                                        <th class="column100 column5" data-column="column5">Credit Card</th>
                                        <th class="column100 column5" data-column="column5"></th>
                                     
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                        
                        include "connection.php";
                        $query = "SELECT gb.gb_id,m.m_username,g.g_name,gb.gb_date,gs.gs_status,gb.g_card FROM ground_booking gb JOIN member m ON gb.gb_member = m.m_id JOIN ground g ON gb.gb_ground = g.g_id JOIN ground_status gs ON gb.gb_status = gs.gs_id";
                        $result = mysqli_query($link, $query);
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr class=row100>";
                                            echo "<td class=column100 column2 data-column=column1>" . $row['gb_id'] . "</td>";
                                            echo "<td class=column100 column2 data-column=column2>" . $row['m_username'] . "</td>";
                                            echo "<td class=column100 column3 data-column=column3>" . $row['g_name'] . "</td>";
                                            echo "<td class=column100 column4 data-column=column4>" . $row['gb_date'] . "</td>";
                                            echo "<td class=column100 column4 data-column=column4>" . $row['gs_status'] . "</td>";
											echo "<td class=column100 column5 data-column=column5>" . $row['g_card'] . "</td>";
                                            echo "<td>";
                                            echo "<a href='groundbookingupdate.php?id=". $row['gb_id'] ."' title='Update Record' data-toggle='tooltip'> <img style=width:30px src=img/update.png </a>";
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
    
</body>
<!--===============================================================================================-->  
    <script src="vendorf/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendorf/bootstrap/js/popper.js"></script>
    <script src="vendorf/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendorf/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="jsf/main.js"></script>
</html>