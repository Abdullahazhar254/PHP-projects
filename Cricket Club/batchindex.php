<?php 
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
<!--===============================================================================================-->

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fontsiu/font-awesome-4.7.0/css/font-awesome.min.css">
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

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include 'admin/src/demo_1/dashboard.php'; ?>
<div>
                   
<div>
                   

                   <div class="container">
                       <div class="row">
                           <div class="col-lg-2"></div>
                               <div class="col-lg-8">
                                   <div class="page-header ">
                                       <h2 style="text-align:center">Batch Details</h2><br><br>
                                   </div>
                                   <div>
                                       
                                      </div>
        
          
                
                    
                    
        
                <div class="table100 ver6 m-b-110">
                    <table data-vertable="ver6">
                        <thead>
                            <tr class="row100 head">
                                        <th class="column100 column2" data-column="column1">ID</th>
                                        <th class="column100 column2" data-column="column2">Name</th>
                                        <th class="column100 column3" data-column="column3">Timing</th>
                                        <th class="column100 column4" data-column="column4">Day</th>
                                        <th class="column100 column3" data-column="column3">Start Date</th>
                                        <th class="column100 column4" data-column="column4">End Date</th>
                                        <th class="column100 column2" data-column="column2">Update/Delete</th>
                                        
                                        
                                    </tr>
                                </thead>
                            
                        </div>
                                <tbody>
                        <?php
                        
                       include 'connection.php';
                       //$query = "SELECT * FROM batch";
                       $query="SELECT batch.b_id,batch.b_name,batch.b_timing,batch.b_start_date,batch.b_end_date,days.d_name FROM batch inner join days on batch.d_id=days.d_id";
                        
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
                                            echo "<td class=column100 column5 data-column=column5>";
                                            echo "<a href='batchupdate.php?id=". $row['b_id'] ."' title='Update Record' data-toggle='tooltip'> <img style=width:30px src=img/update.png </a> |";
                                            echo "<a href='batchdelete.php?id=". $row['b_id'] ."' title='Delete Record' data-toggle='tooltip'><img style=width:35px src=img/delete.jpg </a>";
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



<!-- ./wrapper -->



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