
		<?php include 'header.php';?>


	<div class="page-header page-header-light">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="#" class="breadcrumb-item"><i class="icon-stack"></i>   Manage Gallery</a>
					<span class="breadcrumb-item active">Add Slider Image</span>
				</div>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>
	</div>
	<!-- /page header -->
	<!-- Content area -->
	<!-- Content area -->
	<div class="content">
		<!-- Main charts -->
		<div class="row">
			<div class="col-xl-12">
            <!-- Traffic sources -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Add Slider Images</h5>
                    <h5 class="card-title" id="msg" style="color:orangered;"></h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload" onclick="formrest()"></a>                            
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="slider.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Text 1</label>
                                    <input type="text" class="form-control" name="text1" placeholder="Text 1" required />
                                </div>
                                <div class="col-md-6">
                                    <label>Text 2</label>
                                    <input type="text" class="form-control" name="text2" placeholder="Text 2" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Upload Gallery Image(<span style="color:orangered"> width:1920 px and height:500 px</span> )</label>
                                    <input type="file" name="file" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" id="btn" class="btn btn-primary">Upload</button>
                                </div>
                            </div>
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
    jQuery(document).ready(function () {

        jQuery("#msg").fadeIn("fast");
        jQuery("#msg").fadeOut(20000);
    });
</script>

	<?php include 'footer.php';?>