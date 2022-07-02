<?php
  
include("connection.php");
$query="select * from tbl_department";
$res=mysqli_query($dbCon,$query);
?>

	<?php include 'header.php';?>


<style>
    .clcl {
        font-size: 15pt;
        font-weight: bold;
        color: red;
    }
</style>

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
                    <h5 class="card-title">Add Branch</h5>
                    <h5 class="card-title" id="msg" style="color:orangered;">
                    <?php
                        if(isset($_REQUEST['msg']))
                        {
                            echo $_REQUEST['msg'];
                        }
                    ?>
                
                </h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload" onclick="formrest()"></a>
                            
                        </div>
                    </div>
                </div>
                <form action="dept.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-4">
                                    <label>Branch<span class="clcl"> *</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Branch" name="dept" required />
                                  
                                </div>
                                <div class="col-md-2">
                                    <label><span class="clcl">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></label>
                                    
                                    <button type="submit" class="btn btn-primary">Add Branch</button>
                                </div>

                            </div>
                        </div>
                       

                    </div>
                </form>

                <table class="table datatable-button-init-basic datatable-reorder">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Branch</th>
                            <th>Added Date</th>
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
                            <td><?php echo $a;$a++;?></td>
                            <td><?php echo $row['dept_name'];?></td>
                            <td><?php echo $row['date'];?></td>
                            <td><button href="#" value="<?php echo $row['dept_id']; ?>" class="btn btn-primary"onclick="editmodal(this)" name="depedit">Edit</button></td>
                            <td><a href="ddel.php?id=<?php echo $row['0'];?>" id="del">Delete</a></td>
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



<!--  Modal For Editing Department   -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="editdeptmodal" tabindex="-1" role="dialog" aria-labelledby="editdeptmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="all.php">
      <div class="modal-body">
                    <input type="hidden" name='id' id="deptid"/>
                    <label class="form-label">Edit Department Name</label>
                    <input type="text" required name="deptname" class="form-control" id="mdeptname"/>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
        <button type="Submit" class="btn btn-primary" name="Editdeptname">Save changes</button>
      </div>
      </form>
    </div>
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
       
        var status = confirm("Do you want to delete department?");
        if (status == true) {
            window.location.href = '../Admin/del_department?id=' + id;
        }
    }
</script>


<script>
    function editmodal(p){
    
      var a=p.value;
      // alert(a);
       jQuery.ajax({
           url:"fetchrecord.php",
           method:"post",
           data:{t:'dept',id:a},
           
           beforeSend:function(){
               p.innerText="Please Wait....";
           },
           success:function(v){
              
               var a=JSON.parse(v);
               p.innerText="Edit";
               $('#deptid').val(a.dept_id);
               $("#mdeptname").val(a.dept_name);
              
               $('#editdeptmodal').modal('toggle');
           }
       });
    }
</script>



	<?php include 'footer.php';?>