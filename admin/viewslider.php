<?php
include("connection.php");
$query="select * from tbl_slider";
$res=mysqli_query($dbCon,$query);
?>

	<?php include 'header.php';?>

	<div class="page-header page-header-light">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="#" class="breadcrumb-item"><i class="icon-copy"></i> Manage Slider</a>
					<span class="breadcrumb-item active">View Slider</span>
				</div>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>
	</div>
	<!-- /page header -->
	<!-- Content area -->
	<div class="content">
	<!-- Basic initialization -->
	<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Slider's Record</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload" href="#"></a>                
            </div>
        </div>
    </div>
    <div class="card-body">       
    </div>
    <table class="table datatable-button-init-basic datatable-reorder">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>View Image</th>
                <th>Text -1</th>
                <th>Text -2</th>
                <th>Post Date</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
		<?php
		  $a=1;
		  while($row=mysqli_fetch_array($res))
		  {
	    ?>
            <tr>
                <td><?php echo $a; $a++; ?></td>
                <td><img height="50" width="150" src="slider/<?php echo $row['pic'];?>" /></td>
                <td><?php echo $row['text1'];?></td>
                <td><?php echo $row['text2'];?></td>
                <td><?php echo $row['date'];?></td>
                <td><a href="sdel.php?id=<?php echo $row['0'];?>" id="del">Delete</a></td>

            </tr>
        <?php
		  }
		?>
        </tbody>
    </table>
	</div>
	<!-- /basic initialization -->
	<!-- /main charts -->
	<!-- Dashboard content -->
	<!-- /dashboard content -->
	</div>
	<script>
		function deluser(p) {
			var id = jQuery(p).next().text();
			var status = confirm("Do you want to delete record?");
			if (status == true) {
				window.location.href = '../Admin/deluser?id=' + id;
			}
		}
	</script>

	<?php include 'footer.php';?>