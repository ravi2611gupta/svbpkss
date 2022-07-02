
	<?php
		include("connection.php");
		$query="select * from tbl_scheme order by scheme_id desc";
		$res=mysqli_query($dbCon,$query);
	?>

	<?php include 'header.php';?>

	<div class="page-header page-header-light">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="#" class="breadcrumb-item"><i class="icon-stack"></i>Manage Examination Scheme</a>
					<span class="breadcrumb-item active">Examination Scheme</span>
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
					<h5 class="card-title">Add Examination Scheme</h5>
					<h5 class="card-title" id="msg" style="color:orangered;"></h5>
					<div class="header-elements">
						<div class="list-icons">
							<a class="list-icons-item" data-action="collapse"></a>
							<a class="list-icons-item" data-action="reload" onclick="formrest()"></a>
						</div>
					</div>
				</div>                       
				<form action="all.php" method="post" enctype="multipart/form-data">
			
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
									<label>Standard</label>
									<input type="text" name="stand" placeholder="Standard" class="form-control" />
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
							<input type="submit" name="scheme_upload" class="btn btn-primary" value="Upload">
						</div>
					</form>
					<table class="table datatable-button-init-basic datatable-reorder">
						<thead>
							<tr>
								<th>S.No.</th>								
								<th>File</th>
								<th>Session</th>
								<th>Standard</th>
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
								<td><a href="scheme/<?php  echo $row['scheme_file'];?>" target="_blank">Click Here</a></td>
								<td><?php echo $row['session'];?></td>
								<td><?php echo $row['standard'];?></td>
								<td><?php echo $row['added_on'];?></td>
								<td><a href="del_scheme.php?id=<?php echo $row['scheme_id'];?>" id="del">Delete</a></td>
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