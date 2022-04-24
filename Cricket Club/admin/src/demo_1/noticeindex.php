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
                       
                               <div class="col-lg-12">
                                   <div class="page-header ">
                                       <h2 class="col-lg-12" style="text-align:center">Notice Details</h2>
                                   </div>
                                   <div>
                                       
                                      </div>

                                  <div class="table100 ver6 m-b-110">
                    <table data-vertable="ver6">
                        <thead>
                                <tr class="row100 head">
                                        <th class="column100 column2" data-column="column2">ID</th>
                                        <th class="column100 column5" data-column="column5">TITLE</th>
                                        <th class="column100 column2" data-column="column2">Detail</th>
                                        <th class="column100 column4" data-column="column4">START DATE</th>
                                        <th class="column100 column3" data-column="column3">END DATE</th>
                                        <th class="column100 column2" data-column="column2">Update/Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                        
                        include "connection.php";
                        $query = "SELECT * FROM notice";
                        $result = mysqli_query($link, $query);
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr tr class=row100>";
                                            echo "<td class=column100 column2 data-column=column2>" . $row['n_id'] . "</td>";
                                            echo "<td class=column100 column5 data-column=column5>" . $row['n_title'] . "</td>";
                                            echo "<td class=column100 column2 data-column=column2>" . $row['n_detail'] . "</td>";
                                            echo "<td class=column100 column4 data-column=column4>" . $row['n_startdate'] . "</td>";
                                            echo "<td class=column100 column3 data-column=column3>" . $row['n_enddate'] . "</td>";
                                            
                                            echo "<td>";
                                            echo "<a href='noticeupdate.php?id=". $row['n_id'] ."' title='Update Record' data-toggle='tooltip'> <img style=width:30px src=img/update.png </a> |";
                                            echo "<a href='noticedelete.php?id=". $row['n_id'] ."' title='Delete Record' data-toggle='tooltip'><img style=width:35px src=img/delete.jpg </a>";
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