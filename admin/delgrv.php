<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$q="select * from tbl_grievance where g_id='$id'";
$resn=mysqli_query($dbCon,$q);
$rown=mysqli_fetch_array($resn);
$query="delete from tbl_grievance where g_id='$id'";
mysqli_query($dbCon,$query);
header("Location:grievance.php");
?>