<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$q="select * from tbl_aicte where doc_id='$id'";
$resn=mysqli_query($dbCon,$q);
$rown=mysqli_fetch_array($resn);
unlink('aicte/'.$rown['file']);
$query="delete from tbl_aicte where doc_id='$id'";
mysqli_query($dbCon,$query);
header("Location:aicte.php");
?>