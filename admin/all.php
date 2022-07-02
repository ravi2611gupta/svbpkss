<?php 
require_once("connection.php"); 
if(isset($_POST['save']))
{
    $content=$_POST["editor"];
    $content=mysqli_real_escape_string($dbCon,$content);
    $added_on=date('Ymdhis');
    $pimg=$_FILES['pimg']['name'];
    $dest="img/".$added_on.$pimg;
    move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
    $sql="insert into about_us(p_msg, added_on, pic)
     values('$content','$added_on','$dest')";
    $query_run= mysqli_query($dbCon, $sql);
    if($query_run)
    {
        header("location:home.php");
        echo "Data Save";
    }
    else{
        echo "Pleaase try again";
    }
}
if(isset($_POST['update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
       
        $sql="update about_us set p_msg='$content' where flag='p'";
        //var_dump($sql);
        //echo $sql;
        $query_run=mysqli_query($dbCon, $sql);
        //var_dump($query_run);
        if($query_run)
        {
            header("location: principle_desk.php");
        }
    }
   
    //Previous Principle
    if(isset($_POST['previous_principle']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
       
        $sql="update about_us set p_msg='$content' where flag='pp'";
        var_dump($sql);
        //echo $sql;
        $query_run=mysqli_query($dbCon, $sql);
        //var_dump($query_run);
        if($query_run)
        {
            header("location: prev_principle.php");
        }
    }

    //About College
    if(isset($_POST['abtc_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update about_us set p_msg='$content', added_on='$added_on' where flag='abtc'";
        //var_dump($sql);
        //echo $sql;
        $query_run=mysqli_query($dbCon, $sql);
        //var_dump($query_run);
        if($query_run)
        {
            header("location: about_clg.php");
        }
    }
	//About College image
	if(isset($_POST['abtc_update_img']))
    {
        
        $added_on=date('Ymdhis');
   
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
    
     move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update about_us set pic='$dest', added_on='$added_on' where flag='abtc'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: about_clg.php");
        }
    }
	
	//Department Science College
    if(isset($_POST['s_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update tbl_dep set p_msg='$content', added_on='$added_on' where flag='s'";
        //var_dump($sql);
        //echo $sql;
        $query_run=mysqli_query($dbCon, $sql);
        //var_dump($query_run);
        if($query_run)
        {
            header("location: science.php");
        }
    }

	//Department Science image
	if(isset($_POST['s_update_img']))
    {
        $added_on=date('Ymdhis');
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
        move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update tbl_dep set pic='$dest', added_on='$added_on' where flag='s'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: science.php");
        }
    }
	
	//Department arts College
    if(isset($_POST['a_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update tbl_dep set p_msg='$content', added_on='$added_on' where flag='a'";
        //var_dump($sql);
        //echo $sql;
        $query_run=mysqli_query($dbCon, $sql);
        //var_dump($query_run);
        if($query_run)
        {
            header("location: arts.php");
        }
    }

	//Department arts image
	if(isset($_POST['a_update_img']))
    {
        $added_on=date('Ymdhis');
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
        move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update tbl_dep set pic='$dest', added_on='$added_on' where flag='a'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: arts.php");
        }
    }
	
	//Department Commerce College
    if(isset($_POST['com_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update tbl_dep set p_msg='$content', added_on='$added_on' where flag='com'";
        //var_dump($sql);
        //echo $sql;
        $query_run=mysqli_query($dbCon, $sql);
        //var_dump($query_run);
        if($query_run)
        {
            header("location: commerce.php");
        }
    }

	//Department Commerce image
	if(isset($_POST['com_update_img']))
    {
        $added_on=date('Ymdhis');
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
        move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update tbl_dep set pic='$dest', added_on='$added_on' where flag='com'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: commerce.php");
        }
    }
	
	//Department Law College
    if(isset($_POST['law_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update tbl_dep set p_msg='$content', added_on='$added_on' where flag='law'";
        //var_dump($sql);
        //echo $sql;
        $query_run=mysqli_query($dbCon, $sql);
        //var_dump($query_run);
        if($query_run)
        {
            header("location: law.php");
        }
    }

	//Department Law image
	if(isset($_POST['law_update_img']))
    {
        $added_on=date('Ymdhis');
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
        move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update tbl_dep set pic='$dest', added_on='$added_on' where flag='law'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: law.php");
        }
    }
	
	//Department Education College
    if(isset($_POST['edu_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update tbl_dep set p_msg='$content', added_on='$added_on' where flag='edu'";
        //var_dump($sql);
        //echo $sql;
        $query_run=mysqli_query($dbCon, $sql);
        //var_dump($query_run);
        if($query_run)
        {
            header("location: education.php");
        }
    }

	//Department Education image
	if(isset($_POST['edu_update_img']))
    {
        $added_on=date('Ymdhis');
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
        move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update tbl_dep set pic='$dest', added_on='$added_on' where flag='edu'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: education.php");
        }
    }
	
	//Admission content
    if(isset($_POST['ad_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update tbl_academics set p_msg='$content', added_on='$added_on' where flag='ad'";
        //var_dump($sql);
        //echo $sql;
        $query_run=mysqli_query($dbCon, $sql);
        //var_dump($query_run);
        if($query_run)
        {
            header("location: adm.php");
        }
    }

	//Admission  image
	if(isset($_POST['ad_update_img']))
    {
        $added_on=date('Ymdhis');
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
        move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update tbl_academics set pic='$dest', added_on='$added_on' where flag='ad'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: adm.php");
        }
    }
	
	
	//Courses content
    if(isset($_POST['co_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update tbl_academics set p_msg='$content', added_on='$added_on' where flag='co'";
        //var_dump($sql);
        //echo $sql;
        $query_run=mysqli_query($dbCon, $sql);
        //var_dump($query_run);
        if($query_run)
        {
            header("location: courses.php");
        }
    }

	//Courses  image
	if(isset($_POST['co_update_img']))
    {
        $added_on=date('Ymdhis');
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
        move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update tbl_academics set pic='$dest', added_on='$added_on' where flag='co'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: courses.php");
        }
    }
	
	
	 //Principal content
    if(isset($_POST['p_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update about_us set p_msg='$content', added_on='$added_on' where flag='p'";
        //var_dump($sql);
        //echo $sql;
        $query_run=mysqli_query($dbCon, $sql);
        //var_dump($query_run);
        if($query_run)
        {
            header("location: principle_desk.php");
        }
    }

	//Principal image
	if(isset($_POST['p_update_img']))
    {
        $added_on=date('Ymdhis');
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
        move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update about_us set pic='$dest', added_on='$added_on' where flag='p'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: principle_desk.php");
        }
    }
	
	//vc content
    if(isset($_POST['vc_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update about_us set p_msg='$content', added_on='$added_on' where flag='vc'";
        //var_dump($sql);
        //echo $sql;
        $query_run=mysqli_query($dbCon, $sql);
        //var_dump($query_run);
        if($query_run)
        {
            header("location: vc.php");
        }
    }

	//vc image
	if(isset($_POST['vc_update_img']))
    {
        $added_on=date('Ymdhis');
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
        move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update about_us set pic='$dest', added_on='$added_on' where flag='vc'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: vc.php");
        }
    }
	
	//student support menu
	
	
	//regulation content
    if(isset($_POST['rr_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update student_support set p_msg='$content', added_on='$added_on' where flag='rr'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: rules_regulation.php");
        }
    }

	//regulation image
	if(isset($_POST['rr_img']))
    {
        $added_on=date('Ymdhis');   
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
        move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update student_support set pic='$dest', added_on='$added_on' where flag='rr'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: rules_regulation.php");
        }
    }
	
	
	//ncc content
    if(isset($_POST['ncc_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update student_support set p_msg='$content', added_on='$added_on' where flag='ncc'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: ncc.php");
        }
    }

	//ncc image
	if(isset($_POST['ncc_img']))
    {
        $added_on=date('Ymdhis');   
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
        move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update student_support set pic='$dest', added_on='$added_on' where flag='ncc'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: ncc.php");
        }
    }
	
	//nss content
    if(isset($_POST['nss_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update student_support set p_msg='$content', added_on='$added_on' where flag='nss'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: nss.php");
        }
    }

	//nss image
	if(isset($_POST['nss_img']))
    {
        $added_on=date('Ymdhis');   
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
        move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update student_support set pic='$dest', added_on='$added_on' where flag='nss'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: nss.php");
        }
    }
	
	//canteen content
    if(isset($_POST['c_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update student_support set p_msg='$content', added_on='$added_on' where flag='c'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: canteen.php");
        }
    }

	//canteen image
	if(isset($_POST['c_img']))
    {       
        $added_on=date('Ymdhis');   
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
		move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update student_support set pic='$dest', added_on='$added_on' where flag='c'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: canteen.php");
        }
    }
	
	//hostel content
    if(isset($_POST['h_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update student_support set p_msg='$content', added_on='$added_on' where flag='h'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: hostel.php");
        }
    }

	//hostel image
	if(isset($_POST['h_img']))
    {
        $added_on=date('Ymdhis');   
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
		move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update student_support set pic='$dest', added_on='$added_on' where flag='h'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: hostel.php");
        }
    }
	
	//club content
    if(isset($_POST['cl_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update student_support set p_msg='$content', added_on='$added_on' where flag='cl'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: club.php");
        }
    }

	//club image
	if(isset($_POST['cl_img']))
    {
        $added_on=date('Ymdhis');   
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
		move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update student_support set pic='$dest', added_on='$added_on' where flag='cl'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: club.php");
        }
    }
	
	//24*7 internet content
    if(isset($_POST['in_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update student_support set p_msg='$content', added_on='$added_on' where flag='in'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: internet.php");
        }
    }

	//24*7 internet image
	if(isset($_POST['in_img']))
    {
        $added_on=date('Ymdhis');   
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
		move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update student_support set pic='$dest', added_on='$added_on' where flag='in'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: internet.php");
        }
    }
	
	//Placement / Career Councelling Cell content
    if(isset($_POST['pcl_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update commitee_cell set p_msg='$content', added_on='$added_on' where flag='pcl'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: pcell.php");
        }
    }
	
	//College Development Cell content
    if(isset($_POST['cdc_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update commitee_cell set p_msg='$content', added_on='$added_on' where flag='cdc'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: cdcell.php");
        }
    }
	
	//Disciplinary / Admission Cell content
    if(isset($_POST['dac_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update commitee_cell set p_msg='$content', added_on='$added_on' where flag='dac'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: admcell.php");
        }
    }
	
	//Grievance Redressal / Anti Ragging Cell content
    if(isset($_POST['grc_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update commitee_cell set p_msg='$content', added_on='$added_on' where flag='grc'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: gcell.php");
        }
    }
	
	//Internal Quality Assurance (IQAC) Cell content
    if(isset($_POST['iqac_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update commitee_cell set p_msg='$content', added_on='$added_on' where flag='iqac'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: iqacell.php");
        }
    }
	
	//Advisory Committee for Central Library content
    if(isset($_POST['acfcl_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update commitee_cell set p_msg='$content', added_on='$added_on' where flag='acfcl'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: librarycell.php");
        }
    }
	
	//Women Cell / Anti Sexual Harassment Cell content
    if(isset($_POST['wchc_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update commitee_cell set p_msg='$content', added_on='$added_on' where flag='wchc'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: wcell.php");
        }
    }
	
	//Steering Committee for NAAC content
    if(isset($_POST['scfn_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update commitee_cell set p_msg='$content', added_on='$added_on' where flag='scfn'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: naacell.php");
        }
    }
	
	//update time table
    if(isset($_POST['time-table']))
    {
        $session=$_POST["session"];
        $ty=$_POST["type"];
        $date=$_POST["date"];
        $added_on=date('Ymdhis');
        $pdf=$_FILES['pdf']['name'];
        $type=$_FILES['pdf']['type'];
        $dest="pdf/".$added_on.$pdf;


        if($ty == ""){
            echo "<script>
                    window.alert('Pls select type');
                    window.location.href='time_table.php';</script>";
        }else{
            move_uploaded_file($_FILES["pdf"]["tmp_name"],$dest);
            if($type=='application/pdf' or $type=='application/vnd.openxmlformats-officedocument.wordprocessingml.document')
            {	
                include("connection.php");
                $sql="insert into time_table(time_table_file, type, date, added_on, session)
                values('$dest','$ty', '$date', '$added_on', '$session')";
                $query_run= mysqli_query($dbCon, $sql);
                if($query_run)
                {
                    header("location:time_table.php");
                    echo "Data Save";
                }
            }
            else
                {
                    echo "<script>
                    window.alert('Pls select correct file type');
                    window.location.href='time_table.php';</script>";
                }
        }
        
    }
	
	
	//update accreditation
    if(isset($_POST['accrdsub']))
    {
        $session=$_POST["session"];
        $ty=$_POST["type"];
        $date=$_POST["date"];
        $pdf=$_FILES['pdf']['name'];
        $type=$_FILES['pdf']['type'];
        $dest=$ty.rand(0000, 9999).$pdf;


        if($ty == ""){
            echo "<script>
                    window.alert('Pls select govt. body');
                    window.location.href='add_accrd.php';</script>";
        }else{
            move_uploaded_file($_FILES["pdf"]["tmp_name"],"accreditation/".$dest);
            if($type=='application/pdf' or $type=='application/vnd.openxmlformats-officedocument.wordprocessingml.document')
            {	
                include("connection.php");
                $sql="insert into tbl_accreditation(file, type, date, session, added_on)
                values('$dest','$ty', '$date', '$session', now())";
                $query_run= mysqli_query($dbCon, $sql);
                if($query_run)
                {
                    header("location:add_accrd.php");
                    echo "Data Save";
                }
            }
            else
                {
                    echo "<script>
                    window.alert('Pls select correct file type');
                    window.location.href='add_accrd.php';</script>";
                }
        }
        
    }
	
	
	//SSR
    if(isset($_POST['ssr_upload']))
    {
        $session=$_POST["session"];
        $added_on=date('Ymdhis');
        $pdf=$_FILES['pdf']['name'];
        $type=$_FILES['pdf']['type'];
        $dest="pdf/".$added_on.$pdf;
        move_uploaded_file($_FILES["pdf"]["tmp_name"],$dest);
        if($type=='application/pdf' or $type=='application/vnd.openxmlformats-officedocument.wordprocessingml.document')
        {	include("admin/connection.php");
            $sql="insert into ssr(ssr_file, added_on, session)
            values('$dest','$added_on', '$session')";
            $query_run= mysqli_query($dbCon, $sql);
            if($query_run)
            {
                header("location:ssr.php");
                echo "Data Save";
            }
        }
        else
                {
                    echo "<script>
                    window.alert('Pls select correct file type');
                    window.location.href='ssr.php';
                    </script>";
                }
    }
	
	 //aqar
    if(isset($_POST['aqar_upload']))
    {
        $content=$_POST["aqar_session"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $pdf=$_FILES['pdf']['name'];
        $type=$_FILES['pdf']['type'];
        //echo $type;
        $dest="pdf/".$added_on.$pdf;
        move_uploaded_file($_FILES["pdf"]["tmp_name"],$dest);
        if($type=='application/pdf' or $type=='application/vnd.openxmlformats-officedocument.wordprocessingml.document')
        {
                $sql="insert into aqar (aqar_file, added_on,aqar_session)
                 values('$dest','$added_on','$content')";
                $query_run= mysqli_query($dbCon, $sql);
                if($query_run)
                {
                    header("location:aqar.php");
                    echo "Data Save";
                }
                
        }
        else
                {
                    echo "<script>
                    window.alert('Pls select correct file type');
                    window.location.href='aqar.php';
                    </script>";
                }
    }
	
	//fee_str
    if(isset($_POST['fee_str_upload']))
    {
        $session=$_POST["session"];
        $added_on=date('Ymdhis');
        $pdf=$_FILES['pdf']['name'];
        $type=$_FILES['pdf']['type'];
        $dest="pdf/".$added_on.$pdf;
        move_uploaded_file($_FILES["pdf"]["tmp_name"],$dest);
        
        if($type=='application/pdf' or $type=='application/vnd.openxmlformats-officedocument.wordprocessingml.document')
        {	include("admin/connection.php");
            $sql="insert into fee_str(fee_str_file, added_on, session)
            values('$dest','$added_on', '$session')";
            $query_run= mysqli_query($dbCon, $sql);
            if($query_run)
            {
                header("location:fee_str.php");
                echo "Data Save";
            }
        }
        else
                {
                    echo "<script>
                    window.alert('Pls select correct file type');
                    window.location.href='fee_str.php';
                    </script>";
                }
    }
	
	//academic calender
    if(isset($_POST['acal_upload']))
    {
        $session=$_POST["session"];
        $added_on=date('Ymdhis');
        $pdf=mysqli_real_escape_string($dbCon,$_FILES['pdf']['name']);
        $type=$_FILES['pdf']['type'];
        $dest="pdf/".$added_on.$pdf;
        move_uploaded_file($_FILES["pdf"]["tmp_name"],$dest);
          
        if($type=='application/pdf' or $type=='application/vnd.openxmlformats-officedocument.wordprocessingml.document')
        {	
            include("connection.php");
            $sql="insert into tbl_acal(acal_file, added_on, session) values('$dest','$added_on', '$session')";
           // echo $sql;
            $query_run= mysqli_query($dbCon, $sql);
            if($query_run)
            {
                header("location:a_calender.php");
                echo "Data Save";
            }
        }
        else
                {
                    echo "<script>
                    window.alert('Pls select correct file type');
                    window.location.href='a_calender.php';
                    </script>";
                }
    }
	
	
	//Scheme calender
    if(isset($_POST['scheme_upload']))
    {
        $session=$_POST["session"];
        $standard=$_POST["stand"];
        $pdf=mysqli_real_escape_string($dbCon,$_FILES['pdf']['name']);
        $type=$_FILES['pdf']['type'];
        $dest=$session."-".$standard."-".$pdf;
        move_uploaded_file($_FILES["pdf"]["tmp_name"],"scheme/".$dest);
          
        if($type=='application/pdf' or $type=='application/vnd.openxmlformats-officedocument.wordprocessingml.document')
        {	
            include("connection.php");
            $sql="insert into tbl_scheme(scheme_file, added_on, session, standard) values('$dest',now(), '$session', '$standard')";
           // echo $sql;
            $query_run= mysqli_query($dbCon, $sql);
            if($query_run)
            {
                header("location:add_scheme.php");
                echo "Data Save";
            }
        }
        else
                {
                    echo "<script>
                    window.alert('Pls select correct file type');
                    window.location.href='add_scheme.php';
                    </script>";
                }
    }
	
	//acheivement content
    if(isset($_POST['ach_update']))
    {
        $content=$_POST["editor"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $added_on=date('Ymdhis');
        $sql="update about_us set p_msg='$content', added_on='$added_on' where flag='ach'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: achivement.php");
        }
    }
	//acheivement image
	if(isset($_POST['ach_img']))
    {
        $added_on=date('Ymdhis');   
		$pimg=$_FILES['pimg']['name'];
		$dest="img/".$added_on.$pimg;
		move_uploaded_file($_FILES["pimg"]["tmp_name"],$dest);
        $sql="update about_us set pic='$dest', added_on='$added_on' where flag='ach'";
        $query_run=mysqli_query($dbCon, $sql);
        if($query_run)
        {
            header("location: achivement.php");
        }
    }
	
	
	//contact details update
    if(isset($_POST['contact_update']))
    {   
        $content=$_POST["address"];
        $content=mysqli_real_escape_string($dbCon,$content);
        $phone=$_POST["phone"];
        $mobile=$_POST["mobile"];
        $email=$_POST["email"];
        $email=mysqli_real_escape_string($dbCon,$email);
        $gmap=$_POST["map"];
        $gmap=mysqli_real_escape_string($dbCon,$gmap);
        $sql="update contact_details set con_address='$content', phone='$phone', mobile='$mobile', email='$email', gmap='$gmap' where flag='con'";
        //var_dump($sql);
        //echo $sql;
        $query_run=mysqli_query($dbCon, $sql);
        //var_dump($query_run);
        if($query_run)
        {
            header("location:contact_details.php");
        }
    }






    // Update department name
    if(isset($_POST['Editdeptname']))
    {
        $depname=$_POST['deptname'];
        $id=$_POST['id'];
        $query="update tbl_department set dept_name='$depname' where dept_id='$id'";
        $res=mysqli_query($dbCon,$query);
        if($res!=null)
        {
            header("location:department.php?msg=!! Department Updated Successfully !!");
        }
        else
        {
            header("location:department.php?msg=!! Department not updated at this time !!");
        }
    }
	






    // Update teacher info 
    if(isset($_POST['Editteacher']))
    {
        $id=$_POST['t_id'];

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
       //echo $_FILES['file']['type'];

            if(empty($_FILES['file']['name']))
            {
                    $q="update tbl_teacher set name=' $name', dob='$dob', fname='$fname', gender='$gender', mobile='$mobile', email='$email', dept_id='$dept', designation='$desig', qualification='$quali', address='$address' where tech_id='$id'";
                    $res=mysqli_query($dbCon,$q);
                    if($res!=null)
                    {
                        header('location:viewteacher.php?msg=Data updated successfully');
                    }
                   
            }
            else
            {
                if($_FILES['file']['type']=="image/jpg" || $_FILES['file']['type']=="image/png" || $_FILES['file']['type']=="image/jpeg" )
                {
                    $filename=$_FILES['file']['name'];
                    $filetmp=$_FILES['file']['tmp_name'];
                
                        if(move_uploaded_file($filetmp,'teacher/'.$filename))
                        {
                            $qc="select pic from tbl_teacher where tech_id='$id'";
                            echo $qc;
                            $resc=mysqli_query($dbCon,$qc);
                            $rowc=mysqli_fetch_array($resc);
                            unlink('teacher/'.$rowc['pic']);
                               

                               $q="update tbl_teacher set name=' $name', dob='$dob', fname='$fname', gender='$gender', mobile='$mobile', email='$email', dept_id='$dept', designation='$desig', qualification='$quali', address='$address', pic='$filename' where tech_id='$id'";
                                $res=mysqli_query($dbCon,$q);
                                if($res!=null)
                                {
                                    header('location:viewteacher.php?msg=Data updated successfully');
                                }
                                else
                                {
                                    header('location:viewteacher.php?msg=Data not updated !!!');
                                }

                           
                           
                   
                        }
                        else
                        {
                            header("location:viewteacher.php?msg=Photo upload fail !!! Please select correct file");
                        }
                       
                }
                else
                {
                    header("location:viewteacher.php?msg=Photo upload fail !!! Please select correct file");
                }
                
            }

        }    
        
        


        // Update non-teacher Info
        if(isset($_POST['Editnontech']))
        {
           
            $id=$_POST['n_id'];

            $name=$_POST['name'];
            //echo $name;
            $fname=$_POST['fname'];
           
            $gender=$_POST['gender'];
            $mobile=$_POST['mobile'];
           
         
            $desig=$_POST['designation'];
            $quali=$_POST['quali'];
            $address=$_POST['address'];

            if(empty($_FILES['file']['name']))
            {
                    $q="update tbl_nonteacher set name=' $name', fname='$fname', gender='$gender', mobile='$mobile', designation='$desig', qualification='$quali', address='$address' where non_id='$id'";
                    $res=mysqli_query($dbCon,$q);
                    if($res!=null)
                    {
                        header('location:viewnonteacher.php?msg=Data updated successfully');
                    }
                   
            }




            else
            {
                if($_FILES['file']['type']=="image/jpg" || $_FILES['file']['type']=="image/png" || $_FILES['file']['type']=="image/jpeg" )
                {
                    $filename=$_FILES['file']['name'];
                    $filetmp=$_FILES['file']['tmp_name'];
                
                        if(move_uploaded_file($filetmp,'staff/'.$filename))
                        {
                            $qc="select pic from tbl_nonteacher where non_id='$id'";
                           // echo $qc;
                            $resc=mysqli_query($dbCon,$qc);
                            $rowc=mysqli_fetch_array($resc);
                            unlink('staff/'.$rowc['pic']);
                               

                               $q="update tbl_nonteacher set name=' $name', fname='$fname', gender='$gender', mobile='$mobile', designation='$desig', qualification='$quali', address='$address', pic='$filename' where non_id='$id'";
                                $res=mysqli_query($dbCon,$q);
                                if($res!=null)
                                {
                                    header('location:viewnonteacher.php?msg=Data updated successfully');
                                }
                                else
                                {
                                    header('location:viewnonteacher.php?msg=Data not updated !!!');
                                }

                           
                           
                   
                        }
                        else
                        {
                            header("location:viewnonteacher.php?msg=Photo upload fail !!! Please select correct file");
                        }
                       
                }
                else
                {
                    header("location:viewnonteacher.php?msg=Photo upload fail !!! Please select correct file");
                }
                
            }


        }
		
		
		
		
		
		
		// Diploma Codes
		
		
		if(isset($_POST['videosubmit']))
		{
			$title=$_POST['title'];
			$year=$_POST['year'];
			$branch=$_POST['branch'];
			$url=$_POST['url'];
			$subject=$_POST['subject'];
			$date=date("d-m-Y");
			$query="insert into tbl_video(title,branch,year,subject,url,date) values('$title','$branch','$year','$subject','$url',now())";
			$res=mysqli_query($dbCon,$query);
		    // echo $query;
			// exit();

			if($res)
			{
				header("location:videolecture.php?msg=Successful !!!");

				}

			else
			{
				header("location:videolecture.php?msg=Not Successful");
				
				}
			
		}


        // result link
		if(isset($_POST['ressubmit']))
		{
			$link=$_POST['link'];
			$date=date("d-m-Y");
			$query="insert into tbl_result(link,date) values('$link',now())";
			$res=mysqli_query($dbCon,$query);
		    // echo $query;
			// exit();

			if($res)
			{
				header("location:result.php?msg=Successful !!!");

				}

			else
			{
				header("location:result.php?msg=Not Successful");
				
				}
			
		}




		if(isset($_POST['aictesubmit']))
		{

			$title=$_POST['title'];
			//echo $title;
           $filename=$_FILES['file']['name'];
			//echo $filename; 	
            $filetype=$_FILES['file']['type'];
			//echo $filetype;
			$tmp_name=$_FILES['file']['tmp_name'];
			//echo $tmp_name;
			$file_new_name='aicte-'.rand(0,9).rand(0,9).rand(0,9).$filename;
            //echo $file_new_name;	
			//exit();
			if($filetype=='application/pdf')
			{
				if(move_uploaded_file($tmp_name,'aicte/'.$file_new_name))
				{
					$query="insert into tbl_aicte(title,file,date) values('$title','$file_new_name',curdate())";	
						//echo $query;
						$res=mysqli_query($dbCon,$query);
						if($res)
						{
							header('location:aicte.php?Inserted Sucessfully');
						}
						else
						{
							header('location:aicte.php?Not Inserted Sucessfully');
						}
								
				}
				
			}
			else
				{
					header('location:aicte.php?please Choose Correct File Type');
				}
	
            
		}
		
		if(isset($_POST['mousubmit']))
		{
			$company=$_POST['company'];
			$title=$_POST['title'];
			//echo $title;
           $filename=$_FILES['file']['name'];
			//echo $filename; 	
            $filetype=$_FILES['file']['type'];
			//echo $filetype;
			$tmp_name=$_FILES['file']['tmp_name'];
			//echo $tmp_name;
			$file_new_name='mou-'.rand(0,9).rand(0,9).rand(0,9).$filename;
            //echo $file_new_name;	
			//exit();
			if($filetype=='application/pdf')
			{
				if(move_uploaded_file($tmp_name,'mou/'.$file_new_name))
				{
					$query="insert into tbl_mou(company,title,file,date) values('$company','$title','$file_new_name',curdate())";	
						//echo $query;
						$res=mysqli_query($dbCon,$query);
						if($res)
						{
							header('location:mou.php?Inserted Sucessfully');
						}
						else
						{
							header('location:mou.php?Not Inserted Sucessfully');
						}
								
				}
				
			}
			else
				{
					header('location:mou.php?please Choose Correct File Type');
				}
			
		}
		
		if(isset($_POST['rtisubmit']))
		{
			$title=$_POST['title'];
			//echo $title;
           $filename=$_FILES['file']['name'];
			//echo $filename; 	
            $filetype=$_FILES['file']['type'];
			//echo $filetype;
			$tmp_name=$_FILES['file']['tmp_name'];
			//echo $tmp_name;
			$file_new_name='rti-'.rand(0,9).rand(0,9).rand(0,9).$filename;
            //echo $file_new_name;	
			//exit();
			if($filetype=='application/pdf')
			{
				if(move_uploaded_file($tmp_name,'rti/'.$file_new_name))
				{
					$query="insert into tbl_rti(title,file,date) values('$title','$file_new_name',curdate())";	
						//echo $query;
						$res=mysqli_query($dbCon,$query);
						if($res)
						{
							header('location:rti.php?Inserted Sucessfully');
						}
						else
						{
							header('location:rti.php?Not Inserted Sucessfully');
						}
								
				}
				
			}
			else
				{
					header('location:rti.php?please Choose Correct File Type');
				}

			
		}
		if(isset($_POST['addstudent']))
		{
			$name=$_POST['name'];
			$branch=$_POST['branch'];
			$company=$_POST['company'];
			$session=$_POST['session'];
			
			$date=date("d-m-Y");
			$query="insert into tbl_placement(stu_name,branch,company,session,date) values('$name','$branch','$company','$session',now())";
			$res=mysqli_query($dbCon,$query);
		    //echo $query;
			//exit();

			if($res)
			{
				header("location:AdStu.php?msg=Successful !!!");

				}

			else
			{
				header("location:AdStu.php?msg=Not Successful");
				
				}
			
		}
		//if(isset[$_POST['grievancesubmit']])
		//{
			//$stuName=$_POST['stu_name'];
			//$enroll=$_POST['enroll'];
			//$mob=$_POST['mob'];
			//$email=$_POST['email'];
			//$subject=$_POST['sub'];
			//$msg=$_POST['msg'];
			//$date=date("d-mm-Y");
			//$query="insert into tbl_grievance(stu_name,enroll_no,mob,email,subject,msg,status,date,up_date) values('$stuName','$enroll','$mob','$email','$subject','$msg','$status',now(),'$date')";
			//$res=mysqli_query($dbCon,$query);

			//if($res)
			//{
				//header("location:grievance.php?msg=Successful !!!");
                 
				//}

			//else
			//{
				//header("location:grievance.php?msg=Not Successful");
				
				//}
			
		//}
		// Show grievance
		$query="select * from tbl_grievance ";
		$res=mysqli_query($dbCon,$query);
		
		//show antiragging
		$query="select * from tbl_rag";
		$res=mysqli_query($dbCon,$query);
		
		
		//active alumni

		
		
		
		
		
		
		
		//update video info
		if(isset($_POST['EditVideo']))
    {
        
		  $vid=$_POST['editvid'];
		  $title=$_POST['titleedit'];
		  $url=$_POST['urledit'];
		  $subject=$_POST['subedit'];
		  $branch=$_POST['branchedit'];
		  $year=$_POST['yearedit'];
		   
        $sql="update tbl_video set title=' $title',url='$url',subject='$subject',branch='$branch',year='$year'  where v_id='$vid'";
        //var_dump($sql);
       // echo $sql;
		//exit();
        $query_run=mysqli_query($dbCon, $sql);
        //var_dump($query_run);
        if($query_run)
        {
            header("location: videolecture.php");
        }
    }
   
		
		//update placement
		
		
			if(isset($_POST['EditPlacement']))
    {
          
		   $sid=$_POST['editid'];
		  $name=$_POST['nameedit'];
		  $company=$_POST['companyedit'];
		  $session=$_POST['sessionedit'];
		  $branch=$_POST['branchedit'];

		   
        $sql="update tbl_placement set stu_name=' $name',company='$company',session='$session',branch='$branch'  where s_id='$sid'";
        //var_dump($sql);
       // echo $sql;
		//exit();
        $query_run=mysqli_query($dbCon, $sql);
        //var_dump($query_run);
        if($query_run)
        {
            header("location: ViewStu.php");
        }
    }
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
        
?>
<script>
        CKEDITOR.replace('editor');
        var editor = CKEDITOR.replace( 'ckfinder' );
            CKFinder.setupCKEditor( editor );
    </script>