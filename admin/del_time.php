<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$q1="select time_table_file from time_table where t_id='$id'";
$resg=mysqli_query($dbCon,$q1);
$rowg=mysqli_fetch_array($resg);
unlink('pdf/'.$rowg[0]);
$query="delete from time_table where t_id='$id'";
mysqli_query($dbCon,$query);
header("Location:time_table.php");
?>