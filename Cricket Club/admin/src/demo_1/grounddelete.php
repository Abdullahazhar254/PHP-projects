<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>    
</head>
<body>
<?php include 'dashboard.php';?>
<?php
    if(isset($_POST['btndelete']))
    {
        include "connection.php";
        $id=$_GET['id'];
        $query1 = "DELETE FROM ground_image WHERE gi_gid = '$id'";
        $result1 = mysqli_query($link, $query1);
        if($result1)
        {

            $query2 = "DELETE FROM ground WHERE g_id = '$id'";
            $result2 = mysqli_query($link, $query2);
            if($result2)
            {
                
                echo "<script>
        window.location.href='groundindex.php';
        </script>";
            }
        }
        else
        {
            echo "Try Again";
        }
        mysqli_close($link);
    }
    else{
        if(isset($_GET['id']))
        {
            include "connection.php";
            $id=$_GET['id'];
            $query = "SELECT * FROM ground WHERE g_id = '$id'";
            $result = mysqli_query($link, $query);
            if(mysqli_num_rows($result) == 1)
            {
                $row = mysqli_fetch_array($result , MYSQLI_ASSOC);
            }
            mysqli_close($link);
        }
    }
    

    if(isset($_POST['btnback']))
    {
        echo "<script>
        window.location.href='groundindex.php';
        </script>";
    }
?>
    
    <div class="col-lg-offset-3">
                        <form  method="post">
                            <div class="page-header">
                    
                            </div>
                        
                            <div  style="text-align:center">
                                <p>Are you sure you want to delete this record?</p><br>
                                <p>
                                    <input type="submit" name="btndelete" value="Yes" class="btn btn-danger" />
                                    <input type="submit" name="btnback" value="No" class="btn btn-success" />
                                </p>
                            </div>
                            
                            
                        <form>
                    </div>
                    <div class="col-lg-2"></div>
                </div>    
            <div class="col-lg-4"></div>
        </div>        
    </div>
    
</body>
</html>