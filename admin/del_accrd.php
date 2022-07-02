<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$q1="select file from tbl_accreditation where ac_id='$id'";
$resg=mysqli_query($dbCon,$q1);
$rowg=mysqli_fetch_array($resg);
unlink('accreditation/'.$rowg[0]);
$query="delete from tbl_accreditation where ac_id='$id'";
mysqli_query($dbCon,$query);
header("Location:add_accrd.php");
?>