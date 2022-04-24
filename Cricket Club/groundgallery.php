<?php
include "connection.php";
$query = "SELECT * FROM ground";

?>
<!DOCTYPE html>
<html>
   
<head>
<?php include 'links.php'?>
    <?php include 'header.php'?>
<meta charset="UTF-8">
    <title></title>
  
    <style type="text/css">



div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
    
</head>
    

<body style="background-image:url(bgs2.png)">
 



            <?php
include "connection.php";
  
$query = "SELECT * FROM ground";
$result = mysqli_query($link, $query);
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        $name=$row['g_name'];
                                        $amount=$row['g_amount'];
                                        $detail=$row['g_detail'];
                                        $id=$row['g_id'];
                                        
                            $query1 = "SELECT * FROM ground_image where gi_gid='$id' LIMIT 0,1";
                            $result1 = mysqli_query($link, $query1);
                                                    if($result1){
                                                        if(mysqli_num_rows($result1) > 0){
                                                                while($row = mysqli_fetch_array($result1)){

                                                                    $img=$row['gi_image'];

                                    
?>


<?php echo "<a  href='groundslider.php?id=".$id." data-toggle='tooltip'  class='btn btn-green'> ";?> 
<div class="gallery"><img alt="Ground" width="800" height="600"   src="images/<?php echo $img; ?>" alt="" />  

<div style="background-color:grey;" class="desc"><?php echo $name ?></div>

</div>

 
       
   
           
            <?php 
                    }
                } 
            } else{
                echo "Failed";
            }
            
?>
               
                
                
                
                
            </div>
        
        <?php 
                    }
                } 
            } else{
                echo "Failed";
            }
            mysqli_close($link);
            ?>
        
            
            
    </div>
</div>

<?php include 'footer.php';?>
                 <?php include 'scripts.php';?>	
</body>