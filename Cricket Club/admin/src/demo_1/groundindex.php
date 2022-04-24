<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
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
</head>
<body>
<?php 
include 'dashboard.php';
?>
    
<div>
                   

<div>
                   

                   <div class="container">
                       <div class="row">
                       
                               <div class="col-lg-12">
                                   <div class="page-header ">
                                       <h2 class="col-lg-12" style="text-align:center">Ground Details</h2>
                                   </div>
                                   <div>
                                       
                                      </div>
           
                                       
                                         <div class="table100 ver6 m-b-110" style="width:1000px;">
                               <table data-vertable="ver6">
                                   <thead>
                                               <tr class="row100 head" >
                                                   <th class="column100 column2" data-column="column1">ID</th>
                                                   <th class="column100 column2" data-column="column2">Name</th>
                                                   <th class="column100 column3" data-column="column6">Detail</th>
                                                   <th class="column100 column4" data-column="column4">Amount</th>
                                                   <th class="column100 column2" data-column="column2">Update/Delete</th>
                                                   
                                                   
                                               </tr>
                                           </thead>
                                           <tbody>
                                   <?php
                        
                        include "connection.php";
                        $query = "SELECT * FROM ground";
                        $result = mysqli_query($link, $query);
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                            echo "<td class=column100 column2 data-column=column1>" . $row['g_id'] . "</td>";
                                            echo "<td class=column100 column2 data-column=column1>" . $row['g_name'] . "</td>";
                                            echo "<td class=column100 column6 data-column=column6>" . $row['g_detail'] . "</td>";
                                            echo "<td class=column100 column2 data-column=column1>" . $row['g_amount'] . "</td>";
                                         
                                            
                                            echo "<td>";
                                                echo "<a href='groundupdate.php?id=". $row['g_id'] ."' title='Update Record' data-toggle='tooltip'><img style=width:30px src=img/update.png </a>";
                                                echo "<a href='grounddelete.php?id=". $row['g_id'] ."' title='Delete Record' data-toggle='tooltip'><img style=width:30px src=img/delete.jpg </a>";
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
</html>