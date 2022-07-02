<?php

$title = "Home";

include("admin/connection.php");

$q_slider = "select * from tbl_slider order by slider_id desc";
$q_noti = "select * from tbl_notice order by file_id desc";
$q_gal = "select * from tbl_gallery where type='gallery' order by gal_id desc limit 8";

$res_slider = mysqli_query($dbCon, $q_slider);
$res_noti = mysqli_query($dbCon, $q_noti);
$res_gal = mysqli_query($dbCon, $q_gal);
?>


<!doctype html>
<html lang="en">

<head>
<?php
include_once("home_include/header_link.php");
?>
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<?php include("home_include/header.php") ?>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section>
          <div class="container-fluid">
          <div class="row">
              <div class="col-sm-9 p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <?php
						$i = 1;
						while($row_slider = mysqli_fetch_assoc($res_slider)){
							if($i==1){
								?>
									<div class="carousel-item active">
										<img class="d-block w-100 my-slider" src="admin/slider/<?php echo $row_slider['pic'] ?>" alt="First slide">
									</div>
								<?php
							}else{
								?>
								<div class="carousel-item">
									<img class="d-block w-100 my-slider" src="admin/slider/<?php echo $row_slider['pic'] ?>" alt="Second slide">
								</div>
							<?php
							}
							$i=0;
						}
						?>
                        
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
              </div>

              <div class="col-sm-3 p-0">
              <div class="blog_right_sidebar">
                       
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Notice Board</h3>
                            <marquee behavior="scroll" style="height: 250px;" onmouseover="stop()" onmouseout="start()" direction="down">
                                

							<?php
							while($row_noti = mysqli_fetch_assoc($res_noti)){
							?>
								<div class="media post_item">
                                    <div class="media-body">
                                        <a href="admin/notice/<?php echo $row_noti['file_name'] ?>" target="_blank">
                                            <h3><?php echo $row_noti['notice'] ?></h3>
                                        </a>
                                        <p><?php echo $row_noti['date'] ?></p>
                                    </div>
                                </div>
							<?php
							}
							?>
							
                            
                            
                             
                            </marquee>
                            <div class="br"></div>
                        </aside>
                    </div>
              </div>
          </div>
          </div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Feature Area =================-->
	<section class="feature_area">
		<div class="container">
        
			<div class="row justify-content-end">
				<div class="col-lg-4">
					<div class="single_feature d-flex flex-row pb-30">
						<div class="desc">
							<h4>The Kindergarten School</h4>
							<p>
							From Alphabets and Numbers to the basic grasps of perception, learning, understanding, awareness and cognition the Kindergarten School of SVBPKSS takes care of the overall foundation of a child's education.
							</p>
						</div>
					</div>
                </div>
                <div class="col-lg-4">
					<div class="single_feature d-flex flex-row pb-30">
					
						<div class="desc">
							<h4>The Primary & Secondary School</h4>
							<p>
							SVBPKSS Primary & Secondary School provides an environment that aids the development of the student's personality along with academic and Co-curricular development between the ages of 5 to 15 the period when children learn the most.
							</p>
						</div>
					</div>
                </div>

                <div class="col-lg-4">
					<div class="single_feature d-flex flex-row">
						
						<div class="desc">
							<h4>Senior Secondary School</h4>
							<p>
								As the future knocks at the door, SVBPKSS prepares its students for what lies ahead and helps them identify their skills, talents and interests, thus, channelling the children towards maximising their potential in life
							</p>
						</div>
					</div>
                </div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Feature Area =================-->

	<!--================ Start Department Area =================-->
	<div class="department_area py-5 py-sm-0">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="dpmt_courses">
						<div class="row">
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon1.png" alt="">
									</div>
									<h4>Languages</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon2.png" alt="">
									</div>
									<h4>Business</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt-100">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon3.png" alt="">
									</div>
									<h4>Literature</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon4.png" alt="">
									</div>
									<h4>Software</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center mt--100">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon5.png" alt="">
									</div>
									<h4>Design</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-12 text-center">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon6.png" alt="">
									</div>
									<h4>Coaching</h4>
								</div>
							</div>
							<!-- single course -->
							<div class="offset-lg-4 col-lg-4 col-md-4 col-sm-6 col-12 text-center mt--100">
								<div class="single_department">
									<div class="dpmt_icon">
										<img src="img/dpmt/icon7.png" alt="">
									</div>
									<h4>Development</h4>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5">
					<div class="dpmt_right">
						<h1>About SVBPKSS</h1>
						<p>SARDAR VALLABH BHAI PATEL KANYA SHIKSHAN SANSTHAN was established in 2014 and it is managed by the Pvt. Unaided. It is located in Rural area. It is located in MAHMOODABAD block of SITAPUR district of Uttar Pradesh. The school consists of Grades from 6 to 12. The school is Co-educational and it doesn't have an attached pre-primary section. The school is Non-Ashram type (Govt.) in nature and is not using school building as a shift-school. Hindi is the medium of instructions in this school. This school is approachable by all weather road. In this school academic session starts in April.</p>
						
						<a href="#" class="primary-btn text-uppercase">Explore Courses</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Department Area =================-->


    <!--================ Start Fact Area =================-->

    <div class="registration_area pt-4">
		<div class="container">
        <div class="row">
				<!-- single features -->
				<div class="col-lg-12 col-md-12">
					<div class="single_fact">
                        <div class="single_event">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-5">
                                    <div class="event_thumb">
                                        <img src="img/event1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-7">
                                    <div class="event_details">
                                        <h2 class="text-light">From Principal's Desk</h2>
                                        <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ipsa voluptas, vero nobis quia magnam ipsum. Tempora quas dolores iste expedita non molestias odio qui quisquam deserunt modi tenetur, explicabo minus eos, praesentium placeat eveniet ipsum itaque quam assumenda quasi quibusdam reiciendis aperiam maxime repudiandae? Porro eligendi aliquam pariatur odit ullam, blanditiis temporibus nisi veritatis unde ipsam! Blanditiis quo aperiam repellendus saepe atque illum quia laboriosam quae voluptas tempora natus eos sunt pariatur, possimus commodi iusto voluptatum provident maxime beatae dolor impedit aut animi excepturi! Eos reiciendis nisi provident dolor eligendi quidem perspiciatis doloremque fuga quod numquam magni, alias impedit!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			
				
			</div>
		</div>
	</div>

	<!--================ End Fact Area =================-->



	<!--================ Start Popular Courses Area =================-->
	<div class="instructors_area lite_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="main_title">
                        <h2>Our Mentors</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single-instructor -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single_instructor">
                        <div class="author">
                            <img src="img/instructors/ins1.jpg" alt="">
                        </div>
                        <div class="author_decs">
                            <h4>Mentor Name</h4>
                            <p class="profession">Designation</p>
                            <p>About Mentor</p>
                            <!-- <div class="social_icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- single-instructor -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single_instructor">
                        <div class="author">
                            <img src="img/instructors/ins2.jpg" alt="">
                        </div>
                        <div class="author_decs">
                            <h4>Mentor Name</h4>
                            <p class="profession">Designation</p>
                            <p>About Mentor</p>
                            <!--  -->
                        </div>
                    </div>
                </div>
                <!-- single-instructor -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single_instructor">
                        <div class="author">
                            <img src="img/instructors/ins3.jpg" alt="">
                        </div>
                        <div class="author_decs">
                            <h4>Mentor Name</h4>
                            <p class="profession">Designation</p>
                            <p>About Mentor</p>
                            <!--  -->
                        </div>
                    </div>
                </div>
                <!-- single-instructor -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single_instructor">
                        <div class="author">
                            <img src="img/instructors/ins4.jpg" alt="">
                        </div>
                        <div class="author_decs">
                            <h4>Mentor Name</h4>
                            <p class="profession">Designation</p>
                            <p>About Mentor</p>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--================ End Popular Courses Area =================-->

    
	<!--================ Start Registration Area =================-->
	<div class="registration_area py-4">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12 py-5">
							<h1>STUDENT INFORMATION SYSTEM</h1>
							<p>This section will deal with all the information pertaining to a student such as personal, academic as well as digital document and student report.</p>
                            <button class="primary-btn border-1 border-light">Student Login</button>
						</div>
					</div>
				</div>
				<div class="col-lg-4 offset-lg-1">
					<div class="register_form">
						<h3>Contact Us</h3>
						<p>If you have any query</p>
						<form class="form_area" action="contact_add.php" method="post">
							<div class="row">
								<div class="col-lg-12 form_group">
									<input name="name" placeholder="Your Name" required="" type="text">
									<input name="number" placeholder="Your Phone Number" maxlength="10" minlength="10" required="" type="tel">
									<input name="email" placeholder="Your Email Address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                    required="" type="email">
									<input name="message" placeholder="Your message" required="" type="text">
								</div>
								<div class="col-lg-12 text-center">
									<input type="submit" class="primary-btn" value="Submit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Registration Area =================-->

	
	<!--================ Start Testimonial Area =================-->
	<div class="testimonial_area py-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 text-center">
					<div class="active_testimonial owl-carousel" data-slider-id="1">
						<!-- single testimonial -->
						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote.png" alt="">
								<h4>Kavita Kumari</h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p>I feel proud and honoured to be associated with Sardar Vallabh Bhai Patel Kanya Shikshan Sansthan.</p>
							</div>
						</div>

						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote.png" alt="">
								<h4>Renu Pal</h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p>The working atmosphere here is very positive and proactive, and it fosters a spirit of cooperation among all teaching and non-teaching staff. </p>
							</div>
						</div>

						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote.png" alt="">
								<h4>Yashika Singh</h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p>I have had the opportunities to gain exposure to various teaching and leadership roles. It is indeed a privilege to be a part of the management team that is keen on pursuing excellence in education.</p>
							</div>
						</div>

						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote.png" alt="">
								<h4>Yamini Pandit</h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p>I feel extremely fortunate to be surrounded by qualified, committed, dedicated, friendly and warm fellow faculty.</p>
							</div>
						</div>
					</div>

					<div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
						<div class="owl-thumb-item">
							<div class="position-relative">
								<img class="img-fluid" src="img/testimonial/t1.jpg" alt="">
							</div>
							<div class="overlay-grad"></div>
						</div>
						<div class="owl-thumb-item">
							<div class="position-relative">
								<img class="img-fluid" src="img/testimonial/t2.jpg" alt="">
							</div>
							<div class="overlay-grad"></div>
						</div>
						<div class="owl-thumb-item">
							<div class="position-relative">
								<img class="img-fluid" src="img/testimonial/t3.jpg" alt="">
							</div>
							<div class="overlay-grad"></div>
						</div>
						<div class="owl-thumb-item">
							<div class="position-relative">
								<img class="img-fluid" src="img/testimonial/t4.jpg" alt="">
							</div>
							<div class="overlay-grad"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Testimonial Area =================-->

	<!--================ Start Events Area =================-->
	<div class="registration_area py-5">
		<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="main_title">
                        <h2 class="text-light">Our Gallery</h2>
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


    <?php
        if(isset($_REQUEST['msg'])){
        ?>
            <script>
            window.alert('<?php echo $_REQUEST['msg']; ?>')
            </script>
            <?php
        }
        ?>


	<!--================ Start footer Area  =================-->
	<?php include("home_include/footer.php"); ?>
	<!--================ End footer Area  =================-->

    <?php include ("home_include/footer_link.php"); ?>

</body>

</html>