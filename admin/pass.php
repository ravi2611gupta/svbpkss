<?php
session_start();
if($_SESSION['user']=="")
{
session_destroy();
header("Location:index.php?msg=3");	
}
$email=$_SESSION['user'];
include("connection.php");
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
//echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;
$query="select * from tbl_admin where email='$email'";
$res=mysqli_query($dbCon,$query);
if($row=mysqli_fetch_array($res))
{
	$pp=$row['password'];
	//echo $pp;
}
if($op==$pp)
{
		if($op==$np)
		{
			header("Location:change.php?flg=2");
		}
		else if($np==$cnp)
		{
			$query2="update tbl_admin set password='$cnp' where email='$email'";
			mysqli_query($dbCon,$query2);
			session_destroy();
			header("Location:index.php?msg=4");
		}
		else
		{
			header("Location:change.php?flg=3");
		}
}
else
{
	header("Location:change.php?flg=1");
}
?>