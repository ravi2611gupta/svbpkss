<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from tbl_contact where con_id='$id'";
mysqli_query($dbCon,$query);
header("Location:contact.php");
?>