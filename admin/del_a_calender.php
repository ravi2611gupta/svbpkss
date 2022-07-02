<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$q1="select acal_file from tbl_acal where acal_id='$id'";
$resg=mysqli_query($dbCon,$q1);
$rowg=mysqli_fetch_array($resg);
unlink('pdf/'.$rowg[0]);
$query="delete from tbl_acal where acal_id='$id'";
mysqli_query($dbCon,$query);
header("Location:a_calender.php");
?>