<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from tbl_department where dept_id='$id'";
mysqli_query($dbCon,$query);
header("Location:department.php");
?>