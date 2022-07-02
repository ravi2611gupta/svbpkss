<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$q1="select * from tbl_slider where slider_id='$id'";
$ress=mysqli_query($dbCon,$q1);
$rows=mysqli_fetch_array($ress);
unlink('slider/'.$rows['pic']);
$query="delete from tbl_slider where slider_id='$id'";
mysqli_query($dbCon,$query);
header("Location:viewslider.php");
?>