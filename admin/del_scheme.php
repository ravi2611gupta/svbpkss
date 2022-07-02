<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$q1="select scheme_file from tbl_scheme where scheme_id='$id'";
$resg=mysqli_query($dbCon,$q1);
$rowg=mysqli_fetch_array($resg);
unlink('scheme/'.$rowg[0]);
$query="delete from tbl_scheme where scheme_id='$id'";
mysqli_query($dbCon,$query);
header("Location:add_scheme.php");
?>