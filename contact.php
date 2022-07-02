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
                            <h2>Contact Us</h2>
                            <div class="page_link">
                                <a href="index.php">Home</a>
                                <a href="contact.php">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area py-5">
        <div class="container">

            <div class="row mb-5">
                <div class="col-sm-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3541.8945140509422!2d81.20484181505559!3d27.41022018291589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3999165570f27f93%3A0xcb4735e07fb019a2!2sSARDAR%20BALLABH%20BHAI%20PATEL%20KANYA%20SIKSHAN%20SANSTHAN%2CGORAICHA%2CMMB%2CSTP!5e0!3m2!1sen!2sin!4v1654089751222!5m2!1sen!2sin" style="border:0; width:100%; height:350px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Gundaicha, Mahmoodabad </h6>
                            <p>(Sitapur), Uttar Pradesh</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">00 (000) 0000 000</a></h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">support@xyz.com</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="contact_add.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" required placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="number" name="number" maxlength="10" minlength="10" required placeholder="Enter mobile number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" required rows="1" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn primary-btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->






	<!--================ Start footer Area  =================-->
	<?php include("home_include/footer.php"); ?>
	<!--================ End footer Area  =================-->

    <?php include ("home_include/footer_link.php"); ?>

</body>

</html>