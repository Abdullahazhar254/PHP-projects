<?php 
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
 background-color: #2B2B2B;   
}

*{
    font-family: 'Raleway', sans-serif;
    color : #FFF;
    
}


div h3 span{
     color : #FFF;
     font-size:14px;
}

div span {
     font-weight: 200;
}

h1{
     font-weight: 200;
}

.login_box{
    background: #f32d27; /* Old browsers */
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMTAwJSIgeDI9IjEwMCUiIHkyPSIwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjUlIiBzdG9wLWNvbG9yPSIjZjMyZDI3IiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iOTklIiBzdG9wLWNvbG9yPSIjZmY2YjQ1IiBzdG9wLW9wYWNpdHk9IjEiLz4KICA8L2xpbmVhckdyYWRpZW50PgogIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjZ3JhZC11Y2dnLWdlbmVyYXRlZCkiIC8+Cjwvc3ZnPg==);
    background: -moz-linear-gradient(45deg,  #f32d27 5%, #ff6b45 99%); /* FF3.6+ */
    background: -webkit-gradient(linear, left bottom, right top, color-stop(5%,#f32d27), color-stop(99%,#ff6b45)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* Opera 11.10+ */
    background: -ms-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* IE10+ */
    background: linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f32d27', endColorstr='#ff6b45',GradientType=1 ); /* IE6-8 fallback on horizontal gradient */
    
    width:35%;
   /* height:70%; */
    position:absolute;
    top:15%;
    left:32.5%;
    
    -webkit-box-shadow: 0px 0px 8px 0px rgba(50, 50, 50, 0.54);
-moz-box-shadow:    0px 0px 8px 0px rgba(50, 50, 50, 0.54);
box-shadow:         0px 0px 8px 0px rgba(50, 50, 50, 0.54);
}

@media (max-width: 767px) {
    .login_box{
        background: #f32d27; /* Old browsers */
        /* IE9 SVG, needs conditional override of 'filter' to 'none' */
        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMTAwJSIgeDI9IjEwMCUiIHkyPSIwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjUlIiBzdG9wLWNvbG9yPSIjZjMyZDI3IiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iOTklIiBzdG9wLWNvbG9yPSIjZmY2YjQ1IiBzdG9wLW9wYWNpdHk9IjEiLz4KICA8L2xpbmVhckdyYWRpZW50PgogIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjZ3JhZC11Y2dnLWdlbmVyYXRlZCkiIC8+Cjwvc3ZnPg==);
        background: -moz-linear-gradient(45deg,  #f32d27 5%, #ff6b45 99%); /* FF3.6+ */
        background: -webkit-gradient(linear, left bottom, right top, color-stop(5%,#f32d27), color-stop(99%,#ff6b45)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* Opera 11.10+ */
        background: -ms-linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* IE10+ */
        background: linear-gradient(45deg,  #f32d27 5%,#ff6b45 99%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f32d27', endColorstr='#ff6b45',GradientType=1 ); /* IE6-8 fallback on horizontal gradient */
        
        width:90%;
        height:80%;
        position:absolute;
        top:10%;
        left:5%;
        
        -webkit-box-shadow: 0px 0px 8px 0px rgba(50, 50, 50, 0.54);
-moz-box-shadow:    0px 0px 8px 0px rgba(50, 50, 50, 0.54);
box-shadow:         0px 0px 8px 0px rgba(50, 50, 50, 0.54);
    }
}

.image-circle{
    border-radius: 50%;
    width: 175px;
    height: 175px;
    border: 4px solid #FFF;
    margin: 10px;
}

.follow{
    background-color:#FC563B;
    height: 80px;
    cursor:pointer;
}

.follow:hover {
    background-color:#F22F26;
    height: 80px;
    cursor:pointer;
}

.login_control{
    background-color:#FFF;
    padding:10px;
    
}

.control {
    color:#000;
    margin:10px;
}

.label {
    color: #EB4F26;
    font-size: 18px;
    font-weight: 500;
}

.form-control{
    color: #000000 !important;
    font-size: 25px;
    border: none;
    padding: 25px;
    padding-left: 10px;
    border-bottom: 1px solid #CCC;
    margin-bottom: 10px;
    outline: none;
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    box-shadow: none !important;
}

.form-control:focus{
    border-radius: 0px;
    border-bottom: 1px solid #FC563B;
    margin-bottom: 10px;
    outline: none;
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    box-shadow: none !important;
}

.btn-orange{
    background-color: #FC563B;
    border-radius: 0px;
    margin: 5px;
    padding: 5px;
    width: 150px;
    font-size: 20px;
    font-weight: inherit;
}

.btn-orange:hover {
    background-color: #F22F26;
    border-radius: 0px;
    margin: 5px;
    padding: 5px;
    width: 150px;
    font-size: 20px;
    font-weight: inherit;
    color:#FFF !important;
}

.line{
    border-bottom : 2px solid #F32D27;
}


.outter{
    padding: 0px;
    border: 1px solid rgba(255, 255, 255, 0.29);
    border-radius: 50%;
    width: 200px;
    height: 200px;
}

</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body style="background-image:url(bgs.png)">
<?php 

$mid=$_SESSION["id"];
?>  

<div class="container" >
	<div class="row login_box">
    <div class="line"><h3> </h3></div><br/>
    <a href="home.php"><img style="width:50px" src="images/back1.png" /></a>
    <div style="margin-left:120px"  class="outter"><br/><br/><br/><h2 style="margin-left:37px;width:150px" >Welcome</h2> </div>  
	    <div style="margin-left:50px;"  class="col-md-12 col-lg-offset-1 col-xs-12" align="center">
        
     
	        			
                    <?php
                        
                        include "connection.php";
                        $query = "SELECT m.m_id,m.m_cnic,m.m_email,m.m_firstname,m.m_lastname,m.m_username,m.m_password,p.p_role,m.m_card FROM member m JOIN packages p ON m.p_role=p.p_id where m.m_id='$mid'";
                        $result = mysqli_query($link, $query);
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<div class=col-sm-9 style=font-family:Consolas>";
                                            echo "<h4  class=column100 column3 data-column=column3>Email:" . $row['m_email'] . "</h4>";
                                            echo "<h4 class=column100 column4 data-column=column4>First Name:" . $row['m_firstname'] . "</h4>";
                                            echo "<h4 class=column100 column5 data-column=column5>Last Name:" . $row['m_lastname'] . "</h4>";
                                            echo "<h4 class=column100 column5 data-column=column5>User Name:" . $row['m_username'] . "</h4>";
                                            echo "<h4 class=column100 column6 data-column=column6>Package:" . $row['p_role'] . "</h4>";

                                           
                                            
                                            
                                      
                                    }
                            } 
                        } else{
                            echo "Failed";
                        }
                        mysqli_close($link);
                        ?>
                            <div class="line"><h3> </h3></div>
                    <?php
                        
                        include "connection.php";
                        $query = "SELECT gb.gb_id,gb.gb_member,m.m_username,g.g_name,gb.gb_date,gs.gs_status,gb.g_card FROM ground_booking gb JOIN member m ON gb.gb_member = m.m_id JOIN ground g ON gb.gb_ground = g.g_id JOIN ground_status gs ON gb.gb_status = gs.gs_id where gb.gb_member='$mid'";
                        $result = mysqli_query($link, $query);
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        
                                            echo"<br/>";
                                            echo "<h4 class=column100 column3 data-column=column3>Ground Name:" . $row['g_name'] . "</h4>";
                                            echo "<h4 class=column100 column4 data-column=column4>Date:" . $row['gb_date'] . "</h4>";
                                            echo "<h4 class=column100 column4 data-column=column4>Status:" . $row['gs_status'] . "</h4>";
											
                                    }
                            } 
                        } else{
                            echo "Failed";
                        }
                        mysqli_close($link);
                        ?>
    <div class="line"><h3> </h3></div>
<?php                   
                        include "connection.php";
                        $query = "SELECT bf.bf_id,bf.bf_member,m.m_username,b.b_name FROM batch_form bf JOIN member m ON bf.bf_member = m.m_id JOIN batch b ON bf.bf_batch = b.b_id where bf.bf_member='$mid' " ;
                        $result = mysqli_query($link, $query);
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_array($result)){
                                        echo"<br/>";
                                            echo "<h4 class=column100 column4 data-column=column4>Batch:" . $row['b_name'] . "</h4>";
                                            
                                     
                                    }
                            } 
                        } else{
                            echo "Failed";
                        }
                        mysqli_close($link);
                 ?>






                        </div>
	        					</div>
	        				</div>
                                       
</body>
</html>