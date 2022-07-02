<?php

$title = "Function";
include("admin/connection.php");

$q_gal = "select * from tbl_gallery where type='gallery' order by gal_id desc";
$res_gal = mysqli_query($dbCon, $q_gal);

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
                            <h2>Gallery</h2>
                            <div class="page_link">
                                <a href="index.php">Home</a>
                                <a href="#">Gallery</a>
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
             
			<?php
				while($row_gal=mysqli_fetch_assoc($res_gal)){
				?>
				   <div class="col-lg-3">
                    <div class="categories_post">
						<a href="admin/gallery/<?php echo $row_gal['pic']; ?>" class="fancybox" data-fancybox="gallery">
							<img src="admin/gallery/<?php echo $row_gal['pic']; ?>" style="height: 180px;" alt="">
						</a>
                    </div>
                </div>
				<?php
				}
				?>
             
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