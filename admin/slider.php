<?php
$text1=$_POST['text1'];
$text2=$_POST['text2'];
//echo $notice;
$file=$_FILES['file']['name'];
//echo $file;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$type=$_FILES['file']['type'];
//echo $type;
$size=$_FILES['file']['size'];
//echo $size;
if($type=='image/jpeg' or $type=='image/png')
{
$location="slider/";
include("connection.php");
$query="insert into tbl_slider(text1,text2,pic,date) values('$text1','$text2','$file',curdate())";
//echo $query;
mysqli_query($dbCon,$query);
move_uploaded_file($tmp_name,$location.$file);
header("Location:viewslider.php");
}
else
{
	echo "<script>
	window.alert('Pls select correct file type');
	window.location.href='addslider.php'
	</script>";
}
?>