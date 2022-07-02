	<?php include 'header.php';
        include 'connection.php';
    ?>
            


	<div class="page-header page-header-light">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<span class="breadcrumb-item active">Dashboard</span>
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
        <div class="col-xl-7">
            <!-- Traffic sources -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Traffic sources</h6>
                    <div class="header-elements">
                        <div class="form-check form-check-right form-check-switchery form-check-switchery-sm">
                            <label class="form-check-label">
                                Live update:
                                <input type="checkbox" class="form-input-switchery" checked data-fouc>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
                                    <i class="icon-plus3"></i>
                                </a>
                                <div>
                                    <div class="font-weight-semibold">New visitors</div>
                                    <span class="text-muted">2,349 avg</span>
                                </div>
                            </div>
                            <div class="w-75 mx-auto mb-3" id="new-visitors"></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon mr-3">
                                    <i class="icon-watch2"></i>
                                </a>
                                <div>
                                    <div class="font-weight-semibold">New sessions</div>
                                    <span class="text-muted">08:20 avg</span>
                                </div>
                            </div>
                            <div class="w-75 mx-auto mb-3" id="new-sessions"></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon mr-3">
                                    <i class="icon-people"></i>
                                </a>
                                <div>
                                    <div class="font-weight-semibold">Total online</div>
                                    <span class="text-muted"><span class="badge badge-mark border-success mr-2"></span> 5,378 avg</span>
                                </div>
                            </div>
                            <div class="w-75 mx-auto mb-3" id="total-online"></div>
                        </div>
                    </div>
                </div>
                <div class="chart position-relative" id="traffic-sources"></div>
            </div>
            <!-- /traffic sources -->
        </div>
        <div class="col-xl-5">
            <!-- Sales stats -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Statistics Reports</h6>
                    <div class="header-elements">
                        <select class="form-control" id="select_date" data-fouc>
                            <option value="val1"><?php echo date('d-M-Y'); ?></option>
                           
                        </select>
                    </div>
                </div>
                <div class="card-body py-0">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="mb-3">
                                <h5 class="font-weight-semibold mb-0">
                                    <?php
                                    $qn="select count(*) from tbl_notice";
                                   $res= mysqli_query($dbCon,$qn);
                                   $row=mysqli_fetch_array($res);
                                   echo $row[0];
                                    ?>
                                </h5>
                                <span class="text-muted font-size-sm">News Uploaded</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <h5 class="font-weight-semibold mb-0">

                                <?php
                                     $qn="select count(*) from tbl_teacher";
                                     $res= mysqli_query($dbCon,$qn);
                                     $row=mysqli_fetch_array($res);
                                     echo $row[0];
                                ?>
                                </h5>
                                <span class="text-muted font-size-sm">Teaching Staff</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <h5 class="font-weight-semibold mb-0">
                                <?php
                                     $qn="select count(*) from tbl_contact";
                                     $res= mysqli_query($dbCon,$qn);
                                     $row=mysqli_fetch_array($res);
                                     echo $row[0];
                                ?>
                                </h5>
                                <span class="text-muted font-size-sm">Total Enquiries</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chart mb-2" id="app_sales"></div>
                <div class="chart" id="monthly-sales-stats"></div>
            </div>
            <!-- /sales stats -->
        </div>
    </div>
    <!-- /main charts -->
    <!-- Dashboard content -->
    <!-- /dashboard content -->
</div>           
		   
		   <?php include 'footer.php';?>