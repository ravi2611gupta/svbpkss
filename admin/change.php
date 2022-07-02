<?php
error_reporting(0);
$flg=$_REQUEST['flg'];
if($flg==1)
{
	$flgerr="Your Old Password is not matched with Current Password";
}
if($flg==2)
{
	$flgerr="Your Old Password and New Password is same";
}
if($flg==3)
{
	$flgerr="Your New Password and Confirm New Password is not same";
}
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="global_assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="global_assets/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="global_assets/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="global_assets/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="global_assets/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <!-- Core JS files -->
    <script src="global_assets/js/main/jquery.min.js"></script>
    <script src="global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->
    <!-- Theme JS files -->
    <script src="global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="global_assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="global_assets/assets/js/app.js"></script>
    <script src="global_assets/js/demo_pages/dashboard.js"></script>
    <!-- /theme JS files -->
    <!-- Theme JS files -->
    <script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="global_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
    <script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="global_assets/js/plugins/notifications/sweet_alert.min.js"></script>


    <script src="global_assets/js/demo_pages/datatables_extension_buttons_init.js?v=2"></script>

    <script src="global_assets/js/demo_pages/picker_date.js"></script>
    <!-- /theme JS files -->
</head>

<body >

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark">
        <div class="navbar-brand">
            <a href="#">
               <span style="color:white;font-size:13pt;font-weight:bold;">ADMIN PANEL</span>
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>

            </ul>

            <span class="navbar-text ml-md-3 mr-md-auto">
               
            </span>
            <ul class="navbar-nav">            
                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">                      
                        <span>Setting</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <div class="dropdown-divider"></div>
                       <a href="change.php" class="dropdown-item"><i class="icon-cog5"></i>Change Password</a>
                       <a href="logout.php" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->
    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
           
            <!-- /sidebar mobile toggler -->
            <!-- Sidebar content -->
            <div class="sidebar-content" style="margin-top:-2.5%;">

                <!-- User menu -->
               
                <!-- /user menu -->
                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <!-- Main -->
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link active">
                                <i class="icon-home4"></i>
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="notification.php" class="nav-link ">
                                <i class="icon-pencil"></i>
                                <span>
                                    Notification
                                </span>
                            </a>
                        </li>
                        <li class="nav-item" title=" Manage Department">
                            <a href="department.php" class="nav-link ">
                                <i class="icon-pencil"></i>
                                <span>
                                    Manage Department
                                </span>
                            </a>
                        </li>
                        <li class="nav-item" title=" Manage Department">
                            <a href="contact.php" class="nav-link ">
                                <i class="icon-pencil"></i>
                                <span>
                                    Manage Contact-us
                                </span>
                            </a>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Manage Teacher</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                <li class="nav-item"><a href="addteacher.php" class="nav-link active">Add Teacher</a></li>
                                <li class="nav-item"><a href="viewteacher.php" class="nav-link">View Teacher's</a></li>
                            </ul>
                        </li>
						<li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Manage Non-Teaching</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                <li class="nav-item"><a href="addnonteacher.php" class="nav-link active">Add Non-Teaching</a></li>
                                <li class="nav-item"><a href="viewnonteacher.php" class="nav-link">View Non-Teaching</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Manage Slider</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Themes">
                                <li class="nav-item"><a href="addslider.php" class="nav-link active">Add Slider</a></li>
                                <li class="nav-item"><a href="viewslider.php" class="nav-link">View Slider</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Mange Gallery</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                                <li class="nav-item"><a href="addimage.php" class="nav-link">Add Image</a></li>
                                <li class="nav-item"><a href="viewimages.php" class="nav-link">View Images</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->
        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            


<div class="page-header page-header-light">

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

    </div>
</div>
<!-- /page header -->
<div class="content">

    <!-- Main charts -->

    <div class="row">
        <div class="col-xl-12">

            <!-- Traffic sources -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Change Password</h5>
                    <h5 class="card-title" id="msg" style="color:orangered;"></h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload" onclick="formrest()"></a>
                            
                        </div>
                    </div>
                </div>
                <form action="pass.php" method="post" enctype="multipart/form-data" >
				<span style="margin-left:2%;color:red;font-weight:bold;"><?php echo $flgerr; ?></span>
                    <div class="card-body">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="password" class="form-control" placeholder="Enter Old Password" name="op" required />
                                </div>
							</div>
                        </div>
						<div class="form-group">
                            <div class="row">
								<div class="col-md-6">
                                    <input type="password" class="form-control" placeholder="Enter New Password" name="np" required />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <div class="row">
								<div class="col-md-6">
                                    <input type="password" class="form-control" placeholder="Confirm New Password" name="cnp" required />
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-left">
                            <button type="submit" class="btn btn-primary">Change</button>
                        </div>

                    </div>
                </form>
                <!-- /traffic sources -->
            </div>
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
<script>
    function deluser(p) {
        var id = jQuery(p).next().text();
        var status = confirm("Do you want to delete record?");
        if (status == true) {
            window.location.href = '../Admin/delnotice?id=' + id;
        }
    }
</script>

           
            <!-- /content area -->
            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                        Designed & Developed By | <a target="_blank" href="http://www.softproindia.in" style="">Softpro India Computer Technologies (P) Ltd.</a>
                    </span>


                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>