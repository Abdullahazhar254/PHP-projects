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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
   <script>
    $(document).ready(function () {
        $("#insert").click(function () {
            $("#insertSection").toggle();
        });
    });
</script>
</head>
<body>
<?php 
include 'dashboard.php';
?>
    
                <div>
                   

                   <div class="container">
                       <div class="row">
                       
                               <div class="col-lg-12 col-lg-offset-5">
                                   <div class="page-header ">
                                       <h2 class="col-lg-12" style="text-align:center">Batch_Form Details</h2>
                                   </div>
                                   <div>
                                       
                                      </div>

                        
                              <div class="table100 ver6 m-b-110">
                    <table data-vertable="ver6">
                        <thead>
                                    <tr class="row100 head">
                                        <th class="column100 column2" data-column="column1">ID</th>
                                        <th class="column100 column3" data-column="column3">Member Username</th>
                                        <th class="column100 column4" data-column="column4">Batch Name</th>
                                        <th class="column100 column2" data-column="column2">Update/Delete</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php                   
                        include "connection.php";
                        $query = "SELECT bf.bf_id,m.m_username,b.b_name FROM batch_form bf JOIN member m ON bf.bf_member = m.m_id JOIN batch b ON bf.bf_batch = b.b_id";
                        $result = mysqli_query($link, $query);
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr class=row100>";
                                            echo "<td class=column100 column2 data-column=column1>" . $row['bf_id'] . "</td>";
                                            echo "<td class=column100 column3 data-column=column3>" . $row['m_username'] . "</td>";
                                            echo "<td class=column100 column4 data-column=column4>" . $row['b_name'] . "</td>";
                                            echo "<td>";
                                            
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