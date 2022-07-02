<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$q1="select pic from tbl_gallery where gal_id='$id'";
$resg=mysqli_query($dbCon,$q1);
$rowg=mysqli_fetch_array($resg);
unlink('gallery/'.$rowg['pic']);
$query="delete from tbl_gallery where gal_id='$id'";
mysqli_query($dbCon,$query);
header("Location:viewimages.php");
?>