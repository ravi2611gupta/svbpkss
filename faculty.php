<?php

$title = "Faculty";
include("admin/connection.php");

$q_fac = "select * from tbl_teacher as tt join tbl_department as td on tt.dept_id = td.dept_id order by tech_id desc";
$res_fac = mysqli_query($dbCon, $q_fac);

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
                            <h2>Faculty</h2>
                            <div class="page_link">
                                <a href="index.php">Home</a>
                                <a href="#">Faculty</a>
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
				<table class="table text-center table-bordered tbl-staff">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Photo</th>
                                <th>Faculty Name</th>
                                <th>Designation</th>
                                <th>Department</th>
                                <th>Highest Qualification</th>
                                <th>Mobile No.</th>
                                <th>Email Id</th>
                            </tr>
                        </thead>

                        <tbody>


                            <?php
                            $i=1;
                            while($row_fac = mysqli_fetch_assoc($res_fac)){
                            ?>
                            <tr>
                                <td class="pt-4"><?php echo $i; ?></td>
                                <th><img src="admin/teacher/<?php echo $row_fac['pic']; ?>"
                                        alt="Sorry Something went wrong :("></th>
                                <td class="pt-4"><strong> <?php echo $row_fac['name']; ?> </strong></td>
                                <td class="pt-4"><?php echo $row_fac['designation']; ?></td>
                                <td class="pt-4"><?php echo $row_fac['dept_name']; ?></td>
                                <td class="pt-4"><?php echo $row_fac['qualification']; ?></td>
                                <td class="pt-4"><?php echo $row_fac['mobile']; ?></td>
                                <td class="pt-4"><?php echo $row_fac['email']; ?></td>
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