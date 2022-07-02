<!DOCTYPE html>
<?php 
session_start();
if($_SESSION["user"]=="" && isset($_SESSION["user"])==0){
header("Location:index.php");
}
?>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
<!--CK LINK-->
<script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
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
						                       
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Manage Department</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                <li class="nav-item"><a href="department.php" class="nav-link ">Add department</a></li>
                               <!-- <li class="nav-item"><a href="science.php" class="nav-link">Science</a></li>
                                <li class="nav-item"><a href="arts.php" class="nav-link">Arts</a></li>
                                <!--<li class="nav-item"><a href="commerce.php" class="nav-link">Commerce</a></li>
                                <li class="nav-item"><a href="law.php" class="nav-link">Law</a></li>
                                <li class="nav-item"><a href="education.php" class="nav-link">Education</a></li>-->
                            </ul>
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
                            <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Manage Gallery</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                                <li class="nav-item"><a href="addimage.php" class="nav-link">Add Image</a></li>
                                <li class="nav-item"><a href="viewimages.php" class="nav-link">View Images</a></li>
                            </ul>
                        </li> 
						<li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Manage Press</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                                <li class="nav-item"><a href="p_addimage.php" class="nav-link">Add Image</a></li>
                                <li class="nav-item"><a href="p_viewimages.php" class="nav-link">View Images</a></li>
                            </ul>
                        </li> 
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-pencil"></i> <span>Manage About Us</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                               <!-- <li class="nav-item"><a href="about_clg.php" class="nav-link">About College</a></li>
                                <li class="nav-item"><a href="principle_desk.php" class="nav-link">Principle's Desk</a></li>-->
                                <li class="nav-item"><a href="prev_principle.php" class="nav-link">Perivious Principle</a></li>
                             <!--   <li class="nav-item"><a href="achivement.php" class="nav-link">Achivements</a></li>
                                <li class="nav-item"><a href="vc.php" class="nav-link">Vice Chancellor</a></li> -->
                            </ul>
                        </li>
						<li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-pencil"></i> <span>Manage Academics</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                              <!--  <li class="nav-item"><a href="adm.php" class="nav-link">Admission</a></li>
                               
                                <li class="nav-item"><a href="fee_str.php" class="nav-link">Fee Structure</a></li>
                                <li class="nav-item"><a href="courses.php" class="nav-link">courses</a></li>  -->
                                <li class="nav-item"><a href="a_calender.php" class="nav-link">Academic Calender</a></li>
                                <li class="nav-item"><a href="time_table.php" class="nav-link">Time Table</a></li>
                                
                            </ul>
                        </li>
						<!--	<li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-pencil"></i> <span>Manage Student Support</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                                <li class="nav-item"><a href="rules_regulation.php" class="nav-link">Rules Regulation</a></li>
                                <li class="nav-item"><a href="ncc.php" class="nav-link">National Cadet Corps(NCC)</a></li>
                                <li class="nav-item"><a href="nss.php" class="nav-link">National Service Scheme</a></li>
								<li class="nav-item"><a href="canteen.php" class="nav-link">College Canteen</a></li>
								<li class="nav-item"><a href="hostel.php" class="nav-link">College Hostel</a></li>
								 <li class="nav-item"><a href="club.php" class="nav-link">Clubs</a></li>
								 <li class="nav-item"><a href="internet.php" class="nav-link">24*7 Internet</a></li>
                                
                            </ul>
                        </li>
                     -->
						<li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-pencil"></i> <span>Manage Committees Cells </span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                               <!-- <li class="nav-item"><a href="pcell.php" class="nav-link">Placement / Career Councelling Cell</a></li>
								<li class="nav-item"><a href="cdcell.php" class="nav-link">College Development Cell</a></li>
								<li class="nav-item"><a href="admcell.php" class="nav-link">Disciplinary / Admission Cell</a></li>
								<li class="nav-item"><a href="gcell.php" class="nav-link">Grievance Redressal / Anti Ragging Cell</a></li>
								<li class="nav-item"><a href="iqacell.php" class="nav-link">Internal Quality Assurance (IQAC) Cell</a></li>
								<li class="nav-item"><a href="librarycell.php" class="nav-link">Advisory Committee for Central Library</a></li>
								<li class="nav-item"><a href="wcell.php" class="nav-link">Women Cell / Anti Sexual Harassment Cell</a></li>
								<li class="nav-item"><a href="naacell.php" class="nav-link">Steering Committee for NAAC</a></li>-->
                                <li class="nav-item"><a href="Addcell.php" class="nav-link">Add New Committee</a></li>
                                <li class="nav-item"><a href="Addmember.php" class="nav-link">Add New Member </a></li>
                                
                                
                            </ul>
                        </li>
						<li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-pencil"></i> <span>Manage NAAC </span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                                <li class="nav-item"><a href="aqar.php" class="nav-link">AQAR</a></li>
                                <li class="nav-item"><a href="ssr.php" class="nav-link">SSR</a></li>                                                         
                            
                            </ul>
                        </li>
						<li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-pencil"></i> <span>Contact Us </span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                                <li class="nav-item"><a href="contact.php" class="nav-link">View Contact Records</a></li>
                              <!--  <li class="nav-item"><a href="contact_details.php" class="nav-link">Manage Contact Details</a></li>     -->                                                    
                            
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