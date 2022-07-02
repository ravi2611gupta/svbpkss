<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from tbl_placement where s_id='$id'";
mysqli_query($dbCon,$query);
header("Location:ViewStu.php");
?>