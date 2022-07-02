<?php

include("connection.php");
$email=$_POST['email'];
$password=$_POST['pass'];
$query="select * from tbl_admin where email='$email' and password='$password'";
$res=mysqli_query($dbCon,$query);
$result=mysqli_num_rows($res);
if($row=mysqli_fetch_array($res)&& $result==1)
{
	session_start();
	$_SESSION['user']=$email;
	header("Location:dashboard.php");
}
else
{
	header("Location:index.php?msg=1");
}
?>