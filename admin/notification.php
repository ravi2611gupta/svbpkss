<?php
include("connection.php");
$query="select * from tbl_notice";
$res=mysqli_query($dbCon,$query);
?>

	<?php include 'header.php';?>

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
                    <h5 class="card-title">Add Notification</h5>
                    <h5 class="card-title" id="msg" style="color:orangered;"></h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload" onclick="formrest()"></a>                            
                        </div>
                    </div>
                </div>
                <form action="noti.php" method="post" enctype="multipart/form-data" >
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Enter Notification" name="notice" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Upload Pdf File</label>
                                    <input type="file" name="file" placeholder="File" class="form-control" />
                                </div>                               
                            </div>
                        </div>
                        <div class="text-left">
                            <button type="submit" class="btn btn-primary">Save Notification</button>
                        </div>
                    </div>
                </form>
                <table class="table datatable-button-init-basic datatable-reorder">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Notification</th>
                            <th>File</th>
                            <th>Post Date & Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
					$a=1;
					while($row=mysqli_fetch_array($res))
					{
					?>
                        <tr>
                            <td><?php echo $a;$a++;?></td>
                            <td><?php echo $row['notice'];?></td>
                            <td><a href="notice/<?php echo $row['file_name'];?>" target="_blank">Click Here</a></td>
                            <td><?php echo $row['date'];?></td>
                            <td><a href="delnoti.php?id=<?php echo $row['file_id'];?>" id="del"> Delete</a></td>
							</tr>
							<?php
					        }
							?>                                  
                    </tbody>
                </table>
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
          	<?php include 'footer.php';?>