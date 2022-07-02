<?php

$title = "Campus";
include("admin/connection.php");

$q_gal = "select * from tbl_gallery where type='campus' order by gal_id desc limit 8";
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
                            <h2>Campus</h2>
                            <div class="page_link">
                                <a href="index.php">Home</a>
                                <a href="#">Campus</a>
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
                <div class="col-lg-4 text-center">
                    <img class="img-fluid" src="img/about-img.png" alt="">
                </div>

                <div class="offset-lg-1 col-lg-7">
                    <div class="dpmt_right">
                        <h1>Our Campus</h1>
                        <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first
                            telescope. It’s
                            exciting to think about setting up your own viewing station. In the life of any aspiring
                            astronomer that it is
                            time to buy that first telescope. It’s exciting to think about setting up your own viewing
                            station.</p>
                        <p>It’s exciting to think about setting up your own viewing station. In the life of any
                            aspiring astronomer that
                            it is time to buy that first telescope exciting is time to buy that first.</p>
                        <a href="#" class="primary-btn text-uppercase">Explore Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Department Area =================-->



		<!--================ Start Events Area =================-->
		<div class="registration_area py-5">
		<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="main_title">
                        <h2 class="text-light">Campus Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel index-gal owl-theme">
				<?php
				while($row_gal=mysqli_fetch_assoc($res_gal)){
				?>
				   <div class="item">
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
	<!--================ End Events Area =================-->





	<!--================ Start footer Area  =================-->
	<?php include("home_include/footer.php"); ?>
	<!--================ End footer Area  =================-->

    <?php include ("home_include/footer_link.php"); ?>

</body>

</html>