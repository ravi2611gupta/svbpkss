<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$q="select * from tbl_rag where rag_id='$id'";
$resn=mysqli_query($dbCon,$q);
$rown=mysqli_fetch_array($resn);
$query="delete from tbl_rag where rag_id='$id'";
mysqli_query($dbCon,$query);
header("Location:rag.php");
?>