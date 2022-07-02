<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$q="select * from tbl_notice where file_id='$id'";
$resn=mysqli_query($dbCon,$q);
$rown=mysqli_fetch_array($resn);
unlink('notice/'.$rown['file_name']);
$query="delete from tbl_notice where file_id='$id'";
mysqli_query($dbCon,$query);
header("Location:notification.php");
?>