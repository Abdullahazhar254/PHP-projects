<?php
include 'connection.php';

session_start();
$batchId=$_GET['id'];
$m_Id=$_SESSION['id'];
// $sql="SELECT * from member where m_id='$m_Id'";
// $result=mysqli_query($link,$sql);
// $row=mysqli_fetch_row($result);
$query="INSERT into batch_form (bf_member,bf_batch) values ('$m_Id','$batchId')";
$result=mysqli_query($link,$query);
if($result==true)
{
    echo "<script> alert('Congratulations You Are Enrolled In This Batch');
    window.location.href='home.php';
    </script>";
    
}else
{
    echo mysqli_error($link);
    echo "<script> alert('Fail')</script>";
}
?>

