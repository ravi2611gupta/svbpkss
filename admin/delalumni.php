<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$q="select * from tbl_alumni where id='$id'";
$resn=mysqli_query($dbCon,$q);
$rown=mysqli_fetch_array($resn);
unlink('alcv/'.$rown['file']);
unlink('alpic/'.$rown['pic']);
$query="delete from tbl_alumni where id='$id'";
mysqli_query($dbCon,$query);
header("Location:alumni.php");
?>