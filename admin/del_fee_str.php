<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from fee_str where fee_str_id='$id'";
mysqli_query($dbCon,$query);
header("Location:fee_str.php");
?>