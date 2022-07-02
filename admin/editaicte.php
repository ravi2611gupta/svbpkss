<?php
include("connection.php");
if(isset($_POST['aicteedit']))
{
	      $docid=$_POST['d_id'];
		  $title=$_POST['titleedit'];
		  $filetype=$_FILES['file']['type'];
		 // echo $filetype;
		  //exit();
	  $filename=$_FILES['file']['name'];
	  $tmp_name=$_FILES['file']['tmp_name'];
	  			$file_new_name='aicte-'.rand(0,9).rand(0,9).rand(0,9).$filename;
	 // echo $filename;
	  //exit();
	  if($filetype=='application/pdf')
	  {
		  if(move_uploaded_file($tmp_name,'aicte/'.$file_new_name))
		  { 
			  
			  $qc="select file from tbl_aicte where doc_id='$docid'";
			  $resc=mysqli_query($dbCon,$qc);
			  $rowc=mysqli_fetch_array($resc);
			  unlink('aicte/'.$rowc['file']);
			  
			  $query="update tbl_aicte set title='$title',file='$file_new_name' where doc_id='$docid'";
	        //echo $query;
	        //exit();
	           mysqli_query($dbCon,$query);
			   	  header("location:aicte.php");
			  
		  }
	  }
	  else
	  {
		  header('location:aicte.php?msg?Please Choose Correct File Type');
	  }
	  
	  
	 

	 
}

?>