<?php
	include("admin/connection.php");

	$q_acal = "select * from tbl_acal order by acal_id desc";
	$res_acal = mysqli_query($dbCon, $q_acal);
	
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
                            <h2>Academic Calendar</h2>
                            <div class="page_link">
                                <a href="index.php">Home</a>
                                <a href="#">Academic Calendar</a>
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
                                <th>File</th>
                                <th>Session</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                            <?php
                            $i=1;
                            while($row_acal = mysqli_fetch_assoc($res_acal)){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><a href="admin/<?php echo $row_acal['acal_file']; ?>" target="_blank">Click here to view</a></td>
                                <td><?php echo $row_acal['session']; ?></td>
                            </tr>
                            <?php
                            $i++;
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