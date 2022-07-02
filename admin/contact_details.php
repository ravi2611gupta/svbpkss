<?php 
include('connection.php');
include('header.php');
	$a=1;
	$address="";
	$phone="";
	$mobile="";
	$email="";
	$gmap="";
	$sql="select * from contact_details where flag='con'";
	$query=mysqli_query($dbCon, $sql);
	$result=mysqli_num_rows($query);
	if ($result) {
		while($row=mysqli_fetch_array($query))
		{
		$address=$row['con_address'];
		$phone=$row['phone'];
		$mobile=$row['mobile'];
		$email=$row['email'];
		$gmap=$row['gmap'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact details</title>
</head>
<body>
	<form action="all.php" method="POST" enctype="multipart/form-data">
		<!--<label>Address</label>
		<input type="text" name="address"><br><br>
		<label>Phone</label>
		<input type="text" name="phone"><br><br>
		<label>Mobile</label>
		<input type="text" name="mobile"><br><br>
		<label>Email</label>
		<input type="text" name="email"><br><br>
		<label>Map</label>
		<input type="text" name="map"><br><br>
		<input type="submit" name="contact_update">-->
		<div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                	<label>Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Address" name="address" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                	<label>Phone</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone" name="phone" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                	<label>Mobile</label>
                                    <input type="text" class="form-control" placeholder="Enter Mobile" name="mobile" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                	<label>Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Email" name="email" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                	<label>Map</label>
                                    <input type="text" class="form-control" placeholder="Enter map url" name="map" required />
                                </div>
                            </div>
                        </div>
                        <div class="text-left">
                            <button type="submit" name="contact_update" class="btn btn-primary">Submit</button>
                        </div>
        </div>
	</form>
	<table class="table datatable-button-init-basic datatable-reorder">
						<thead>
							<tr>
								<th>S.No.</th>
								<th>Address</th>
								<th>Phone</th>
								<th>Mobile</th>
								<th>Email</th>
								<th>Map URl</th>
							</tr>
						</thead>
					<tbody>
						<tr>
							<td><?php echo $a;$a++;?></td>
							<td><?php echo $address;?></td>
							<td><?php echo $phone;?></td>
							<td><?php echo $mobile;?></td>
							<td><?php echo $email;?></td>
							<td><?php echo $gmap;?></td>
						</tr>
						
					</tbody>
					</table>
</body>

</html>

<?php include('footer.php'); ?>