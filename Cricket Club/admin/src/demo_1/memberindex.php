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
                   


    
            <div class="col-lg-10 ">
                <div class="page-header ">
                    <h2 class="col-lg-12 col-lg-offset-1" style="text-align:center">Member Details</h2>
                </div>
     
                    
      

                <div class="table100 ver6 m-b-110" style="width:1130px">
                    <table data-vertable="ver6">
                        <thead>
                                    <tr class="row100 head">
                                        <th class="column100 column2" data-column="column2">ID</th>
                                        <th class="column100 column6" data-column="column3">CNIC</th>
                                        <th class="column100 column3" data-column="column3">EMAIL</th>
                                        <th class="column100 column4" data-column="column4">FIRSTNAME</th>
                                        <th class="column100 column5" data-column="column5">LASTNAME</th>
                                        <th class="column100 column5" data-column="column5">USERNAMENAME</th>
                                        <th class="column100 column1" data-column="column1">PASSWORD</th>
                                        <th class="column100 column5" data-column="column5">ROLE</th>
                                        <th class="column100 column5" data-column="column6">Credit Card Number</th>
                                        <th class="column100 column2" data-column="column2">Update/Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                        <?php
                        
                        include "connection.php";
                        $query = "SELECT m.m_id,m.m_cnic,m.m_email,m.m_firstname,m.m_lastname,m.m_username,m.m_password,p.p_role,m.m_card FROM member m JOIN packages p ON m.p_role=p.p_id";
                        $result = mysqli_query($link, $query);
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr class=row100>";
                                            echo "<td class=column100 column2 data-column=column2>" . $row['m_id'] . "</td>";
                                            echo "<td class=column100 column6 data-column=column2>" . $row['m_cnic'] . "</td>";
                                            echo "<td class=column100 column3 data-column=column3>" . $row['m_email'] . "</td>";
                                            echo "<td class=column100 column4 data-column=column4>" . $row['m_firstname'] . "</td>";
                                            echo "<td class=column100 column5 data-column=column5>" . $row['m_lastname'] . "</td>";
                                            echo "<td class=column100 column5 data-column=column5>" . $row['m_username'] . "</td>";
                                            echo "<td class=column100 column6 data-column=column6>" . $row['m_password'] . "</td>";
                                            echo "<td class=column100 column6 data-column=column6>" . $row['p_role'] . "</td>";
                                            echo "<td class=column100 column6 data-column=column6>" . $row['m_card'] . "</td>";
                                           
                                            
                                            echo "<td>";
                                            echo "<a href='memberupdate.php?id=". $row['m_id'] ."' title='Update Record' data-toggle='tooltip'> <img style=width:30px src=img/update.png </a> |";
                                            echo "<a href='memberdelete.php?id=". $row['m_id'] ."' title='Delete Record' data-toggle='tooltip'><img style=width:35px src=img/delete.jpg </a>";
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

    
</body>
</html>