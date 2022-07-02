<?php
$dept=$_POST['dept'];
include("connection.php");
$query="insert into tbl_department(dept_name,date) values ('$dept',curdate())";
mysqli_query($dbCon,$query);
header("Location:department.php");
?>
