<?php
$text1=$_POST['text1'];
$text2=$_POST['text2'];
$ty=$_POST['type'];
//echo $notice;
$file=$_FILES['file']['name'];
$new_file = $ty.rand(0000, 9999).$file;
//echo $file;
$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;
$type=$_FILES['file']['type'];
//echo $type;
$size=$_FILES['file']['size'];
//echo $size;


if($ty==""){

	echo "<script>
		window.alert('Pls select type of image');
		window.location.href='addimage.php'
		</script>";

}else{
	if($type=='image/jpeg' or $type=='image/png')
	{
		$location="gallery/";
		include("connection.php");
		$query="insert into tbl_gallery(text1,text2,pic,type,date) values('$text1','$text2','$new_file','$ty',curdate())";
		//echo $query;
		mysqli_query($dbCon,$query);
		move_uploaded_file($tmp_name,$location.$new_file);
		header("Location:viewimages.php");
	}
	else
	{
		echo "<script>
		window.alert('Pls select correct file type');
		window.location.href='addimage.php'
		</script>";
	}
}

?>