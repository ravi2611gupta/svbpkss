
	<?php
		include("connection.php");
		$query="select * from fee_str";
		$res=mysqli_query($dbCon,$query);
		
	?>

	<?php include 'header.php';?>

	<div class="page-header page-header-light">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="#" class="breadcrumb-item"><i class="icon-stack"></i>Manage Fee Structure</a>
					<span class="breadcrumb-item active">Fee Structure</span>
				</div>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>
		</div>
	</div>
	<!-- /page header -->

	<div class="row">
		<div class="col-xl-12">
		<!-- Traffic sources -->
			<div class="card">
				<div class="card-header header-elements-inline">
					<h5 class="card-title">Add Fee Structure</h5>
					<h5 class="card-title" id="msg" style="color:orangered;"></h5>
					<div class="header-elements">
						<div class="list-icons">
							<a class="list-icons-item" data-action="collapse"></a>
							<a class="list-icons-item" data-action="reload" onclick="formrest()"></a>
						</div>
					</div>
				</div>                       
				<form action="all.php" method="post" enctype="multipart/form-data">
				<!--Date :
				<input type="date" name="date"><br><br>
				Attached File : (file shoud be in .pdf formate)
				<input type="file" name="pdf" onchange="validextension(this);"><br><br>
				<input type="submit" name="time-table" value="Upload">-->
					<div class="card-body">
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">									
									<label>Session</label>
									<input type="text" name="session" placeholder="Session" class="form-control" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">									
									<label>Upload Pdf File</label>
									<input type="file" name="pdf" placeholder="pdf" class="form-control" />
								</div>
							</div>
						</div>
						<div class="text-left">
							<input type="submit" name="fee_str_upload" value="Upload">
						</div>
					</form>
					<table class="table datatable-button-init-basic datatable-reorder">
						<thead>
							<tr>
								<th>S.No.</th>								
								<th>File</th>
								<th>Post Date & Time</th>
								<th>Session</th>	
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
								<td><a href="<?php  echo $row['fee_str_file'];?>" target="_blank">Click Here</a></td>
								<td><?php echo $row['added_on'];?></td>
								<td><?php echo $row['session']; ?></td>
								<td><a href="del_fee_str.php?id=<?php echo $row['fee_str_id'];?>" id="del">Delete</a></td>
							</tr>
							<?php
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php';?>