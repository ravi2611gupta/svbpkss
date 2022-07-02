

	<?php include 'headerck.php';?>

	<div class="page-header page-header-light">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="#" class="breadcrumb-item"><i class="icon-stack"></i>Manage About Us</a>
					<span class="breadcrumb-item active">About Us</span>
				</div>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>
	</div>
	<!-- /page header -->

    <?php
            include("connection.php");
            $sql="select * from about_us where flag='p'";
            $query_run=mysqli_query($dbCon, $sql);
         
            $result=mysqli_num_rows($query_run);
            if($result>0)
            {
                while($row=mysqli_fetch_array($query_run))
                {?>
                    <form action="all.php" method="POST">
                    <textarea name="editor" id="editor" cols="30" rows="10">
                    
                    <?php echo $row['p_msg'] ?>
                    </textarea><br>

                        <input type="submit" name="p_update" id="update" value="Update Content" class="btn-success">
                    </form>
                <?php
                }
            }
    
    ?><br>
	
	<form action="all.php" method="POST" enctype="multipart/form-data">		
		Upload photo: (File Should Be in .jpg/.gif/.png Format)<input type="file" name="pimg" onChange="validextension1(this);"> <input type="submit" name="p_update_img" value="Update Image" class="btn-success">
	</form>

	<?php include 'footerck.php';?>