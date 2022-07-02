<?php
	include("admin/connection.php");

$query="select * from tbl_scheme order by scheme_id desc";
$res=mysqli_query($dbCon,$query);

?>
<!doctype html>
<html lang="en">

<head>
<?php include_once("home_include/header_link.php"); ?>
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<?php include("home_include/header.php") ?>
	<!--================ End Header Menu Area =================-->




		
     <!--================Home Banner Area =================-->
     <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>Examination Scheme</h2>
                            <div class="page_link">
                                <a href="index.php">Home</a>
                                <a href="#">Examination Scheme</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->



	

     <!--================ Start Department Area =================-->
     <div class="department_area section_gap">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-lg-12">
				<table class="table text-center table-bordered">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Session</th>
                                <th>Standard</th>
                                <th>File</th>
                                <th>Date and Time</th>
                            </tr>
                        </thead>

                        <tbody>
                            
						<?php
								$a=1;
								while($row=mysqli_fetch_array($res))
								{
							?>
							<tr>
								<td><?php echo $a;$a++;?></td>																
								<td><a href="admin/scheme/<?php  echo $row['scheme_file'];?>" target="_blank">Click Here</a></td>
								<td><?php echo $row['session'];?></td>
								<td><?php echo $row['standard'];?></td>
								<td><?php echo $row['added_on'];?></td>
							</tr>
							<?php
								}
							?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Department Area =================-->







	<!--================ Start footer Area  =================-->
	<?php include("home_include/footer.php"); ?>
	<!--================ End footer Area  =================-->

    <?php include ("home_include/footer_link.php"); ?>

</body>

</html>