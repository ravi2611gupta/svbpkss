<?php
$notice=$_POST['notice'];
//echo $notice;
$file=$_FILES['file']['name'];
//echo $file;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$type=$_FILES['file']['type'];
//echo $type;
$size=$_FILES['file']['size'];
//echo $size;
if($type=='application/pdf' or $type=='image/jpeg' or $type=='image/png')
{
$location="notice/";
$filename=date("d-m-Y")."-".rand(0,9).rand(0,9)."-".$file;

include("connection.php");
$query="insert into tbl_notice(notice,file_name,date) values('$notice','$filename',now())";
//echo $query;
mysqli_query($dbCon,$query);
move_uploaded_file($tmp_name,$location.$filename);
header("Location:notification.php");
}
else
{
	echo "<script>
	window.alert('Pls select correct file type');
	window.location.href='notification.php'
	</script>";
}
?>