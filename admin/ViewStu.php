<?php
include("connection.php");
$query="select * from tbl_placement left join tbl_department on tbl_placement.branch=tbl_department.dept_id";
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
                    <h5 class="card-title">View Student</h5>
                    <h5 class="card-title" id="msg" style="color:orangered;"></h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload" onclick="formrest()"></a>                            
                        </div>
                    </div>
                </div>
              
                <table class="table datatable-button-init-basic datatable-reorder">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Student Name</th>
                            <th>Branch</th>
                            <th>Session</th>
                            <th>Date</th>
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
                            <td><?php echo $row['stu_name'];?></td>
                            <td><?php echo $row['dept_name'] ?></td>
                            <td><?php echo $row['session'];?></td>
                            <td><?php echo $row['date'];?></td>
                            <td><a href="delstu.php?id=<?php echo $row['s_id'];?>" id="del">Delete</a><button onclick="editplacement(this)" value="<?php echo $row['s_id'];?>"> Edit</button></td>
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





<!-- Modal -->
<div class="modal fade" id="editplacementmodal" tabindex="-1" role="dialog" aria-labelledby="editplacementmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Video Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="all.php" enctype="multipart/form-data">
      <div class="modal-body">

		  					<input type="hidden" name="editid" id="edits_id"/>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name<span class="clcl"> *</span></label>
                                    <input type="text" class="form-control" name="nameedit" id="name" placeholder="Name"  autocomplete="off" required />
                                </div>
								
                                <div class="col-md-6">
                                     
									 <label>Company<span class="clcl"> *</span></label>
                                    <input type="text" class="form-control" name="companyedit" id="company" placeholder="Company"  autocomplete="off" required />	
                                    
                                </div>
								    <div class="col-md-6">
                                     
									 <label>Session<span class="clcl"> *</span></label>
                                    <input type="text" class="form-control" name="sessionedit" id="session" placeholder="session"  autocomplete="off" required />	
                                    
                                </div>
								<div class="col-md-6">
								 <label>Branch<span class="clcl"> *</span></label>
                                    <select name="branchedit" class="form-control" required>
                                        <option  disabled selected hidden id="bselected" value=""></option>
                                        <!-----PHP CODE----->
										 <?php
										 $q="select * from tbl_department";
										 $resdep=mysqli_query($dbCon,$q);
										 while($v=mysqli_fetch_array($resdep))
										 {
										 
										 ?>
			
										 <option value="<?php echo $v['dept_id'];?>"><?php echo $v['dept_name'] ?></option>
											
										<?php 
										 }
										?>
										
										

                                    </select>
								
								</div>

								
                            </div>
                        </div>
                       

                  
                 
               
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
        <button type="Submit" class="btn btn-primary" name="EditPlacement">Save changes</button>
      </div>
      </form>
    </div>
  </div>
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
	
	
	    function editplacement(p){
    
      var a=p.value;
      // alert(a);
       jQuery.ajax({
           url:"fetchrecord.php",
           method:"post",
           data:{t:'placementupdate',id:a},    //edit
           
           beforeSend:function(){
               p.innerText="Please Wait....";
           },
           success:function(v){
              //alert(v);
               var a=JSON.parse(v);
               p.innerText="Edit";
              console.log(a);
           $('#edits_id').val(a.s_id);
			$('#name').val(a.stu_name);   //id ('#name')  & stu_name(db field)
			$('#company').val(a.company);
			$('#session').val(a.session);
			
			$('#bselected').text(a.dept_name);
			
		
               $('#editplacementmodal').modal('toggle');
           }
       });
    }
	
	
	
	
	
	
	
	
	
</script>           
          	<?php include 'footer.php';?>