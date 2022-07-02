<?php
include("connection.php");
$query="select * from tbl_department";
$res=mysqli_query($dbCon,$query);
?>

		<?php include 'header.php';?>

	<style>
		.clcl {
			font-size: 15pt;
			font-weight: bold;
			color: red;
		}
	</style>

	<div class="page-header page-header-light">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="#" class="breadcrumb-item"><i class="icon-copy"></i> Manage Teacher</a>
					<span class="breadcrumb-item active">Add Teacher</span>
				</div>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>
	</div>
<!-- /page header -->
<!-- Content area -->
<div class="content">
    <!-- Main charts -->
    <div class="row">
        <div class="col-xl-12">
            <!-- Traffic sources -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Add Teacher</h5>
                    <h5 class="card-title" id="msg" style="color:orangered;"></h5>
                    <h5 class="card-title"><span id="msg" style="color:orangered"></span></h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload" onclick="formrest()"></a>                            
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="tech.php" method="post" enctype="multipart/form-data" id="form1">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Teacher Name<span class="clcl"> *</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Teacher Name" autocomplete="off" required />
                                </div>
                                <div class="col-md-6">
                                    <label>DOB<span class="clcl"> *</span> </label>
                                    <input type="date" placeholder="DOB" name="dob" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Gender<span class="clcl"> *</span></label>
                                    <select name="gender" class="form-control" required>
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Father's Name<span class="clcl"> *</span> </label>
                                    <input type="text" placeholder="Father's Name" name="fname" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Mobile No.<span class="clcl"> *</span></label>
                                    <input type="text" maxlength="10" minlength="10" class="form-control" name="mobile" placeholder="Mobile No." required />
                                </div>
                                <div class="col-md-6">
                                    <label>Email Id<span class="clcl"> *</span> </label>
                                    <input type="email" placeholder="Email Id" name="email" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Department<span class="clcl"> *</span></label>
                                    <select name="dept" class="form-control" required>
                                        <option value="">Select Department</option>
                                    <?php
									while($row=mysqli_fetch_array($res))
									{
									?>
									<option value="<?php echo $row['dept_id'];?>"><?php echo $row['dept_name'];?></option>
									<?php
									}
									?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Designation<span class="clcl"> *</span></label>
                                    <input type="text" placeholder="Designation" name="designation" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Highest Qualification<span class="clcl"> *</span></label>
                                    <input type="text" placeholder="Highest Qualification" name="quali" class="form-control" required />
                                </div>
                                <div class="col-md-6">
                                    <label>Address<span class="clcl"> *</span></label>
                                    <input type="text" placeholder="Address" name="address" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">                            
                                <div class="col-md-6">
                                    <label>Select Teacher Pic<span class="clcl"> *</span></label>
                                    <input type="file"  name="file"  class="form-control"  required />
                                </div>
                            </div>
                        </div>
                        <div class="text-left">
                            <button type="submit" id="btn" class="btn btn-primary">Add Teacher</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /traffic sources -->
        </div>
    </div>
    <!-- /main charts -->
    <!-- Dashboard content -->
    <!-- /dashboard content -->
</div>
<script>
    function formrest() {

        document.getElementById("form1").reset();
    }


    jQuery(document).ready(function () {
        formrest();
        formrest();

        jQuery("#msg").fadeIn("fast");
        jQuery("#msg").fadeOut(30000);
    });
</script>
<script src="/passwordjs/hideShowPassword.min.js?v=2"></script>
<script>
    // Example 1:
    // - Password hidden by default
    // - Inner toggle shown
    $('#password').hidePassword(true);
   

    // Example 2:
    // - Password shown by default
    // - Toggle shown on 'focus' of element
    // - Custom toggle class
    //$('#npass').showPassword('focus', {
    //    toggle: { className: 'my-toggle' }
    //});
</script>

           
         	<?php include 'footer.php';?>