<?php
include("connection.php");
$query="select * from tbl_teacher left join tbl_department on tbl_teacher.dept_id=tbl_department.dept_id";
$res=mysqli_query($dbCon,$query);
?>

		<?php include 'header.php';?>

	<div class="page-header page-header-light">
		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="#" class="breadcrumb-item"><i class="icon-copy"></i> Manage Teacher</a>
					<span class="breadcrumb-item active">View Teacher</span>
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
			<h5 class="card-title">Teacher's Record</h5>
			<span id="msg" style="color:red;"><?php if(isset($_REQUEST['msg'])){ echo $_REQUEST['msg'];} ?></span>
			<div class="header-elements">
				<div class="list-icons">
					<a class="list-icons-item" data-action="collapse"></a>
					<a class="list-icons-item" data-action="reload" href="/Admin/ViewTeacher"></a>
					
				</div>
			</div>
		</div>
    <div class="card-body">       
    </div>
    <table class="table datatable-button-init-basic datatable-reorder">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Pic</th>
                <th>Reg.Date</th>
                <th>Name</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Father's Name</th>
                <th>Mobile No.</th>
                <th>Email</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Qualification</th>
                <th>Address</th>
                <th>Edit</th>
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
                <td><img height="100" width="100" src="teacher/<?php echo $row['pic'];?>" /></td>
                <td><?php echo $row['dor'];?></td>
                <td><a href="#"><?php echo $row['name'];?></a></td>
                <td><?php echo $row['dob'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['fname'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['email'];?></td>
				<?php
				$dept=$row['dept_id'];
				$query2="select * from tbl_department where dept_id='$dept'";
				$res2=mysqli_query($dbCon,$query2);
				if($row2=mysqli_fetch_array($res2))
				{
					$department=$row2['dept_name'];
				}
				?>
                <td><?php echo $department;?></td>
                <td><?php echo $row['designation'];?></td>
                <td><?php echo $row['qualification'];?></td>
                <td><?php echo $row['address'];?></td>
				<td><button href="#" value="<?php echo $row['tech_id']; ?>" class="btn btn-primary" onclick="editmodal(this)" name="depedit">Edit</button></td>
                <td><a href="tdel.php?id=<?php echo $row['0'];?>" id="del">Delete</a></td>
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













<!--  Modal For Editing Department   -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="edittechmodal" tabindex="-1" role="dialog" aria-labelledby="edittechmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Teacher Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="all.php" enctype="multipart/form-data">
      <div class="modal-body">
		  					<input type="hidden" name="t_id" id="t_id"/>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Teacher Name<span class="clcl"> *</span></label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Teacher Name" autocomplete="off" required />
                                </div>
                                <div class="col-md-6">
                                    <label>DOB<span class="clcl"> *</span> </label>
                                    <input type="date" placeholder="DOB" name="dob" id="dob" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Gender<span class="clcl"> *</span></label>
                                    <select name="gender" class="form-control" id="gender" required>
                                      
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Father's Name<span class="clcl"> *</span> </label>
                                    <input type="text" placeholder="Father's Name" name="fname" id="fname" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Mobile No.<span class="clcl"> *</span></label>
                                    <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Mobile No." required />
                                </div>
                                <div class="col-md-6">
                                    <label>Email Id<span class="clcl"> *</span> </label>
                                    <input type="email" placeholder="Email Id" name="email" id="email" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Department<span class="clcl"> *</span></label>
                                    <select name="dept" class="form-control" id="dept" required>
                                        
                                    <?php
									$q_dep="select * from tbl_department";
									$res_dep=mysqli_query($dbCon,$q_dep);
									

									while($row_dep=mysqli_fetch_array($res_dep))
									{
									?>
									<option value="<?php echo $row_dep['dept_id'];?>"><?php echo $row_dep['dept_name'];?></option>
									<?php
									}
									?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Designation<span class="clcl"> *</span></label>
                                    <input type="text" placeholder="Designation" name="designation" id="designation" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Highest Qualification<span class="clcl"> *</span></label>
                                    <input type="text" placeholder="Highest Qualification" name="quali" id="quali" class="form-control" required />
                                </div>
                                <div class="col-md-6">
                                    <label>Address<span class="clcl"> *</span></label>
                                    <input type="text" placeholder="Address" name="address" id="address" class="form-control" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">                            
                                <div class="col-md-6">
                                    <label>Select Teacher Pic<span class="clcl"> </span></label>
                                    <input type="file"  name="file"  class="form-control" />
                                </div>
								<div class="col-md-6">
									<img src="" id="toldpic" style="height:100px; width:100px;" />
								</div>
                            </div>
                        </div>
                  
                 
               
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
        <button type="Submit" class="btn btn-primary" name="Editteacher">Save changes</button>
      </div>
      </form>
    </div>
  </div>
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
           



		   <script>


jQuery(document).ready(function () {

	jQuery("#msg").fadeIn("fast");
	jQuery("#msg").fadeOut(20000);
});
</script>







<script>
    function editmodal(p){
    
      var a=p.value;
      // alert(a);
       jQuery.ajax({
           url:"fetchrecord.php",
           method:"post",
           data:{t:'teacher',id:a},
           
           beforeSend:function(){
               p.innerText="Please Wait....";
           },
           success:function(v){
              
               var a=JSON.parse(v);
               p.innerText="Edit";
              console.log(a);
            $('#t_id').val(a.tech_id);
			$('#name').val(a.name);
			$('#dob').val(a.dob);
			var gen="<option selected  hidden>"+a.gender+"</option>";
			$('#gender').append(gen);
			$('#fname').val(a.fname);
			$('#mobile').val(a.mobile);
			$('#email').val(a.email);
			var dep="<option value='"+a.dept_id+"' selected  hidden>"+a.dept_name+"</option>"
			$('#dept').append(dep);
			$('#designation').val(a.designation);
			$('#quali').val(a.qualification);
			$('#address').val(a.address);
			$("#toldpic").attr("src","teacher/"+a.pic);
               $('#edittechmodal').modal('toggle');
           }
       });
    }
</script>








           	<?php include 'footer.php';?>