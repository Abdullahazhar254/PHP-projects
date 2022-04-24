<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

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

                           <div class="col-lg-1"></div>
                               <div class="col-lg-6"><br/>
                               <h2 style="text-align:center">Ground Image Details</h2>
                                   <div class="page-header">
                                       
                                   </div>
                                   <div>
                                       
                                      </div>
           
                                       
                                         <div class="table100 ver6 m-b-110">
                               <table data-vertable="ver6">
                                   <thead>
                                               <tr class="row100 head" >
                                                   <th class="column100 column2" data-column="column1">ID</th>
                                                   <th class="column100 column2" data-column="column2">Image</th>
                                                   <th class="column100 column3" data-column="column6">Name</th>
                                                   <th class="column100 column2" data-column="column2">Update</th>
                                                   
                                                   
                                               </tr>
                                           </thead>
                                           <tbody>
                                   <?php
                        
                        include "connection.php";
                        $query = "SELECT gi.gi_id,gi.gi_image,g.g_name FROM ground_image gi LEFT JOIN ground g on gi.gi_gid = g.g_id ";
                        $result = mysqli_query($link, $query);
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                            echo "<td class=column100 column2 data-column=column1>" . $row['gi_id'] . "</td>";
                                            echo "<td class=column100 column2 data-column=column1>" . $row['gi_image'] . "</td>";
                                            echo "<td class=column100 column2 data-column=column1>" . $row['g_name'] . "</td>";
                                            
                                            echo "<td>";
                                                echo "<a href='groundimgupdate.php?id=". $row['gi_id'] ."' title='Update Record' data-toggle='tooltip'><img style=width:30px src=img/update.png </a>";
                                                echo "</td>";
                                        echo "</tr>";
                                    }
                            } 
                        } else{
                            echo "Failed";
                        }
                        mysqli_close($link);
                        ?>
    
</body>
</html>