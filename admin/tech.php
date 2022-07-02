<?php
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$dept=$_POST['dept'];
$desig=$_POST['designation'];
$quali=$_POST['quali'];
$address=$_POST['address'];
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
$location="teacher/";
include("connection.php");
$query="insert into tbl_teacher(name,fname,dob,gender,mobile,email,dept_id,designation,qualification,address,pic,dor) values('$name','$fname','$dob','$gender','$mobile','$email','$dept','$desig','$quali','$address','$file',now())";
//echo $query;
mysqli_query($dbCon,$query);
move_uploaded_file($tmp_name,$location.$file);
header("Location:viewteacher.php");
}
else
{
    echo "<script>
	window.alert('Pls select correct file type');
	window.location.href='addteacher.php'
	</script>";
}
?>