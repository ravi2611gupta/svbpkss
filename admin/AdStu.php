<?php
include("connection.php");

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
                    <h5 class="card-title">Add Student</h5>
                    <h5 class="card-title" id="msg" style="color:orangered;"></h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload" onclick="formrest()"></a>                            
                        </div>
                    </div>
                </div>
                <form action="all.php" method="post" enctype="multipart/form-data" >
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
								   <label>Student Name<span class="clcl"> *</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Name" name="name" required />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
								    <label>Branch<span class="clcl"> *</span></label>
                                    <select name="branch" class="form-control" required>
                                        <option value="" disabled selected>Select Branch</option>
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
							<div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
								    <label>Company Name<span class="clcl"> *</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Company Name" name="company" required />
                                </div>
                            </div>
                        </div>
						<div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
									 <label>Session<span class="clcl"> *</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Session" name="session" required />
                                </div>
                            </div>
                        </div>
					



                        <div class="text-left">
                            <button type="submit" name="addstudent" class="btn btn-primary">Add Student</button>
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





<!-- Modal -->
<div class="modal fade" id="editvideomodal" tabindex="-1" role="dialog" aria-labelledby="editvideomodal" aria-hidden="true">
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

		  					<input type="hidden" name="editvid" id="editv_id"/>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Title<span class="clcl"> *</span></label>
                                    <input type="text" class="form-control" name="titleedit" id="title" placeholder="Title"  autocomplete="off" required />
                                </div>
								
                                <div class="col-md-6">
                                     
									 <label>URL<span class="clcl"> *</span></label>
                                    <input type="text" class="form-control" name="urledit" id="url" placeholder="URL"  autocomplete="off" required />	
                                    
                                </div>
								    <div class="col-md-6">
                                     
									 <label>Subject<span class="clcl"> *</span></label>
                                    <input type="text" class="form-control" name="subedit" id="subject" placeholder="subject"  autocomplete="off" required />	
                                    
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
								<div class="col-md-6">
								<label>Year<span class="clcl"> *</span></label>
                                   	<select name="yearedit" class="form-control" required>
                                        <option  disabled selected hidden id="yselected" value=""></option>
                                        <option value="1st">1st</option>
                                        <option value="2nd">2nd</option>
                                        <option value="3rd">3rd</option>
                                    </select>
								</div>
								
                            </div>
                        </div>
                       

                  
                 
               
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
        <button type="Submit" class="btn btn-primary" name="EditVideo">Save changes</button>
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
	
	
	    function editvideo(p){
    
      var a=p.value;
      // alert(a);
       jQuery.ajax({
           url:"fetchrecord.php",
           method:"post",
           data:{t:'videoupdate',id:a},    //edit
           
           beforeSend:function(){
               p.innerText="Please Wait....";
           },
           success:function(v){
              //alert(v);
               var a=JSON.parse(v);
               p.innerText="Edit";
              console.log(a);
           $('#editv_id').val(a.v_id);
			$('#title').val(a.title);
			$('#url').val(a.url);
			$('#subject').val(a.subject);
			
			$('#bselected').text(a.dept_name);
			
			$('#yselected').text(a.year);
               $('#editvideomodal').modal('toggle');
           }
       });
    }
	
	
	
	
	
	
	
	
	
</script>           
          	<?php include 'footer.php';?>